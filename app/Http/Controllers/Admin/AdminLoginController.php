<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('Admin.login');
    }

    public function authenticate(Request $req){
        $validator= Validator::make($req->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validator->passes() ){
            if(Auth::guard('admin')->attempt(['email'=>$req->email, 'password'=>$req->password], $req->get('remember'))){
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('admin.login')->with('error','Either Email/Password Is Incorrect');
            }

        }else{
            return redirect()->route('admin.login')->withErrors($validator)->withInput($req->only('email'));
        }
    }
}
