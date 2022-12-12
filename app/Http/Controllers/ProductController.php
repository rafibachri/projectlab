<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function data(){
        $productlist = Product::all();

        return view('product',compact('productlist'));
    }

    public function detail($id)
    {
        $productdetail = Product::findOrFail($id);
        return view('productdetail',['productdetail'=>$productdetail]);
    }

}
