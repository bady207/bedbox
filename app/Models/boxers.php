<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class boxers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'weight_class',
        'negara',
        'coach_id',
        'wins',
        'lose',
        'image'
    ];

    protected $visible = [
        'id',
        'name',
        'slug',
        'weight_class',
        'negara',
        'pelatihs_id',
        'wins',
        'lose',
        'image'
    ];

    public function pelatihs(): BelongsTo
    {
        return $this->belongsTo(Pelatihs::class, 'pelatihs_id');
    }

    public function pertandingans(): HasMany
    {
        return $this->hasMany(Pertandingans::class);
    }
    
}
