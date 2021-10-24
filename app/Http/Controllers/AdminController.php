<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\{User,Post,Comment,Admin};
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{

   public function view_dashboard(){
       return view('Admin.dashboard');
   }



   public function viewUserList(){
       $users = User::all();
       return view ('Admin.userlist',['users'=>$users]);
   }


   public function posts_list(){

     $posts = Post::all();
     return view ('Admin.postlist',['posts'=>$posts]);

   }

   public function user_details($id){
      
   }


}


