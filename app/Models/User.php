<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Post,Comment};


class User extends Model
{
    use  HasFactory;


    protected $guarded =[];

    public $timestamps = false;


    public function posts()
        {
            return $this->hasMany(Post::class);
        }



}
