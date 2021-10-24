<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Post,Comment};

class Comment extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;

    public function post(){

        return $this->belongsTo(Post::class);

    }
}
