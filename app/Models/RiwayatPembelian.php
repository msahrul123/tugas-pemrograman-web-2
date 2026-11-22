<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'pembeli_id',
    'judul_game',
    'jenis',
    'tanggal',
    'total_bayar',
    'metode',
    'status',
])]
class RiwayatPembelian extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatPembelianFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
            'total_bayar' => 'integer',
        ];
    }

    public function pembeli(): BelongsTo
    {
        return $this->belongsTo(Pembeli::class);
    }
}