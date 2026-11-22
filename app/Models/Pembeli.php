<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['pembeli', 'email', 'telepon', 'alamat'])]

class Pembeli extends Model
{
    public function riwayatPembelians(): HasMany
    {
        return $this->hasMany(RiwayatPembelian::class);
    }
}
