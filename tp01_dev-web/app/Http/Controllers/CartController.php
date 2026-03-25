<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Models\Constantes;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get("cart", []);

        $ids = array_keys($cart);

        // Get products corresponding to these ids
        $weapons = [];
        if (!empty($ids)) {
            $weapons = Weapon::whereIn("id", $ids)->get();
        }

        $items = [];
        $subtotal = 0.00;

        foreach ($weapons as $weapon) {
            $quantity = $cart[$weapon->id] ?? 0;

            $quantityTotal = $weapon->price * $quantity;

            $subtotal += $quantityTotal;

            $items[] = [
                "weapon" => $weapon,
                "quantity" => $quantityTotal,
                "totalProduct" => $quantityTotal
            ];
        }

        $amounts = $this->calculateAmounts($subtotal);

        session()->put("total", $amounts["total"]);

        // Calculate the total cart
        return view('cart.index', [
            "items" => $items,
            "subtotal" => $subtotal,
            "totalTPS" => $amounts["tps"],
            "totalTVQ" => $amounts["tvq"],
            "total" => $amounts["total"]
        ]);
    }

    public function add(Request $request)
    {
        // Get the ID of the product to add
        $id = $request->id;

        // Verify the product using the model
        Weapon::findOrFail($id);

        // Get the cart from the session or create a new one
        // Example cart: [id] => quantity
        // $cart["1"] = 2; // 2 products with id 1
        $cart = session()->get("cart", []);

        // Add a product without overwriting products already present
        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        // Save the updated cart in the session
        session()->put("cart", $cart);

        return redirect()->route("cart");
    }

    private function calculateAmounts($subtotal) {
        // Calculate TPS, TVQ and total
        $totalTPS = $subtotal * Constantes::$TPS;
        $totalTVQ = ($totalTPS + $subtotal) * Constantes::$TVQ;
        $total = $subtotal + $totalTPS + $totalTVQ;

        return [
            "tps" => number_format($totalTPS, 2, ','),
            "tvq" => number_format($totalTVQ, 2, ','),
            "total" => number_format($total, 2, ',')
        ];
    }
}