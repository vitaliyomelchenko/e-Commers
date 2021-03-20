<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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
        ->join('products', 'carts.product_id', 'products.id')
        ->where('carts.user_id', $user_id)
        ->select('*', 'carts.id as cart_id')
        ->get();
        return view('cartList', ['products'=>$data]);
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect()->route('cartList');
    }

    public function orderNow()
    {
        $user_id = Session('user')->id;
        $totalPrice = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->where('carts.user_id', $user_id)
        ->sum('products.price');

        return view('orderNow', ['totalPrice'=>$totalPrice]);
    }

    public function orderPlays(Request $request)
    {
        $user_id = Session('user')->id;
        $carts = Cart::where('user_id', $user_id)->get();
        foreach($carts as $cart)
        {
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $user_id)->delete();
        }
        return redirect('/');
    }
}
