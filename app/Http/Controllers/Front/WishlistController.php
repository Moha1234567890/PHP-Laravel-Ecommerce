<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fronted\Wishlist;
use App\Models\Admin\Product;



class WishlistController extends Controller
{



    public function getWishlist() {

        $wishlistItems = Wishlist::where('user_id', Auth::id())->get();

        return view('front.wishlist.wishlist', compact('wishlistItems'));
    }

    public function addToWishlist(Request $request) {

        if(Auth::check()) {

            $prod_id = $request->input('pro_id');

            if(Product::where('id', $prod_id)->exists() AND !Wishlist::where('prod_id', $prod_id)->exists()) {

                    $wishlist = new Wishlist();

                    $wishlist->user_id = Auth::id();
                    $wishlist->prod_id = $prod_id;

                    $wishlist->save();

                    return response()->json(['status' =>  "Added to wishlist"]);



            } else {
                return response()->json(['status' => "Product aleardy added to whishlist"]);

            }

        } else {

            return response()->json(['status' => "Login to continue"]);


        }
    }



    public function deleteFromWishlist(Request $request) {
        if(Auth::check()) {

            $prod_id = $request->input('prod_id');

            if(Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {

                $wishlistItem = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();

                $wishlistItem->delete();

                return response()->json(['status' => "Item deleted"]);


            } else {
                return response()->json(['status' => "Login to continue"]);

            }
        }
    }


    public function wishlistCounter() {


        $wishlistCounter = Wishlist::where('user_id', Auth::id())->count();

        return response()->json(['count'=>  $wishlistCounter]);
    }


}
