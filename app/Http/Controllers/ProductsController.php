<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::orderBy('id')->paginate(10);
        return view('products.home', compact('products'));
    }

    public function ver($id){
        $product = Products::findOrFail($id);
        return view('products.product', compact('product'));
    }

    public function list(){
        $products = Products::orderBy('id')->paginate(10);
        return view('products.list', compact('products'));
    }

    public function destroy($id){
        Products::destroy($id);
        return back();
    }

    public function create(){
        return view('products.create');
    }

    public function edit($id){
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function store(Products $product){

    }

    public function update(Products $product){

    }
}
