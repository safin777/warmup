<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminAuthController extends Controller
{
    public function index(){
        return view ('Admin.login');
    }

    public function check_login(Request $request){

      $request->validate([
          'email'    => 'required|email', // make sure the email is an actual email
          'password' => 'required|min:3|max:15'
      ]);

    $email = $request->email;
    $password = $request->password;

     $admin = Admin::where('email', $email)->first();
     if ($admin){
         if(Hash::check($password,$admin->password)){
            // dd('success');
            $request->session()->put('admin_id',$admin->id);
            return view('Admin.dashboard');

         }

         else{
             return back()->with('fail','Invalid Password !!!');
         }

     }

     else{

        return back()->with('fail','No Account Found !!');

     }


     }
}
