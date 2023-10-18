<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comment;
use App\Models\Place;
use App\Models\Post;
use App\Models\Section;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Retrieves the data needed to render the index view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){
        return view('main.index', [
            'sliders' => Slider::all(),
            'places' => Place::where('status', 2)->where('showcase',1)->get(),
            'comments' => Comment::where('status', 2)->get(),
            'posts' => Post::all()
        ]);
    }

    /**
     * Retrieves the categories and section information for the main.categories view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categories(){
        return view('main.categories', [
            'categories' => Categories::where('main_category', 0)->get(),
            'section' => Section::where('page','categories')->get()
        ]);
    }

    public function category($slug,$sort = "az"){
        $category = Categories::where('slug',$slug)->first();
        $places = Place::where(function($query) use ($category) {
            $query->where('status', 2)
                    ->where('main_category', $category->id)
                    ->orWhere('sub_category', $category->id);
        })->get();

        if($sort == "az"){
            $places = $places->sortBy('title');
        }elseif($sort == "za"){
            $places = $places->sortByDesc('title');
        }elseif($sort == "new-old"){
            $places = $places->sortBy('id');
        }elseif($sort == "old-new"){
            $places = $places->sortByDesc('id');
        }

        
        return view('main.category', [
            'category' => $category,
            'places' => $places,
            'section' => Section::where('page','category')->get(),
            'sort' => $sort,
            'comments' => Comment::where('status', 2)->get(),
        ]);
    }
}
