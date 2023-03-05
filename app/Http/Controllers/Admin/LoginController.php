<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Auth;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function index()
    { 
        if (Auth::check()){
            return redirect('admin');
        }
        else{
        return view('Admin.login');
        }
    }

    public function store(Request $request)
    {
        $login =[
            'email' => $request -> email,
            'password' => $request ->password 
        ];
        if(Auth::attempt($login)){
            return redirect('admin');
        }else{
            return redirect('login');
        }
    }
    
}
