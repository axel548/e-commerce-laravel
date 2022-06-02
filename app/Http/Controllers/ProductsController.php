<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::get();
        return view('products.home', compact('products'));
    }

    public function ver($id){
        $product = Products::findOrFail($id);
        return view('products.product', compact('product'));
    }
}
