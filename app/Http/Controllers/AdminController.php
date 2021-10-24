<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\{Post,Comment,Admin};
use Illuminate\Support\Facades\Auth;
use App\Models\User;




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
        $userId =base64_decode($id);

        $userDetails = User::find($userId);

        $userPost = Post::find($userId);
        dd($userPost);

        return view ('Admin.user_details',['userDetails'=>$userDetails , 'userPost'=>$userPost]);


   }


}


