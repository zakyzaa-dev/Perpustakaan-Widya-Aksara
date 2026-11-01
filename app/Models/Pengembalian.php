<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Override;

#[Guarded('id_pengembalian')]
class Pengembalian extends Model
{
    protected $primaryKey = 'id_pengembalian';
    protected $table = 'pengembalian';
    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }

    #[Override]
    protected function casts()
    {
        return [
            'tanggal_kembali' => 'date'
        ];
    }
}
