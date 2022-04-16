<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fronted\Cart;
use App\Models\Admin\Product;

class CheckoutController extends Controller
{


    public function index() {


        $oldCartItems = Cart::where('user_id', Auth::id())->get();

        foreach($oldCartItems as $oldCartItem) {
            if(!Product::where('id', $oldCartItem->pro_id)->where('qty', '>=', $oldCartItem->pro_qty)->exists()) {
              $removedItem = Cart::where('user_id', Auth::id())->where('pro_id', '>=', $oldCartItem->pro_qty)->first();
              $removedItem->delete();
            }
        }


        $cartItems = Cart::where('user_id', Auth::id())->get();

        return view('front.checkout', compact('cartItems'));
    }
}
