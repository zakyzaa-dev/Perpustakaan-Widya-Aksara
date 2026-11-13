<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalians = Pengembalian::with(['peminjaman.anggota', 'peminjaman.buku'])
            ->latest()
            ->paginate(10);
        return view('pengembalian.index', compact('pengembalians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjamanBelumDikembalikan = Peminjaman::where('status', 'Dipinjam')->with(['anggota', 'buku'])->latest()->get();
        return view('pengembalian.create', [
            'peminjamans' => $peminjamanBelumDikembalikan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_peminjaman' => ['required', 'numeric', 'exists:peminjaman,id_peminjaman'],
            'tanggal_kembali' => ['required', 'date'],
        ]);

        $detailPeminjaman = Peminjaman::with('buku')->findOrFail($validated['id_peminjaman']);

        $tanggalKembali = Date::parse($validated['tanggal_kembali']);
        $tanggalHarusKembali = $detailPeminjaman->tanggal_harus_kembali;
        $telatHari = $tanggalHarusKembali->diffInDays($tanggalKembali);

        if ($tanggalKembali->lessThanOrEqualTo($tanggalHarusKembali)){
            $telatHari = 0;
        }

        $denda = 1000 * $telatHari;

        $pengembalian = DB::transaction(function () use ($detailPeminjaman, $tanggalKembali, $telatHari, $denda) {
            $pengembalian = Pengembalian::create([
                'id_peminjaman' => $detailPeminjaman->id_peminjaman,
                'tanggal_kembali' => $tanggalKembali,
                'terlambat_hari' => $telatHari,
                'denda' => $denda
            ]);

            $detailPeminjaman->buku?->increment('stok');
            $detailPeminjaman->update([
                'status' => 'Dikembalikan'
            ]);

            return $pengembalian;
        });

        return redirect()->route('pengembalian.index')->with('success', 'Berhasil mengembalikan peminjaman buku' . ($detailPeminjaman->buku?->judul_buku ?? '-') );

    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
