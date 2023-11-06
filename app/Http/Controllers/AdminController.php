<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Invoice;
use App\Models\Payments;
use App\Models\Place;
use App\Models\Section;
use App\Models\System;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
    *
    *   MAIN CONTROLLER
    *
    */
    public function dashboard(){
        return view('admin.main.dashboard');
    }

    public function profile(){
        return view('admin.main.profile');
    }

    /*
    *
    *   END MAIN CONTROLLER
    *
    */

    /*
    *
    *   USER CONTROLLER
    *
    */
    public function user(){
        return view('admin.user.all', ['users' => User::all()]);
    }

    public function set_passive(Request $request){
        $user = User::find($request->id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!".$request->id]);
        }elseif($user->status == 0){
            return response()->json(["type"=> "warning","message"=> "Bu kullanıcı zaten pasif"]);
        }else{
            $user->status = 0;
            if($user->save()){
                return response()->json(["type" => "success", "message" => "Kullanıcı Pasif Edildi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Kullanıcı Pasif Edilemedi"]);
            }
        }
    }

    public function set_active(Request $request){
        $user = User::find($request->id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!".$request->id]);
        }elseif($user->status == 1){
            return response()->json(["type"=> "warning","message"=> "Bu kullanıcı zaten aktif"]);
        }else{
            $user->status = 1;
            if($user->save()){
                return response()->json(["type" => "success", "message" => "Kullanıcı Pasif Edildi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Kullanıcı Pasif Edilemedi"]);
            }
        }
    }

    public function remove(Request $request){
        $user = User::find($request->id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!".$request->id]);
        }else{
            if($user->delete()){
                return response()->json(["type" => "success", "message" => "Kullanıcı Silindi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Kullanıcı silinemedi"]);
            }
        }
    }

    public function detail($id){
        $user = User::find($id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!".$id]);
        }else{
            return view('admin.user.detail', ["user" => $user, "places" => Place::where('owner', $user->id)->get(), "invoices" => Invoice::where('user', $user->id)->get(), "payments" => Payments::where('user', $user->id)->get(), "comments" => Comment::where('user', $user->id)->get()]);
        }
    }

    public function set_password(Request $request){
        $user = User::find($request->id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!".$request->id]);
        }else{
            $user->password = Hash::make($request->passowrd);
            if($user->save()){
                return response()->json(["type" => "success", "message" => "Şifre Değiştirildi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Şifre Değiştirilemedi"]);
            }
        }
    }

    public function new(){
        return view('admin.user.new');
    }

    public function create(Request $request){
        if(empty($request->name) || empty($request->email) || empty($request->password)){
            return response()->json(['type'=> 'warning', 'message'=> 'Tüm alanları doldurunuz', "status" => false]);
        }elseif($request->type == 0){
            return response()->json(['type'=> 'warning', 'message'=> 'Kullanıcı tipini seçiniz', "status" => false]);
        }else{
            $user = new User();
            $user->type = $request->type;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->web = $request->web;
            $user->status = 1;
            if($user->save()){
                return response()->json(['type'=> 'success', 'message'=> 'Kullanıcı oluşturuldu', "status" => true, "id" => $user->id]);
            }else{
                return response()->json(['type'=> 'danger', 'message'=> 'Kullanıcı oluşturulamadı', "status" => false]);
            }
        }
    }

    public function edit($id){
        $user = User::find($id);
        if(!$user){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kullanıcı Bulunamadı!"]);
        }else{
            return view('admin.user.edit', ["user" => $user]);
        }
    }
    public function update(Request $request){
        if(empty($request->name) || empty($request->email)){
            return response()->json(['type'=> 'warning', 'message'=> 'Tüm alanları doldurunuz', "status" => false]);
        }elseif($request->type == 0){
            return response()->json(['type'=> 'warning', 'message'=> 'Kullanıcı tipini seçiniz', "status" => false]);
        }else{
            $user = User::find($request->id);
            $user->type = $request->type;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->web = $request->web;
            if($user->save()){
                return response()->json(['type'=> 'success', 'message'=> 'Kullanıcı güncellendi', "status" => true, "id" => $user->id]);
            }else{
                return response()->json(['type'=> 'danger', 'message'=> 'Kullanıcı güncellenemedi', "status" => false]);
            }
        }
    }

    /*
    *
    *   END USER CONTROLLER
    *
    */

    /*
    *
    *   CATEGORY CONTROLLER
    *
    */

    public function category(){
        return view('admin.main.category', ['categories' => Categories::all()]);
    }

    public function create_category(Request $request){

        if(empty($request->name) || empty($request->slug) || empty($request->short) || empty($request->icon) || empty($request->cover_data)){
            return response()->json(['type'=> 'warning','message'=> 'Boş alan bırakmayın']);
        }

        $category = new Categories();
        $category->main_category = $request->main_category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->short_name = $request->short;
        $category->icon = $request->icon;
        $category->cover = $request->cover_data;
        if($category->save()){
            return response()->json(['type'=> 'success', 'message'=> 'Kategori oluşturuldu', "status" => true]);
        }else{
            return response()->json(['type'=> 'danger', 'message'=> 'Kategori oluşturulamadı', "status" => false]);
        }
    }

    public function update_category(Request $request){
        if(empty($request->name) || empty($request->slug) || empty($request->short) || empty($request->icon) || empty($request->cover_data)){
            return response()->json(['type'=> 'warning','message'=> 'Boş alan bırakmayın']);
        }

        $category = Categories::find($request->id);
        $category->main_category = $request->main_category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->short_name = $request->short;
        $category->icon = $request->icon;
        $category->cover = $request->cover_data;
        if($category->save()){
            return response()->json(['type'=> 'success', 'message'=> 'Kategori güncellendi', "status" => true]);
        }else{
            return response()->json(['type'=> 'danger', 'message'=> 'Kategori güncellenemedi', "status" => false]);
        }
    }

    public function remove_category(Request $request){
        $category = Categories::find($request->id);
        if(!$category){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Kategori Bulunamadı!"]);
        }else{
            if($category->delete()){
                return response()->json(["type" => "success", "message" => "Kategori Silindi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Kategori silinemedi"]);
            }
        }
    }
    /*
    *
    *   END CATEGORY CONTROLLER
    *
    */

    /*
    *
    *   PLACE CONTROLLER
    *
    */
    
    public function place(){
        return view('admin.place.all', ['places' => Place::all()]);
    }

    public function remove_place(Request $request){
        $place = Place::find($request->id);
        if(!$place){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mekan Bulunamadı!"]);
        }else{
            if($place->delete()){
                return response()->json(["type" => "success", "message" => "Mekan Silindi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Mekan silinemedi"]);
            }
        }
    }

    public function set_publish(Request $request){
        $place = Place::find($request->id);
        if(!$place){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mekan Bulunamadı!"]);
        }else{
            $place->status = 2;
            if($place->save()){
                return response()->json(["type" => "success", "message" => "Mekan Yayına Alındı", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Mekan Yayına Alınamadı"]);
            }
        }
    }

    public function set_unpublish(Request $request){
        $place = Place::find($request->id);
        if(!$place){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mekan Bulunamadı!"]);
        }else{
            $place->status = 0;
            if($place->save()){
                return response()->json(["type" => "success", "message" => "Mekan Yayından Kaldırıldı", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Mekan Yayından Kaldırılamadı"]);
            }
        }
    }

    public function set_showcase(Request $request){
        $place = Place::find($request->id);
        if(!$place){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mekan Bulunamadı!"]);
        }else{

            if($place->status != 2){
                return response()->json(["type" => "warning", "message" => "Önce mekanı yayına almalısınız."]);
            }

            $place->showcase = 1;
            if($place->save()){
                return response()->json(["type" => "success", "message" => "Mekan Vitrine Alındı", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Mekan Vitrene Alınamadı"]);
            }
        }
    }

    public function set_unshowcase(Request $request){
        $place = Place::find($request->id);
        if(!$place){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mekan Bulunamadı!"]);
        }else{
            $place->showcase = 0;
            if($place->save()){
                return response()->json(["type" => "success", "message" => "Mekan Vitrinden Kaldırıldı", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Mekan Vitrinden Kaldırılamadı"]);
            }
        }
    }

    public function place_detail($id){
        $place = Place::find($id);

        if($place){
            return view('admin.place.detail', ['place' => $place]);
        }
    }

     /*
    *
    *   END PLACE CONTROLLER
    *
    */

     /*
    *
    *   PAYMENT CONTROLLER
    *
    */
    
    public function payment(){
        return view('admin.payment.all', ['payments' => Payments::all()]);
    }

     /*
    *
    *   END PAYMENT CONTROLLER
    *
    */

    /*
    *
    *   CONTACT CONTROLLER
    *
    */
    public function contact(){
        return view('admin.contact.list', ['contact' => Contact::orderBy('id', 'desc')->get()]);
    }

    public function remove_contact(Request $request){
        $contact = Contact::find($request->id);
        if(!$contact){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Mesaj Bulunamadı!"]);
        }else{
            $contact->delete();
            return response()->json(["type" => "success", "message" => "Mesaj Silindi", "status" => true]);
        }
    }

    /*
    *
    *   END CONTACT CONTROLLER
    *
    */

    /*
    *
    *   FEATURES CONTROLLER
    *
    */
    
    public function features(){
        return view('admin.main.features', ['features' => Feature::all()]);
    }

    public function create_feature(Request $request){
        if(empty($request->icon) || empty($request->name)){
            return response()->json(['type'=> 'error', 'message'=> 'Tüm alanları doldurunuz', "status" => false]);
        }else{
            $feature = new Feature();
            $feature->icon = $request->icon;
            $feature->name = $request->name;
            if($feature->save()){
                return response()->json(['type'=> 'success', 'message'=> 'Ozellik oluşturuldu', "status" => true]);
            }else{
                return response()->json(['type'=> 'danger', 'message'=> 'Ozellik oluşturulamadı', "status" => false]);
            }
        }
    }
    public function update_feature(Request $request){
        if(empty($request->name) || empty($request->icon)){
            return response()->json(['type'=> 'warning','message'=> 'Boş alan bırakmayın']);
        }

        $feature = Feature::find($request->id);
            $feature->icon = $request->icon;
            $feature->name = $request->name;
        if($feature->save()){
            return response()->json(['type'=> 'success', 'message'=> 'Özellik güncellendi', "status" => true]);
        }else{
            return response()->json(['type'=> 'danger', 'message'=> 'Özellik güncellenemedi', "status" => false]);
        }
    }

    public function remove_feature(Request $request){
        $feature = Feature::find($request->id);
        if(!$feature){
            return response()->json(["type" => "error", "message" => "Sistem Hatası: Özellik Bulunamadı!"]);
        }else{
            if($feature->delete()){
                return response()->json(["type" => "success", "message" => "Özellik Silindi", "status" => true]);
            }else{
                return response()->json(["type" => "danger", "message" => "Sistem Hatası: Özellik silinemedi"]);
            }
        }
    }

    /*
    *
    *   END FEATURES CONTROLLER
    *
    */

    /*
    *
    *   SETTINGS CONTROLLER
    *
    */
    
    public function settings(){
        return view('admin.main.settings', ['system' => System::first(), 'section_menu' => Section::select('page')->distinct()->get(), 'sections' => Section::all()]);
    }

    public function change_status(Request $request){
        $section = Section::where('page', $request->page)->where('section',$request->section)->first();
        $section->status = $request->status;
        if($section->save()){
            return response()->json(['type'=> 'success', 'message'=> 'Ayarlar kaydedildi', "status" => true]);
        }else{
            return response()->json(['type'=> 'danger', 'message'=> 'Ayarlar kaydedilemedi', "status" => false]);
        }
    }

    public function save_settings(Request $request){
        $page = $request->page;
        $section = $request->section;

        $sec = Section::where('page', $page)->where('section', $section)->first();
        $sec->cover = $request->{$page . '_' . $section . '_cover'};
        $sec->title = $request->{$page . '_' . $section . '_title'};
        $sec->subtitle = $request->{$page . '_' . $section . '_subtitle'};
        $sec->detail = $request->{$page . '_' . $section . '_detail'};
        $sec->content = $request->{$page . '_' . $section . '_content'};
        $sec->button1_text = $request->{$page . '_' . $section . '_button1_text'};
        $sec->button1_style = $request->{$page . '_' . $section . '_button1_style'};
        $sec->button1_icon = $request->{$page . '_' . $section . '_button1_icon'};
        $sec->button1_src = $request->{$page . '_' . $section . '_button1_src'};
        $sec->button2_text = $request->{$page . '_' . $section . '_button2_text'};
        $sec->button2_style = $request->{$page . '_' . $section . '_button2_style'};
        $sec->button2_icon = $request->{$page . '_' . $section . '_button2_icon'};
        $sec->button2_src = $request->{$page . '_' . $section . '_button2_src'};

        if($sec->save()){
            return response()->json(['type'=> 'success', 'message'=> 'Ayarlar kaydedildi', "status" => true]);
        }else{
            return response()->json(['type'=> 'danger', 'message'=> 'Ayarlar kaydedilemedi', "status" => false]);
        }

    }

    /*
    *
    *   END SETTINGS CONTROLLER
    *
    */
}
