<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
        //dd(\request()->all());

        $pdt = Product::find(\request()->pdt_id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');
        Session::flash('success', 'Item added.');

        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);
        return redirect()->back();
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        return redirect()->back();

    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        Session::flash('success', 'Item deleted.');

        return redirect()->back();
    }

    public function rappidadd($id)
    {
        $pdt = Product::find($id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        Session::flash('success', 'Total items changed.');


        return redirect()->route('cart');
    }
}
