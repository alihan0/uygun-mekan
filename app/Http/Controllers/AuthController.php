<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register_company(){
        return view('auth.register_company');
    }
}
