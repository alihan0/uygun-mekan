<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    /**
     * login function.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function login(){
        return view('auth.login');
    }
    /**
     * Registers a company.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function register_company(){
        return view('auth.register_company');
    }

    /**
     * Saves a company based on the provided request data.
     *
     * @param Request $request The HTTP request object containing the data for the company.
     * @return \Illuminate\Http\JsonResponse A JSON response with the result of the save operation.
     */
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

    /**
     * Saves the data received from the request.
     *
     * @param Request $request the request object containing the data to be saved
     * 
     */
    public function save(Request $request){
        if(empty($request->name) || empty($request->email) || empty($request->password)){
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
                $user->type = "USER";
                $user->name = trim($request->name);
                $user->email = trim($request->email);
                $user->password = Hash::make($request->password);
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

    /**
     * Checks the login credentials and returns a JSON response based on the result.
     *
     * @param Request $request The HTTP request object.
     */
    public function login_control(Request $request){
        if(empty($request->email) || empty($request->password)){
            return response()->json([
               "type" => "warning",
               "message" => "Lütfen boş alan bırakmayın..." 
            ]);
        }else{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return response()->json([
                    "type" => "success",
                    "message" => "Giriş Basarılı!",
                    "status" => true
                ]);
            }else{
                return response()->json([
                    "type" => "warning",
                    "message" => "E-posta ya da şifre hatalı!",
                ]);
            }
        }
    }

    /**
     * Logout the user and redirect to the login page.
     *
     * @throws Some_Exception_Class description of exception
     * @return Some_Return_Value
     */
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function edit_profile(Request $request){
        if(empty($request->email)){
            return response()->json(["type" => "warning", "message" => "Lütfen e-posta adresi girin!"]);
        }elseif(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return response()->json(["type" => "warning", "message" => "Lütfen geçerli bir e-posta adresi girin!"]);
        }elseif(User::where('email',$request->email)->first()){
            return response()->json(["type" => "warning", "message" => "E-posta zaten kayıtlı!"]);
        }else{
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->web = $request->web;
            if($user->save()){
                return response()->json(["type" => "success", "message" => "Profil bilgileri güncellendi!", "status" => true]);
            }else{
                return response()->json(["type" => "warning", "message" => "Profil bilgileri güncellenirken hata oluştu!"]);
            }
        }
    }
}