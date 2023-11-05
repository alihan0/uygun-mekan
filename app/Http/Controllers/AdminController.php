<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.main.dashboard');
    }

    public function profile(){
        return view('admin.main.profile');
    }

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
            return view('admin.user.detail', ["user" => $user]);
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
}
