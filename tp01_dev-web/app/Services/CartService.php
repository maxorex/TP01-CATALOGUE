<?php

namespace App\Services;

use App\Models\Weapon;
use App\Models\Constantes;

class CartService
{
    public function calculate()
    {
        $cart = session()->get("cart", []);

        $ids = array_keys($cart);

        $weapons = [];
        if (!empty($ids)) {
            $weapons = Weapon::whereIn('id', $ids)->get();
        }

        $items = [];
        $subTotal = 0;

        foreach ($weapons as $weapon) {

            $amount = $cart[$weapon->id] ?? 0;

            $weaponTotal = $amount * $weapon->price;
            $subTotal += $weaponTotal;

            $items[] = [
                "weapon" => $weapon,
                "amount" => $amount,
                "totalWeapon" => $weaponTotal
            ];
        }

        $amounts = $this->calculateAmounts($subTotal);

        session()->put("total", $amounts["total"]);

        return [
            "items" => $items,
            "subTotal" => $subTotal,
            "totalTPS" => $amounts["tps"],
            "totalTVQ" => $amounts["tvq"],
            "total" => $amounts["total"],
        ];
    }

    private function calculateAmounts($subTotal)
    {
        $totalTPS = $subTotal * Constantes::$TPS;
        $totalTVQ = ($totalTPS + $subTotal) * Constantes::$TVQ;
        $total = $subTotal + $totalTPS + $totalTVQ;

        return [
            "tps" => $totalTPS,
            "tvq" => $totalTVQ,
            "total" => $total
        ];
    }
}