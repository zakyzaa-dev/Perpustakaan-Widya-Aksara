<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugass = [
            [
                'nama_petugas' => 'Hanni Pham',
                'username' => 'phamy',
                'jabatan' => 'Kepala perpustakaan',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Zaky RFN',
                'username' => 'kyzaa',
                'jabatan' => 'Staff',
                'password' => Hash::make('testing123'),
            ],
            // Member NewJeans
            [
                'nama_petugas' => 'Kim Minji',
                'username' => 'minji.bears',
                'jabatan' => 'Wakil Kepala',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Danielle Marsh',
                'username' => 'dani.marsh',
                'jabatan' => 'Staff Administrasi',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Kang Haerin',
                'username' => 'haerin.cat',
                'jabatan' => 'Staff Pelayanan',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Lee Hyein',
                'username' => 'hyein.maknae',
                'jabatan' => 'Staff Pelayanan',
                'password' => Hash::make('testing123'),
            ],
            // Member LE SSERAFIM
            [
                'nama_petugas' => 'Kim Chaewon',
                'username' => 'chaewon.ssammu',
                'jabatan' => 'Supervisor',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Miyawaki Sakura',
                'username' => 'sakura.chan',
                'jabatan' => 'Arsiparis',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Huh Yunjin',
                'username' => 'jennifer.huh',
                'jabatan' => 'Staff Humas',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Nakamura Kazuha',
                'username' => 'kazuha.zuha',
                'jabatan' => 'Staff Administrasi',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Hong Eunchae',
                'username' => 'eunchae.smile',
                'jabatan' => 'Staff Pelayanan',
                'password' => Hash::make('testing123'),
            ],
            // Tambahan Penggenap ke-13
            [
                'nama_petugas' => 'Kanggoro',
                'username' => 'kang.ro',
                'jabatan' => 'Keamanan',
                'password' => Hash::make('testing123'),
            ],
            [
                'nama_petugas' => 'Bambang',
                'username' => 'bamss',
                'jabatan' => 'Teknisi IT',
                'password' => Hash::make('testing123'),
            ],
        ];

        foreach ($petugass as $petugas) {
            Petugas::create($petugas);
        }
    }
}
