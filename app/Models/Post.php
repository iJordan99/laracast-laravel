<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // attributes that cant be mass assigned
    // protected $guarded = []

    // attributes that can be mass assigned
    protected $fillable = [
        'title',
        'excerpt',
        'body',
    ];
}
