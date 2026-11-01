<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::latest()->paginate(10);
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_buku' => ['required', 'string', 'max:150'],
            'penulis' => ['required', 'string', 'max:100'],
            'kode_buku' => ['required', 'string', 'max:20', 'unique:buku,kode_buku'],
            'stok' => ['required', 'numeric', 'min:1'],
        ]);

        $bukuNew = Buku::create($validated);
        return redirect()->route('buku.index')->with('success', "Berhasil menambah data buku $bukuNew->judul_buku");
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'judul_buku' => ['required', 'string', 'max:150'],
            'penulis' => ['required', 'string', 'max:100'],
            'kode_buku' => ['required', 'string', 'max:20', 'unique:buku,kode_buku,' . $buku->id_buku . ',id_buku'],
            'stok' => ['required', 'numeric', 'min:1'],
        ]);

        $buku->update($validated);

        return redirect()->route('buku.index')->with('success', "Berhasil mengedit data buku $buku->judul_buku");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return back()->with('success', "Berhasil menghapus data buku $buku->judul_buku");
    }
}
