<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('Admin.Dashboard');
    }

    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
