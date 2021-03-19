<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // $products = Product::all();
        // dump($data);
        return view('product', ['products'=> $products]);
    }

    public function detail($id)
    {
        $data =  Product::find($id);
        return view('detail', $data);
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%'.$request->search.'%')->get();
        return view('search', ['products'=>$products]);
    }
}
