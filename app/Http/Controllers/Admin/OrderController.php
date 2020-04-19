<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        $user = Auth::user()->name;
        return view('auth.orders.index', compact('orders', 'user'));
    }

    public function show(Order $order){
        return view('auth.orders.show', compact('order'));
    }
}
