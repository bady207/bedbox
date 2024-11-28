<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beritas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'content',
        'penulis',
        'image',
        'slug'
    ];

    protected $visible = [
        'id',
        'title',
        'content',
        'penulis',
        'image',
        'slug'
    ];
}
