<?php

namespace App\Models;

use Illuminate\Console\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Override;

#[Guarded('id_petugas')]
// #[Hidden(['password', 'email'])]
class Petugas extends Authenticatable
{
    protected $primaryKey = 'id_petugas';
    protected $table = 'petugas';
    #[Override]
    protected function casts()
    {
        return [
            'password' => 'hashed'
        ];
    }
}
