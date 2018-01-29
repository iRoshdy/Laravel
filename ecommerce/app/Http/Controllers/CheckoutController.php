<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Cart::content()->count() == 0)
        {
            Session::flash('info', 'Your cart still empty, do some shopping');
            return redirect()->back();
        }

        return view('checkout');
    }

    public function pay()
    {

//        stripe.com api test key

        Stripe::setApiKey("sk_test_CakUZADLsoQQzqo4bnRUnMH7");

        $charge = \Stripe\Charge::create([
            "amount" => Cart::total() *100,
            "currency" => "usd",
            "description" => "Roshdy's E-Commerce charge",
            "source" => request()->stripeToken,
        ]);

        Session::flash('success', 'Purchase successful. Wait for our email.');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
