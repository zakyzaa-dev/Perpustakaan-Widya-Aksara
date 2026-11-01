<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Guarded('id_anggota')]
class Anggota extends Model
{
    protected $primaryKey = 'id_anggota';
    protected $table = 'anggota';

    public function peminjamans(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota', 'id_anggota');
    }
}
