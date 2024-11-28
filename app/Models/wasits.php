<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wasits extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'sertifikat',
        'image'
    ];

    protected $visible = [
        'id',
        'name',
        'sertifikat',
        'image'
    ];

    public function pertandingans(): HasMany
    {
        return $this->hasMany(pertandingans::class);
    }
}
