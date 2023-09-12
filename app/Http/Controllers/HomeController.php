<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    // HOMEPAGE URL
    public function index()
    {
        return view('auth.register');
    }

    // // REGISTERATION PAGE URL
    // public function registration()
    // {
    //     return view('front.pageregister');
    // }

    // // REGISTRATION FORM
    // public function register(Request $request){
    //     $request->validate([
    //       'username' => 'required|string|',
    //       'email' => 'required|email|unique:users',
    //       'password' => 'required|email',
    //     ]);
    //   }

    // USER GETS AUTHENTICATED & REDIRECTED AFTER LOGIN
    public function redirect() {
        if(Auth::id())
        {
            if(Auth::user()->user_type == 'users')
            {
                return view('front.blog');
            }

            else
            {
                return view('admin.home');
            }
        }

        else
        {
            return redirect()->back();
        }
    }



}
