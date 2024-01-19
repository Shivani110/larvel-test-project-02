<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
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
                $role = Auth::user()->role;
                if($role == '1'){
                    return redirect('/admin-dashboard/index');
                }else{
                    Auth::logout();
                    return redirect('/admin-login')->with('error',"Login failed");
                }
                
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

    public function authlogin(Request $request){
        $clientIP = request()->ip(); 
        $request->validate([
            'password' => 'required',
        ]);

        $password = $request->password;
        if(Auth::attempt(['email'=> 'prpartner@gmail.com','password'=> $password])){
            $role = Auth::user()->role;
            if($role == '2'){
                $visitors = Visitor::where('ip_address','=',$clientIP)->first();

                if($visitors){
                    $visitors = Visitor::where('ip_address','=',$clientIP)->delete();

                    $visitor = new Visitor();
                    $visitor->ip_address = $clientIP;
                    $visitor->save();
                }else{
                    $visitors = Visitor::all();
                    $visitorarr = json_decode($visitors);
                  
                    if(count($visitorarr) >= 30){
                        $visitors = Visitor::where('ip_address','=',$clientIP)->first()->delete();
                       
                    }
                    $visitor = new Visitor();
                    $visitor->ip_address = $clientIP;
                    $visitor->save();
                }
                
                return redirect('/publications');
            }else{
                Auth::logout();
                return back()->with("error","Login failed !!");
            }
        }else{
            return back()->with('error',"The credentials doesn't matched");
        }
    }

    public function authlogout(){
        Auth::logout();
        return redirect('/');
    }
}
