<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\FeatureAttachment;
use App\Models\Invoice;
use App\Models\Place;
use App\Models\Post;
use App\Models\Section;
use App\Models\Slider;
use App\Models\System;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
                    ->where('category', $category->id);
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

    /**
     * Renders the account view with data.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function account(){
        return view('account.account', [
            'section' => Section::where('page','account')->get(),
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function upload_cover(Request $request) {
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('public/covers');
            $url = asset(str_replace('public', 'storage', $path));
            return response()->json(["type" => "success", "message" => "Kapak başarıyla yüklendi", "url" => $url, "status" => true], 200);
        }
        return response()->json(["type" => "warning", "message" => "Dosya yüklenirken bir hata oluştu."], 500);
    }
    
    public function new_place(){
        return view('main.new_place', ['features' => Feature::all()]);
    }
    public function place_save(Request $request){
        if(empty($request->category) || empty($request->title) || empty($request->detail) || empty($request->cover) || empty($request->web) || empty($request->phone) || empty($request->capacity) || empty($request->address)){
            return response()->json(["type" => "warning", "message" => "* ile işaretlenen alanları doldurmak zorundasınız"]);
        }elseif(empty($request->monday_open_time) || empty($request->monday_close_time) || empty($request->tuesday_open_time) || empty($request->tuesday_close_time) || empty($request->wednesday_open_time) || empty($request->wednesday_close_time) || empty($request->thursday_open_time) || empty($request->thursday_close_time) || empty($request->friday_open_time) || empty($request->friday_close_time) || empty($request->saturday_open_time) || empty($request->saturday_close_time) || empty($request->sunday_open_time) || empty($request->sunday_close_time)){
            return response()->json(["type" => "warning", "message" => "Mekanın açılış ve kapanış saatlerini belirtin.",
            "days" => $request->sunday_close_time
        ]);
        }elseif(empty($request->features)){
            return response()->json(["type" => "warning", "message" => "Mekanın özelliklerini belirtin."]);
        }else{
            $place = new Place;
            $place->category = $request->category;
            $place->title = trim($request->title);
            $place->detail = trim($request->detail);
            $place->cover = $request->cover;
            $place->website = trim($request->web);
            $place->phone = $request->phone;
            $place->email = $request->email;
            $place->address = $request->address;
            $place->facebook = $request->facebook;
            $place->twitter = $request->twitter;
            $place->instagram = $request->instagram;
            $place->capacity = $request->capacity;
            $place->monday_open_time = $request->monday_open_time;
            $place->monday_close_time = $request->monday_close_time;
            $place->tuesday_open_time = $request->tuesday_open_time;
            $place->tuesday_close_time = $request->tuesday_close_time;
            $place->wednesday_open_time = $request->wednesday_open_time;
            $place->wednesday_close_time = $request->wednesday_close_time;
            $place->thursday_open_time = $request->thursday_open_time;
            $place->thursday_close_time = $request->thursday_close_time;
            $place->friday_open_time = $request->friday_open_time;
            $place->friday_close_time = $request->friday_close_time;
            $place->saturday_open_time = $request->saturday_open_time;
            $place->saturday_close_time = $request->saturday_close_time;
            $place->sunday_open_time = $request->sunday_open_time;
            $place->sunday_close_time = $request->sunday_close_time;
            $place->status = 1;
            $place->showcase = 0;
            $place->tags = $request->tags;
            $place->slug = Str::slug($request->title, '-');
            $place->owner = Auth::user()->id;
            if($place->save()){
                $features = explode(',', $request->features);

                foreach ($features as $feature) {
                    $attach = new FeatureAttachment;
                    $attach->feature = $feature;
                    $attach->place = $place->id;
                    if(!$attach->save()){
                        return response()->json(["type" => "warning", "message" => "Özellik kaydedilemedi!"]);
                    }
                }

                $system = System::first();
                if($system->discounted_subs_day > 0){
                    $amount = $system->discounted_subs_price;
                }else{
                    $amount = $system->subs_price;
                }

                $inv = new Invoice;
                $inv->user = Auth::user()->id;
                $inv->amount = $amount;
                $inv->last_payment_date = Carbon::now()->addDays(5);
                $inv->status = 1;

                $inv->save();

                return response()->json(["type" => "success", "message" => "Mekan başarıyla kaydedildi!", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Mekan kaydedilemedi!"]);
            }
        }
    }

    public function payment($id){
        $inv = Invoice::find($id);

        if($inv && $inv->status == 1){
            return view('main.payment', ['inv' => $inv]);
        }else{
            return redirect('/');
        }
    }

    public function place_detail($slug){
        return view('main.place_detail', ['place' => Place::where('slug', $slug)->first()]);
    }

    public function comment(Request $request){
        if(empty($request->message)){
            return response()->json(['type'=> 'error','message'=> 'Yorum alanı doldurulmalıdır.']);
        }else{
            $comment = new Comment;
            $comment->comment = $request->message;
            $comment->status = 1;
            $comment->user = $request->user;
            $comment->place = $request->place;

            if($comment->save()){
                return response()->json(['type'=> 'success','message'=> 'Yorum başarıyla kaydedildi.','status'=>true]);
            }else{
                return response()->json(['type'=> 'error','message'=> 'Yorum kaydedilemedi.']);
            }
        }
    }

    public function save_contact(Request $request){
        if(empty($request->message) || empty($request->name) || empty($request->email) || empty($request->phone) || empty($request->subject)){
            return response()->json(['type'=> 'error','message'=> 'Tüm alanları doldurun.']);
        }else{
            $mes = new Contact;
            $mes->name = $request->name;
            $mes->email = $request->email;
            $mes->phone = $request->phone;
            $mes->subject = $request->subject;
            $mes->message = $request->message;
            if($mes->save()){
                return response()->json(['type'=> 'success','message'=> 'Mesajınız kaydedildi.','status'=>true]);
            }else{
                return response()->json(['type'=> 'error','message'=> 'Mesajınız kaydedilemedi.']);
            }
        }
    }
}
