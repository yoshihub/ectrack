<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('/product/index', ['products' => $products]);
    }

    public function show(Request $request)
    {
        $product_id = $request->id;
        $product = Product::find($product_id);
        return view('/product/show', ['product' => $product]);
    }

    public function purchase()
    {
        return view('/layouts/purchase');
    }

    public function search(Request $request)
    {
        $products = Product::AgeBottom($request->bottom)->AgeTop($request->top)->get();
        //$products = Product::whereIn('products.kinds', $request->kinds)->get();
        return view('product.index', ['products' => $products, 'defaultBottom' => $request->bottom, 'defaultTop' => $request->top]);
    }
}
