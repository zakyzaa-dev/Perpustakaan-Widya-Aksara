<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Anggota::all();
        $books = Buku::where('stok', '>', 0)->latest()->get();
        $officers = Petugas::all();

        return view('peminjaman.create', compact('members', 'books', 'officers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_buku' => ['required', 'numeric', 'exists:buku,id_buku'],
            'id_anggota' => ['required', 'numeric', 'exists:anggota,id_anggota'],
            'id_petugas' => ['required', 'numeric', 'exists:petugas,id_petugas'],
            'tanggal_pinjam' => ['required', 'date'],
            'tanggal_harus_kembali' => ['required', 'date', 'after_or_equal:tanggal_pinjam'],
        ]);

        // Buku::findOrFail($validated['id_buku'])->decrement('stok'); // Mengurangi stok
        Buku::where('id_buku', $validated['id_buku'])
            ->where('stok', '>', 0)
            ->firstOrFail()
            ->decrement('stok');

        $peminjamanNew = Peminjaman::create($validated);
        $lamaPinjam = Carbon::parse($validated['tanggal_pinjam'])->diffInDays($validated['tanggal_harus_kembali']);


        return redirect()->route('peminjaman.index')->with('success', ($peminjamanNew->anggota?->nama_anggota ?? '-') . " Berhasil meminjam buku " . ($peminjamanNew->buku?->judul_buku ?? '-') . " selama $lamaPinjam hari");
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
