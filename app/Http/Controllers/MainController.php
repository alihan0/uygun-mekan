<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Place;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index', [
            'sliders' => Slider::all(),
            'places' => Place::where('status', 2)->where('showcase',1)->get(),
            'comments' => Comment::where('status', 2)->get(),
        ]);
    }
}
