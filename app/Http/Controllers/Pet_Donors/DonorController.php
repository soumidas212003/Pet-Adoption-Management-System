<?php

namespace App\Http\Controllers\Pet_Donors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Donor;
use App\Models\Pet;
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


    public function showpet(string $id){
        $pets = DB::table('pets')->where('id',$id)->get();
                
        return view('Pet-Donors.View-Pet', ['pets' => $pets]);
    }

    public function mypets(){
        $pets = DB::table('pets')
                ->where('pets.owner_id', Auth::guard('donor')->user()->id)
                ->get();
        return view('Pet-Donors.mypets', ['pets' => $pets]);
    }
    

    public function newpet(){
        return view('Pet-Donors.addnewpet');
    }

    
    
    
    

    public function updatepet(string $id){
        $pets=DB::table('pets')
                ->find($id);
        return view('Pet-Donors.Update-Pet',['pets'=>$pets]);
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

    public function AddPet(Request $req){

        $req->validate([
            'image' => 'required',
            'name' => 'required',
            'pettype' => 'required',
            'breed' => 'required',
            'petage'=>'required',
            'petgender'=>'required',
            'petvaccination'=>'required',
            'petneutered'=>'required',
            'shotsuptodate'=>'required',
            'gooddogs'=>'required',
            'goodkids'=>'required',
            'donationreason'=>'required',
            'donatepet'=>'required',
            'cretificate_pdf'=>'required'

        ]);
        $path=$req->file('image')->store('Images','public');
        $pathpdf=$req->file('cretificate_pdf')->store('Documents','public');
        $pet=new Pet();
        $pet->owner_id=Auth::guard('donor')->user()->id;
        $pet->pet_image=$path;
        $pet->pet_name=$req->name;
        $pet->pet_type=$req->pettype;
        $pet->pet_breed=$req->breed;
        $pet->pet_age=$req->petage;
        $pet->pet_gender=$req->petgender;
        $pet->pet_vaccination=$req->petvaccination;
        $pet->criteria_one=$req->petneutered;
        $pet->criteria_two=$req->shotsuptodate;
        $pet->criteria_three=$req->gooddogs;
        $pet->criteria_four=$req->goodkids;
        $pet->donation_reason=$req->donationreason;
        $pet->donate_pet_or_not=$req->donatepet;
        $pet->vaccination_certificate=$pathpdf;


        $pet->save();

        return redirect()->route('donor-new-pet')->with('success',"Pet Added Successfully");

        
    }

    public function updateformpet(Request $req, $id){
        $req->validate([
            'name' => 'required',
            'pettype' => 'required',
            'breed' => 'required',
            'petage'=>'required',
            'petgender'=>'required',
            'petvaccination'=>'required',
            'petneutered'=>'required',
            'shotsuptodate'=>'required',
            'gooddogs'=>'required',
            'goodkids'=>'required',
            'donationreason'=>'required',
            'donatepet'=>'required',

        ]);
        $pets=DB::table('pets')
        ->where('id', $id)
        ->update([
            'pet_name'=>$req->name,
            'pet_type'=>$req->pettype,
            'pet_breed'=>$req->breed,
            'pet_age'=>$req->petage,
            'pet_gender'=>$req->petgender,
            'pet_vaccination'=>$req->petvaccination,
            'criteria_one'=>$req->petneutered,
            'criteria_two'=>$req->shotsuptodate,
            'criteria_three'=>$req->gooddogs,
            'criteria_four'=>$req->goodkids,
            'donation_reason'=>$req->donationreason,
            'donate_pet_or_not'=>$req->donatepet,
        ]); 
        return redirect()->route('update-pet',$id)->with('success',"Pet Updated Successfully");
    }

    public function updatepetimage(Request $req, $id){
        $req->validate([
            'image' => 'required',
        ]);
        $path=$req->file('image')->store('Images','public');
        $pets=DB::table('pets')
        ->where('id', $id)
        ->update([
            'pet_image'=>$path
        ]);

        return redirect()->route('update-pet',$id)->with('success',"Pet Image Updated Successfully");
    }

    public function updatepetcertificate(Request $req, $id){
        $req->validate([
            'cretificate_pdf'=>'required'
        ]);
        $pathpdf=$req->file('cretificate_pdf')->store('Documents','public');
        $pets=DB::table('pets')
        ->where('id', $id)
        ->update([
            'vaccination_certificate'=>$pathpdf
        ]);

        return redirect()->route('update-pet',$id)->with('success',"Pet Vaccination Certificate Updated Successfully");
    }
}
