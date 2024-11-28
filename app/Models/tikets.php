<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tikets extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pertandingans_id',
        'nomor_kursi',
        'kategori',
        'harga',
        'stok',
        'users_id'
    ];

    protected $visible = [
        'id',
        'pertandingans_id',
        'nomor_kursi',
        'kategori',
        'harga',
        'stok',
        'users_id'
    ];

    public function pertandingans(): BelongsTo
    {
        return $this->belongsTo(pertandingans::class, 'pertandingans_id');
    }
}
