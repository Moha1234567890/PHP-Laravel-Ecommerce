<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fronted\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{

    public function index() {

        $myOrders = Order::where('status', '0')->get();
        return view('admin.orders.index', compact('myOrders'));
    }


    public function single($id) {
        $orders = Order::where('id', $id)->first();

        // return $orders;
        return view('admin.orders.single', compact('orders'));

    }

    public function update(Request $request, $id) {

        $order = Order::find($id);

        $order->status = $request->input('select_status');

        $order->update();

        return redirect('/get-orders-admin')->with('status', 'order updated');
    }

    public function historyOrders() {
        $myOrders = Order::where('status', '1')->get();
        return view('admin.orders.history', compact('myOrders'));



    }
}
