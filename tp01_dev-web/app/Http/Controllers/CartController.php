<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Models\Constantes;

class CartController extends Controller
{
    public function index()
    {
        // Récupérer le panier de la session ou un tableau vide s'il n'existe pas
        $panier = session()->get("panier", []);

        // recuperer tous les ids du panier
        $ids = array_keys($panier);

        // récupérer les produits correspondants à ces ids
        $produits = [];
        if (!empty($ids)) {
            $produits = Weapon::whereIn("id", $ids)->get();
        }

        $items = [];
        $sousTotal = 0.00;

        foreach ($produits as $produit) {
            // récupérer la quantité du produit dans le panier
            $quantite = $panier[$produit->id] ?? 0;

            $totalProduit = $produit->prix * $quantite;

            $sousTotal += $totalProduit;

            $items[] = [
                "produit" => $produit,
                "quantite" => $quantite,
                "totalProduit" => $totalProduit
            ];
        }

        $montants = $this->calculerMontants($sousTotal);

        session()->put("total", $montants["total"]);

        //calculer le total du panier
        return view('panier.index', [
            "items" => $items,
            "sousTotal" => $sousTotal,
            "totalTPS" => $montants["tps"],
            "totalTVQ" => $montants["tvq"],
            "total" => $montants["total"]
        ]);
    }

    public function ajouter(Request $request)
    {
        // Récupérer l'ID du produit à ajouter
        $id = $request->id;

        // verifier le produit à l'aide du modèle
        Weapon::findOrFail($id);

        // recuperer le panier de la session ou en créer un nouveau
        // exemple de panier : [id] => quantité
        // $panier["1"] = 2; // 2 produits avec l'id 1
        $panier = session()->get("panier", []);

        // Ajouter un produit en s'assurant de ne pas écraser les produits déjà présents
        if (isset($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        // Enregistrer le panier mis à jour dans la session
        session()->put("panier", $panier);

        // 
        return redirect()->route("panier");
    }

    private function calculerMontants($sousTotal) {
        // Calculer La TPS, la TVQ et le total
        $totalTPS = $sousTotal * Constantes::$TPS;
        $totalTVQ = ($totalTPS + $sousTotal) * Constantes::$TVQ;
        $total = $sousTotal + $totalTPS + $totalTVQ;

        return [
            "tps" => number_format($totalTPS, 2, ','),
            "tvq" => number_format($totalTVQ, 2, ','),
            "total" => number_format($total, 2, ',')
        ];
    }
}