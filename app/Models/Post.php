<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $attributes = [
        'title' => 'string',
        'description' => 'string',
        'user_name' => 'string',
        'password' => 'string',
    ];
}
