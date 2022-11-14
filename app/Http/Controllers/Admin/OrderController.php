<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest('id')
            ->paginate(20);

        return view('admin.orders.index', compact('orders'));
    }
}
