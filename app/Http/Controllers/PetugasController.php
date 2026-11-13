<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_petugas' => ['required', 'string', 'max:100'],
            'jabatan' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:50', 'unique:petugas,username'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $petugasNew = Petugas::create($validated);
        return redirect()->route('petugas.index')->with('success', "Berhasil menambahkan petugas $petugasNew->nama_petugas");
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petuga)
    {
        $validated = $request->validate([
            'nama_petugas' => ['required', 'string', 'max:100'],
            'jabatan' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:50', 'unique:petugas,username,' . $petuga->id_petugas . ',id_petugas'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $petuga->update($validated);
        return redirect()->route('petugas.index')->with('success', "Berhasil mengupdate data petugas $petuga->nama_petugas");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        $petuga->delete();
        return back()->with('success', "Berhasil menghapus petugas $petuga->nama_petugas");
    }
}
