<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fronted\Cart;
use App\Models\Admin\Product;
use App\Models\Fronted\Order;
use App\Models\Fronted\OrderItem;
use App\Models\User;



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

    public function checkoutProcess(Request $request) {

        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('first_name');
        $order->lname = $request->input('last_name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone_number');
        $order->address_1 = $request->input('address_1');
        $order->address_2 = $request->input('address_2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pin_code');
        $order->total_price = '0'; //here is the price
        $order->tracking_no = 'mohamed' . rand(111,222);

        $order->save();

        $cartItems = Cart::where('user_id', Auth::id())->get();

        foreach($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $cartItem->pro_id,
                'qty' => $cartItem->pro_qty,
                'price' => $cartItem->products->selling_price,
            ]);

            $prod = Product::where('id', $cartItem->pro_id)->first();
            $prod->qty = $prod->qty - $cartItem->pro_qty;

            $prod->update();
        }


        if(Auth::user()->address_1 == NULL) {

            $user = User::where('id', Auth::id())->first();

            $user->lname = $request->input('last_name');
            $user->name = $request->input('first_name');
            $user->phone = $request->input('phone_number');
            $user->address_1 = $request->input('address_1');
            $user->address_2 = $request->input('address_2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pin_code');
            $user->update();


        }

        $cartItems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartItems);
        return redirect('/')->with('status', 'order placed');


    }
}
