<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        if(Session('user'))
        {
            return view('product', ['products'=> $products]);
        }
        else
        {
            return redirect()->route('login');
        }
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

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
    public function cartList()
    {
        $user_id = Session('user')->id;

        $data = DB::table('carts')
        ->join('products', 'products.id', 'carts.product_id')
        ->where('carts.user_id', $user_id)
        ->select()
        ->get();
        return view('cartList', ['products'=>$data]);
    }
}
