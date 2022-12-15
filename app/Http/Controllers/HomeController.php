<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use All\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');

        }
    }
}
