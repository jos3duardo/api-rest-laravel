<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest as Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
        $minutes = \Carbon\Carbon::now()->addMinutes(10);
        $products = \Cache::remember('api::products', $minutes, function (){
            Product::all();
        });
        return $products;
    }

    public function store(Request $request){
        \Cache::forget('api::products');
        return Product::create($request->all());
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return $product;
    }

    public function show(Product $product){
        return $product;
    }


    public function destroy(Product $product){
        $product->delete();
        return $product;
    }
}
