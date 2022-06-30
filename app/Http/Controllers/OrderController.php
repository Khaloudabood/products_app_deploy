<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {

        $data['orders'] = Order::all();
       $orders = Order::where('status', '0') ->get();
        return view('products.admin.orders-index') ->with($data);
    }

    public function view($id)
    {


        $data['orders'] = Order::all();
        $orders = Order::where('id', $id) ->get();
        return view('products.admin.orders-view')->with($data);

    }
}

