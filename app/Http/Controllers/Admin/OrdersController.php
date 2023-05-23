<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $orders = Order::all();
        return view('admin.orders.index',compact('orders','categories'));
    }

    public function delete(Order $order)
    {
        $order->delete();
        return redirect()->back()->with('message','Deleted');
    }
}
