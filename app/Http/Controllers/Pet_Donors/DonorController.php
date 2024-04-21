<?php

namespace App\Http\Controllers\Pet_Donors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Donor;
use Mail;
use App\Mail\OTPEmail;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class DonorController extends Controller
{


    public function index(){
        return view('Pet-Donors.login');
    }

    public function dashboard(){
        return view('Pet-Donors.Dashboard');
    }

    public function mypets(){
        return view('Pet-Donors.mypets');
    }

    public function newpet(){
        return view('Pet-Donors.addnewpet');
    }
    public function registerdonor(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:donors,email',
            'state' => 'required',
            'pin' => 'required',
            'password'=>'required',
            'confpassword'=>'required|same:password'

        ]);
        
        $otp = rand(100000, 999999);

        $d = new Donor();
        $d->full_name = $req->name;
        $d->email = $req->email;
        $d->state = $req->state;
        $d->pin_code = $req->pin;
        $d->otp = $otp;
        $d->password = Hash::make($req->password);
         // Store the OTP in the donor model
        $d->save(); // Save the donor to the database
        
        Session::put('donor_id', $d->id); // Store the donor's ID in the session

        Mail::to($req->email)->send(new OTPEmail($otp));

        return redirect()->route('otp-validate')->with('success', 'OTP Is Sent To Your Email');
    }

    public function donorauthenticate(Request $req){
        $validator= Validator::make($req->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validator->passes() ){
            if(Auth::guard('donor')->attempt(['email'=>$req->email, 'password'=>$req->password], $req->get('remember'))){
                return redirect()->route('donor-dashboard');
            }else{
                return redirect()->route('donor-login')->with('error','Either Email/Password Is Incorrect');
            }

        }else{
            return redirect()->route('donor-login')->withErrors($validator)->withInput($req->only('email'));
        }
    }

    public function validateOTP()
    {
        if (!Session::has('donor_id')) {
            return redirect()->route('donor-signup');
        } else {
            return view('OTP');
        }
    }

    public function verifyOTP(Request $req){
        $req->validate([
            'otp' => 'required|numeric' // Add validation for OTP field
        ]);

        $otp = $req->otp;
        $donor = Donor::find(Session::get('donor_id'));
        
        if($donor && $otp == $donor->OTP){
            // Correct OTP
            // Clear session
            return redirect()->route('donor-login')->with("success","User Created Successfully"); // Redirect to success page
        } else {
            // Incorrect OTP
            return redirect()->route('otp-validate')->with("error","Invalid OTP");
        }
    }

    public function Logout(){
        Auth::guard('donor')->logout();
        return redirect()->route('donor-login');
    }
}
