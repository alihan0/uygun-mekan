<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index', [
            'sliders' => Slider::all()
        ]);
    }
}
