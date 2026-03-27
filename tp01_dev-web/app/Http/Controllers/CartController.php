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

        $weapons = [];
        if (!empty($ids)) {
            $weapons = Weapon::whereIn("id", $ids)->get();
        }

        $items = [];
        $subtotal = 0;

        foreach ($weapons as $weapon) {
            $quantity = $cart[$weapon->id] ?? 0;

            $weaponTotal = $quantity * $weapon->price;

            $subtotal += $weaponTotal;

            $items[] = [
                "weapon" => $weapon,
                "quantity" => $quantity,
                "totalProduct" => $weaponTotal
            ];
        }

        $amounts = $this->calculateAmounts($subtotal);

        session()->put("total", $amounts["total"]);


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
        $id = $request->id;

        Weapon::findOrFail($id);

        $cart = session()->get("cart", []);

        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        session()->put("cart", $cart);

        return redirect()->route("cart")->with("success", "Le produit a été ajouté au panier");
    }

    public function delete($id)
    {
        $cart = session()->get("cart", []);

        if (!isset($cart[$id])) {
            return redirect()->route("cart")
                ->with("error", "Le produit n'existe pas dans le panier");
        }

        unset($cart[$id]);

        if (empty($cart)) {
            session()->forget("cart");
        } else {
            session()->put("cart", $cart);
        }

        return redirect()->route('cart')
            ->with("success", "Le produit a été retiré du panier");
    }

    public function modify(Request $request)
    {
        $validated = $request->validate(
            [
                "action" => "required",
                "quantities" => "required|array",
            ],
            [
                "quantities.required" => "La quantité est obligatoire",
            ]
        );

        $action = $request->input("action", "update");

        if ($action === "empty") {
            session()->forget("cart");
            return redirect()->route("cart")->with("success", "Le panier a été vidé");
        }

        $quantities = $request->input("quantities", []);

        $cart = session()->get("cart", []);

        foreach ($quantities as $id => $quantity) {
            $id = (int) $id;
            $quantity = (int) $quantity;
            if ($quantity <= 0) {
                unset($cart[$id]);
            } else {
                $cart[$id] = $quantity;
            }
        }
        empty($cart) ? session()->forget("cart") : session()->put("cart", $cart);

        return redirect()->route("cart")->with("success", "Le panier a été mis à jour");
    }


    private function calculateAmounts($subtotal)
    {
        $totalTPS = $subtotal * Constantes::$TPS;
        $totalTVQ = ($totalTPS + $subtotal) * Constantes::$TVQ;
        $total = $subtotal + $totalTPS + $totalTVQ;

        return [
            "tps" => number_format($totalTPS, 2, ","),
            "tvq" => number_format($totalTVQ, 2, ","),
            "total" => number_format($total, 2, ",")
        ];
    }
}
