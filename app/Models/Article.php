<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
       use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'published_at',
        'description',
        'image',
        'status',
    ];

    protected $casts = ['published_at' => 'datetime', ];
}
