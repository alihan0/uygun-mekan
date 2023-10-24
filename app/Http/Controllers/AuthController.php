<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register', [
            'section' => Section::where('page','register')->get()
        ]);
    }
}
