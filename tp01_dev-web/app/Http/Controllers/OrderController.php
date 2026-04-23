<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Services\CartService;
use App\Models\Order;
use App\Models\Purchase;
use App\Models\Client;



class OrderController extends Controller
{
    public function checkout()
    {
        $cart = (new CartService)->calculate();

        if (empty($cart['items'])) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }


        return view("order.index", [
            "items" => $cart["items"],
            "sousTotal" => $cart["subTotal"],
            "totalTPS" => $cart["totalTPS"],
            "totalTVQ" => $cart["totalTVQ"],
            "total" => $cart["total"],
            "stripeKey" => config("services.stripe.key")
        ]);
    }

    public function pay(Request $request)
    {
        $cart = session()->get("cart", []);
        if (empty($cart)) {
            return response()->json(["error" => "Votre panier est vide."], 400);
        }

        $cart = (new CartService)->calculate();
        $total = (int) round($cart["total"] * 100);

        Stripe::setApiKey(config("services.stripe.secret"));

         $intent = PaymentIntent::create([
            'amount' => $total,
            'currency' => 'cad',
            'metadata' => ['user_id' => auth('client')->id()]
        ]); 


        $order = new Order();
        $order->client_id = auth('client')->id();
        $order->total_amount = $total;
        $order->payment_status = 'en_attente';
        $order->state = 'en_preparation';
        $order->delivery_date = now()->addDays(5)->toDateString();
        $order->stripe_payment_intent_id = $intent->id;
        $order->save();


        return response()->json(['clientSecret' => $intent->client_secret]);
    }

    public function confirm(Request $request)
    {
        $id = $request->payment_intent;

        if ($id) {
            $order = Order::where('stripe_payment_intent_id', $id)->first();

            if (! $order) {
                return redirect()->route('cart')->with('error', 'Commande introuvable.');
            }

            $order->payment_status = 'completee';
            $order->save();

            $cart = (new CartService)->calculate();
            foreach ($cart["items"] as $item) {
                $purchase = new Purchase();
                $purchase->order_id = $order->id;
                $purchase->weapon_id = $item["weapon"]->id;
                $purchase->product_name = $item["weapon"]->name;
                $purchase->unit_price = $this->convertToCents($item["weapon"]->price);
                $purchase->quantity = $item["amount"];
                $purchase->total = $this->convertToCents($item["totalWeapon"]);
                $purchase->save();
            }
        }

        session()->forget("cart");
        session()->forget("total");

        return view("order.confirm");
    }

    public function history()
    {
        $orders = auth('client')->user()
            ->orders()->latest()->get();

        return view("order.history", [
            "orders" => $orders
        ]);
    }

    public function cancel()
    {
        return redirect()->route('cart')->with('error', 'Le paiement a été annulé.');
    }

    private function convertToCents($amount)
    {
        return (int) round($amount * 100);
    }
}
