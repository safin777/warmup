<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{User,Post,Comment,Admin};
use Illuminate\Support\Facades\Artisan;







class ApiController extends Controller
{
    public function getApiData(){

    //Apis url

    $users_url = "https://jsonplaceholder.typicode.com/users";
    $posts_url = "https://jsonplaceholder.typicode.com/posts";
    $comments_url = "https://jsonplaceholder.typicode.com/comments";

    //fetching APIs data using Http Facades
    $users = Http::get($users_url)->json();
    $posts = Http::get($posts_url)->json();
    $comments = Http::get($comments_url)->json();


    $user_data = User::all();
    $post_data = Post::all();
    $comment_data = Comment::all();


    if($user_data->isEmpty())
    {
        foreach ($users as $user){
            User::create([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'username' => $user ['username'],
                'street' => $user ['address']['street'],
                'suite' => $user['address']['suite'],
                'city' => $user['address']['city'],
                'zipcode' => $user['address']['zipcode'],
                'lat' => $user ['address']['geo']['lat'],
                'lng' => $user ['address']['geo']['lng'],
                'phone' => $user ['phone'],
                'website' => $user['website'],
                'company_name'=> $user['company']['name'],
                'catchPhrase'=> $user['company']['catchPhrase'],
                'bs'=> $user['company']['bs']
            ]);
        }

        if($post_data->isEmpty()){

            foreach($posts as $post){
                Post::create([
                'id'=>$post['id'],
                'user_id'=>$post['userId'],
                'title'=>$post['title'],
                'body'=>$post['body']
                ]);
            }


        }

        if($comment_data->isEmpty()){


            foreach($comments as $comment){
                Comment::create([
                 'id'=>$comment['id'],
                 'post_id'=>$comment['postId'],
                 'name'=>$comment['name'],
                 'email'=>$comment['email'],
                 'body'=>$comment['body']
                ]);
            }
        $admin_data = Artisan::call('db:seed', array('--class' => 'AdminsSeeder'));

        return redirect()->back()->with('success','Added Data Successfully');

        }

        return redirect()->back()->with('success','Added Data Successfully');

    }

 }


    public function cleanDatabase(){

        User::truncate();
        Comment::truncate();
        Post::truncate();
        Admin::truncate();

        return redirect()->back()->with('success','Database Cleared Successfully');
    }




}
