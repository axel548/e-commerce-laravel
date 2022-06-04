<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd(count($cartItems));
        return view('cart.cart', compact('cartItems'));
    }

    public function checkout()
    {
        $cartItems = \Cart::getContent();
        // dd(count($cartItems));
        return view('cart.client_information', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'sku' => $request-> sku,
                    'description' => $request->description,
                    'thumbnail' => $request->thumbnail,
                    'category' => $request->category,
                    'stock' => $request->stock,
                    'weight' => $request->weight,
                )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        // session()->flash('error', 'Product isn\'t Added to Cart!');

        // return redirect()->route('cart.list');
        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => true,
                    'value' => ($request->tipo == 'suma')? $request->quantity + 1 : $request->quantity - 1

                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

}
