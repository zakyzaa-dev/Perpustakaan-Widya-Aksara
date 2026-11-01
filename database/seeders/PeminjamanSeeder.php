<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peminjamans = [
            [
                'id_anggota' => 1,
                'id_buku' => 1,
                'id_petugas' => 1,
                'tanggal_pinjam' => Date::now()->subDays(10),
                'tanggal_harus_kembali' => Date::now()->subDays(3),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 2,
                'id_buku' => 3,
                'id_petugas' => 2,
                'tanggal_pinjam' => Date::now()->subDays(5),
                'tanggal_harus_kembali' => Date::now()->addDays(2),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 3,
                'id_buku' => 5,
                'id_petugas' => 3,
                'tanggal_pinjam' => Date::now()->subDays(14),
                'tanggal_harus_kembali' => Date::now()->subDays(7),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 4,
                'id_buku' => 2,
                'id_petugas' => 4,
                'tanggal_pinjam' => Date::now()->subDays(2),
                'tanggal_harus_kembali' => Date::now()->addDays(5),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 5,
                'id_buku' => 8,
                'id_petugas' => 5,
                'tanggal_pinjam' => Date::now()->subDays(20),
                'tanggal_harus_kembali' => Date::now()->subDays(13),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 6,
                'id_buku' => 10,
                'id_petugas' => 6,
                'tanggal_pinjam' => Date::now()->subDays(1),
                'tanggal_harus_kembali' => Date::now()->addDays(6),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 7,
                'id_buku' => 12,
                'id_petugas' => 7,
                'tanggal_pinjam' => Date::now()->subDays(8),
                'tanggal_harus_kembali' => Date::now()->subDays(1),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 8,
                'id_buku' => 4,
                'id_petugas' => 8,
                'tanggal_pinjam' => Date::now()->subDays(3),
                'tanggal_harus_kembali' => Date::now()->addDays(4),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 9,
                'id_buku' => 6,
                'id_petugas' => 9,
                'tanggal_pinjam' => Date::now()->subDays(12),
                'tanggal_harus_kembali' => Date::now()->subDays(5),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 10,
                'id_buku' => 7,
                'id_petugas' => 10,
                'tanggal_pinjam' => Date::now()->subDays(4),
                'tanggal_harus_kembali' => Date::now()->addDays(3),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 11,
                'id_buku' => 9,
                'id_petugas' => 11,
                'tanggal_pinjam' => Date::now()->subDays(15),
                'tanggal_harus_kembali' => Date::now()->subDays(8),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 12,
                'id_buku' => 11,
                'id_petugas' => 12,
                'tanggal_pinjam' => Date::now()->subDays(6),
                'tanggal_harus_kembali' => Date::now()->addDays(1),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 13,
                'id_buku' => 13,
                'id_petugas' => 13,
                'tanggal_pinjam' => Date::now()->subDays(25),
                'tanggal_harus_kembali' => Date::now()->subDays(18),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 14,
                'id_buku' => 15,
                'id_petugas' => 1,
                'tanggal_pinjam' => Date::now()->subDays(7),
                'tanggal_harus_kembali' => Date::now()->subDays(max(0, 0)), // Tepat waktu / dikembalikan
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 15,
                'id_buku' => 14,
                'id_petugas' => 2,
                'tanggal_pinjam' => Date::now(),
                'tanggal_harus_kembali' => Date::now()->addDays(7),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 16,
                'id_buku' => 16,
                'id_petugas' => 3,
                'tanggal_pinjam' => Date::now()->subDays(9),
                'tanggal_harus_kembali' => Date::now()->subDays(2),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 17,
                'id_buku' => 17,
                'id_petugas' => 4,
                'tanggal_pinjam' => Date::now()->subDays(3),
                'tanggal_harus_kembali' => Date::now()->addDays(4),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 18,
                'id_buku' => 18,
                'id_petugas' => 5,
                'tanggal_pinjam' => Date::now()->subDays(11),
                'tanggal_harus_kembali' => Date::now()->subDays(4),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 19,
                'id_buku' => 19,
                'id_petugas' => 6,
                'tanggal_pinjam' => Date::now()->subDays(30),
                'tanggal_harus_kembali' => Date::now()->subDays(23),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 20,
                'id_buku' => 20,
                'id_petugas' => 7,
                'tanggal_pinjam' => Date::now()->subDays(2),
                'tanggal_harus_kembali' => Date::now()->addDays(5),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 1,
                'id_buku' => 18,
                'id_petugas' => 8,
                'tanggal_pinjam' => Date::now()->subDays(13),
                'tanggal_harus_kembali' => Date::now()->subDays(6),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 3,
                'id_buku' => 15,
                'id_petugas' => 9,
                'tanggal_pinjam' => Date::now()->subDays(4),
                'tanggal_harus_kembali' => Date::now()->addDays(3),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 7,
                'id_buku' => 10,
                'id_petugas' => 10,
                'tanggal_pinjam' => Date::now()->subDays(16),
                'tanggal_harus_kembali' => Date::now()->subDays(9),
                'status' => 'Dikembalikan'
            ],
            [
                'id_anggota' => 10,
                'id_buku' => 5,
                'id_petugas' => 11,
                'tanggal_pinjam' => Date::now()->subDays(5),
                'tanggal_harus_kembali' => Date::now()->addDays(2),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 12,
                'id_buku' => 1,
                'id_petugas' => 12,
                'tanggal_pinjam' => Date::now()->subDays(18),
                'tanggal_harus_kembali' => Date::now()->subDays(11),
                'status' => 'Dikembalikan'
            ],
        ];

        foreach ($peminjamans as $item) {
            Peminjaman::create($item);
        }
    }
}
