<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Post,Comment};

class Post extends Model
{
    use HasFactory;


    protected $guarded =[];

    public $timestamps =false;

    public function user(){

        return $this->belongsTo(User::class);

        }

        public function comments()
        {
            return $this->hasMany(Comment::class);
        }


}
