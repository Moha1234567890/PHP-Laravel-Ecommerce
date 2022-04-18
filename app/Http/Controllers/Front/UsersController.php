<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fronted\Order;
use App\Models\Fronted\Cart;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index() {


        $myOrders = Order::where('user_id', Auth::id())->get();
        return view('front.orders.index', compact('myOrders'));
    }


    public function single($id) {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();

        return view('front.orders.single', compact('orders'));
    }
}
