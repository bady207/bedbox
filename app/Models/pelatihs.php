<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pelatihs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'pengalaman',
        'image'
    ];

    protected $visible = [
        'id',
        'name',
        'pengalaman',
        'image'
    ];

    public function boxers(): HasMany{
        return $this->hasMany(boxers::class);
    }
}
