<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Weapon;
use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function category()
    {
        return view("admin.category.index", [
            "categories" => Category::all()
        ]);
    }

    function categoryAdd(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('admin.category')->with('success', 'La catégorie a été ajoutée.');
    }

    function categoryEdit(Request $request)
    {
        $id = $request->id;

        $category = Category::findOrFail($id);

        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('admin.category')->with('success', 'La catégorie a été modifiée.');
    }

    function product()
    {
        return view("admin.product.index", [
            "weapons" => Weapon::all()
        ]);
    }

    function productAddForm()
    {
        return view("admin.product.add", [
            "categories" => Category::all()
        ]);
    }

    function productAdd(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer',
            'category_id' => 'required',
        ]);

        $weapon = new Weapon();
        $weapon->name = $validated['name'];
        $weapon->description = $validated['description'];
        $weapon->price = $validated['price'];
        $weapon->stock = $validated['stock'];
        $weapon->category_id = $validated['category_id'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('weapons', 'public');
            $weapon->imagePath = $path;
        }

        $weapon->save();

        return redirect()->route('admin.product')->with('success', 'Le produit a été ajouté.');
    }

    function productEditForm(Request $request)
    {
        return view("admin.product.edit", [
            "weapon" => Weapon::findOrFail($request->id),
            "categories" => Category::all()
        ]);
    }

    function productEdit(Request $request)
    {
        $id = $request->id;
    
        $weapon = Weapon::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer',
            'category_id' => 'required',
        ]);

        $weapon->name = $validated['name'];
        $weapon->description = $validated['description'];
        $weapon->price = $validated['price'];
        $weapon->stock = $validated['stock'];
        $weapon->category_id = $validated['category_id'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('weapons', 'public');
            $weapon->imagePath = $path;
        }

        $weapon->save();

        return redirect()->route('admin.product')
            ->with('success', 'Le produit à été mis à jour.');
    }

    function order()
    {
        return view("admin.order.index", [
            "orders" => Order::all(),
        ]);
    }

    function orderDetails(Request $request)
    {
        $id = $request->id;

        $order = Order::findOrFail($id);

        $client = Client::findOrFail($order->client_id);

        return view('admin.order.details', [
            'order' => $order,
            'client' => $client,
            "states" => [
                'en_preparation' => 'En preparation',
                'envoyee' => 'Envoyee',
                'en_transit' => 'En transit',
                'livree' => 'Livree',
            ]
        ]);
    }

    function orderEdit(Request $request)
    {
        $id = $request->id;

        $order = Order::findOrFail($id);
        $order->state = $request->state;

        $order->save();

        return redirect()->route('admin.order')
            ->with('success', 'Le statut de livraison a été mis à jour.');
    }
}
