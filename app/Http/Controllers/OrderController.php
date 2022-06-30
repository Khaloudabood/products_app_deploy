<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {

        $data['orders'] = Order::all();
       $orders = Order::where('status', '0') ->get();
        return view('products.admin.orders-index') ->with($data);
    }
}
//public function display()
//{
  //  $data['products'] = Product::all();
   // return $data;
   //return view('products.displayProducts') -> with($data);

//}
