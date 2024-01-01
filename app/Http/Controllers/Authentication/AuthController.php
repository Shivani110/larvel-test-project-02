<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    public function adminlogin(Request $request){
        $validate = $request->validate([
            'g-recaptcha-response' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret_key = env('RECAPTCHA_SECRET_KEY');
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$recaptcha;
        $response_json = file_get_contents($url);
        $response = (array)json_decode($response_json);

        if($response['success'] == '1'){
            if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
                return redirect('/admin-dashboard/index');
            }else{
                return redirect('/admin-login')->with('error',"The credentials doesn't matched");
            }
        }else{
            return redirect('/admin-login')->with('error','Google recaptcha is not valid!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin-login');
    }
}
