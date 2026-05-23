<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Weapon;
use App\Models\Order;
use App\Models\Client;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\OrderRequest;
use App\Services\CartService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function category()
    {
        return view("admin.category.index", [
            "categories" => Category::all()
        ]);
    }

    function categoryAdd(CategoryRequest $request)
    {
        $data = $request->validated();
        $category = new Category();
        $category->name = $data['name'];
        $category->save();

        return redirect()->route('admin.category')->with('success', 'La catégorie a été ajoutée.');
    }

    function categoryEdit(CategoryRequest $request)
    {
        $id = $request->id;

        $data = $request->validated();
        $category = Category::findOrFail($id);
        $category->name = $data['name'];
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

    function productAdd(ProductRequest $request)
    {
        $data = $request->validated();

        $weapon = new Weapon();
        $weapon->name = $data['name'];
        $weapon->description = $data['description'];
        $weapon->price = $data['price'];
        $weapon->stock = $data['stock'];
        $weapon->category_id = $data['category_id'];

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();

            $file->move(public_path('images'), $fileName);

            $weapon->imagePath = $fileName;
        }

        $weapon->save();

        return redirect()->route('admin.product-edit-form', $weapon->id)
        ->with('success', 'Le produit a été ajouté.');
    }

    function productEditForm(Request $request)
    {
        $id = $request->id;

        return view("admin.product.edit", [
            "weapon" => Weapon::findOrFail($id),
            "categories" => Category::all()
        ]);
    }

    function productEdit(ProductRequest $request)
    {
        $id = $request->id;
    
        $weapon = Weapon::findOrFail($id);

        $data = $request->validated();

        $weapon->name = $data['name'];
        $weapon->description = $data['description'];
        $weapon->price = $data['price'];
        $weapon->stock = $data['stock'];
        $weapon->category_id = $data['category_id'];

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();

            $file->move(public_path('images'), $fileName);

            $weapon->imagePath = $fileName;
        }

        $weapon->save();

        return redirect()->route('admin.product-edit-form', $id)
            ->with('success', 'Le produit à été mis à jour.');
    }

    function order()
    {
        return view("admin.order.index", [
            "orders" => Order::latest()->get(),
        ]);
    }

    function orderDetails(Request $request)
    {
        $id = $request->id;

        $order = Order::findOrFail($id);

        $orderAmounts = (new CartService)->calculateAmounts($order->total_amount);

        $client = Client::findOrFail($order->client_id);

        return view('admin.order.details', [
            'order' => $order,
            "orderAmounts" => $orderAmounts,
            'client' => $client,
            "states" => [
                'en_preparation' => 'En préparation',
                'envoyee' => 'Envoyée',
                'en_transit' => 'En transit',
                'livree' => 'Livrée',
            ]
        ]);
    }

    function orderEdit(OrderRequest $request)
    {
        $id = $request->id;

        $data = $request->validated();
        $order = Order::findOrFail($id);
        $order->state = $data['state'];

        $order->save();

        return redirect()->route('admin.order-details', $id)
            ->with('success', 'Le statut de livraison a été mis à jour.');
    }
}
