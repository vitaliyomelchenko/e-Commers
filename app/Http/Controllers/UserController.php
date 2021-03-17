<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $user = User::where('email', $request->email)->first();
            // dd($request);
            if($user && Hash::check($request->password, $user->password))
            {
                $request->session()->put('user', $user);
                return redirect()->route('product');
            }
        }
        return view('login');
    }
}
