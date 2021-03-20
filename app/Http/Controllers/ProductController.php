<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
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

    public function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart();
            $cart->user_id = session('user')->id;
            $cart->product_id = $request['product_id'];
            $cart->save();

            return redirect()->route('login');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public static function cartItem()
    {
        $user_id = Session('user')->id;
        return Cart::where('user_id', $user_id)->count();
    }
}
