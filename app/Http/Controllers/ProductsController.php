<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request){
        if ($request->b == "&") {
            $search = (is_null($request->search)) ? "All" : $request->search;
            if ($search !== "All") {
                $products = Products::where('category', $request->search)->orderBy('id')->paginate(10);
            }else{
                $products = Products::orderBy('id')->paginate(10);
            }
        } else {
            $search =  $request->search;
            $products = Products::where('name', 'LIKE', "%{$search}%")
                ->orderBy('id')
                ->paginate(10);
        }


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

    public function create(Products $product){
        return view('products.create', compact('product'));
    }

    public function edit($id){
        $product = Products::findOrFail($id);
        // dd($product);
        return view('products.edit', compact('product'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ]);
    }

    public function update(Request $request){

    }
}
