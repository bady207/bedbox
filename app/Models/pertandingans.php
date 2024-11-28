<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pertandingans extends Model
{
    use HasFactory;

    protected $fillable = [
        'boxer1_id',
        'boxer2_id',
        'wasits_id',
        'tanggal_pertandingan',
        'jam_pertandingan',
        'hasil_pertandingan',
        'lokasi',
        'image'
    ];

    protected $visible = [
        'boxer1_id',
        'boxer2_id',
        'wasits_id',
        'tanggal_pertandingan',
        'jam_pertandingan',
        'hasil_pertandingan',
        'lokasi',
        'image'
    ];

    public function boxer1(): BelongsTo
    {
        return $this->belongsTo(Boxers::class, 'boxer1_id');
    }

    public function boxer2(): BelongsTo
    {
        return $this->belongsTo(Boxers::class, 'boxer2_id');
    }

    public function wasits(): BelongsTo
    {
        return $this->belongsTo(wasits::class, 'wasits_id');
    }

    public function tikets(): HasMany
    {
        return $this->hasMany(tikets::class);
    }
}
