<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get('cart', []);
    $cart[$id] = [
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => ($cart[$id]['quantity'] ?? 0) + 1,
    ];
    session(['cart' => $cart]);
    return redirect()->route('cart.index');
}

public function index()
{
    $cart = session('cart', []);
    return view('cart.index', compact('cart'));
}

public function checkout()
{
    return view('cart.checkout');
}

}
