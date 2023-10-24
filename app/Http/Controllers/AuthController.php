<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\User;
use Hash;
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

    public function save_company(Request $request){
        if(empty($request->name) || empty($request->email) || empty($request->password) || empty($request->company) || empty($request->phone) || empty($request->web)){
            return response()->json([
               "type" => "warning",
               "message" => "Lütfen boş alan bırakmayın..." 
            ]);
        }else{
            if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
                return response()->json([
                    "type" => "warning",
                    "message" => "Geçerli bir e-posta adrsi girin!" 
                 ]);
            }elseif(User::where('email',$request->email)->first()){
                return response()->json([
                    "type" => "warning",
                    "message" => "E-posta zaten kayıtlı!" 
                 ]);
            }else{
                $user = new User;
                $user->type = "COMPANY";
                $user->name = trim($request->name);
                $user->email = trim($request->email);
                $user->password = Hash::make($request->password);
                $user->company = trim($request->company);
                $user->phone = trim($request->company);
                $user->web = trim($request->web);
                $user->status = 1;
                if($user->save()){
                    return response()->json([
                        "type" => "success",
                        "message" => "Kayıt Basarılı!",
                        "status" => true
                    ]);
                }else{
                    return response()->json([
                        "type" => "warning",
                        "message" => "Kayıt Basarısız!",
                    ]);
                }
            }
        }
    }
}
