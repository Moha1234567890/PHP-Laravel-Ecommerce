<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

use App\Models\Fronted\Cart;

class CartController extends Controller
{


    public function addProduct(Request $request) {

        $pro_id = $request->input('pro_id');
        $pro_qty = $request->input('pro_qty');

        if(Auth::check()) {

            $prod_check = Product::where('id', $pro_id)->first();

            if($prod_check) {

                if(Cart::where('pro_id', $pro_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->name. " Aleardy added to cart"]);

                } else {
                    $cartItem = new Cart();

                    $cartItem->pro_id = $pro_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->pro_qty = $pro_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name. " Added to cart"]);

                }


             } else {


                return response()->json(['status' => $prod_check->name. " Aleardy added to cart"]);

             }


        } else {
            return response()->json(['status' => "Login to continue"]);

        }


    }



    public function displayCartItems() {

        $cartItems = Cart::where('user_id', Auth::id())->get();

        return view('front.cart', compact('cartItems'));
    }
}
