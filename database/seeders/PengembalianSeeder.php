<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peminjamans = Peminjaman::where('status', 'Dikembalikan')->get();

        foreach ($peminjamans as $index => $peminjaman) {
            $variasiHari = [0, 1, 3, 5, 2, 0, 4];
            $tambahHari = $variasiHari[$index % count($variasiHari)];

            $tanggalHarusKembali = Date::parse($peminjaman->tanggal_harus_kembali);
            $tanggalKembali = (clone $tanggalHarusKembali)->addDays($tambahHari);

            $terlambatHari = max(0, $tanggalHarusKembali->diffInDays($tanggalKembali, false));

            if ($tanggalKembali->lessThanOrEqualTo($tanggalHarusKembali)) {
                $terlambatHari = 0;
            }

            $tarifDendaPerHari = 1000;
            $denda = $terlambatHari * $tarifDendaPerHari;

            Pengembalian::create([
                'id_peminjaman' => $peminjaman->id_peminjaman,
                'tanggal_kembali' => $tanggalKembali,
                'terlambat_hari' => $terlambatHari,
                'denda' => $denda,
            ]);
        }
    }
}
