<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Mail\ProductRequestSubmited;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Imports\ProductsImport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
Use Alert;

class ProductsController extends Controller
{
    //
    public function store(Request $request)
    {

        $product = new Product();
        $product -> product_name =$request ->product_name;
        $product -> product_type =$request ->product_type;
        $product -> product_color =$request ->product_color;
        $product -> description =$request ->description;
        $product -> price =$request ->price;
        $product -> size =$request ->size;
        $product -> product_section =$request ->product_section;
        $issue ->user_id = Auth::user()->id;
        if($request -> hasfile('img'))
        {
            $file = $request ->file('img');
            $extension = $file ->getClientOriginalExtension();
            $filename = time() . '-' . $extension;
            $file -> move('images/', $filename);
            $product -> img = $filename;
        }

        $product -> save();

        //return back();
        return 'Record created successfully';

    }

    public function display()
    {
        $data['products'] = Product::all();
       // return $data;
       return view('products.displayProducts') -> with($data);

    }

    public function list()
    {
        $data ['products'] = product::all();

        return view('products-list',$data);


    }
}
