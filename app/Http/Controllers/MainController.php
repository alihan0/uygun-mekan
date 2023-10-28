<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comment;
use App\Models\Place;
use App\Models\Post;
use App\Models\Section;
use App\Models\Slider;
use App\Models\User;
use Auth;
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

    /**
     * Retrieves a category and its corresponding places based on the given slug.
     *
     * @param string $slug The slug of the category.
     * @param string $sort The sort order of the places (default: "az").
     * 
     */
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

    /**
     * Renders the 'main.blog' view with all blog posts and sections for the blog page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function blog(){
        return view('main.blog', [
            'posts' => Post::all(),
            'section' => Section::where('page','blog')->get()
        ]);
    }

    /**
     * Retrieves the details of a blog post.
     *
     * @param int $id The ID of the blog post.
     * 
     */
    public function blog_detail($id){
        $post = Post::find($id);
    
        // Seçilen ID dışındaki rastgele 2 gönderiyi al
        $randomPosts = Post::where('id', '!=', $id)->inRandomOrder()->take(2)->get();
    
        return view('main.blog_detail', [
            'post' => $post,
            'section' => Section::where('page','blog_detail')->get(),
            'previousPost' => $randomPosts[0] ?? null, // Eğer 2. post yoksa null olarak atanır
            'nextPost' => $randomPosts[1] ?? null, // Eğer 2. post yoksa null olarak atanır
        ]);
    }

    /**
     * Renders the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function contact(){
        return view('main.contact', [
            'section' => Section::where('page','contact')->get()
        ]);
    }

    public function account(){
        return view('account.account', [
            'section' => Section::where('page','account')->get(),
            'user' => User::find(Auth::user()->id)
        ]);
    }
}
