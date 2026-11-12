<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Kategori;
use App\Models\penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allbuku = buku::all();
        return view('buku.index', compact('allbuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penerbit = penerbit::all();
        $kategori = Kategori::all();
        return view('buku.create' , compact('penerbit', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|digits:4',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',

        ]);
        $validatedData['judul_buku'] = $validatedData['judul'];
        unset($validatedData['judul']);
        buku::create($validatedData);

        return redirect()
            ->route('buku.index')
            ->with('success', 'buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
        $penerbit = penerbit::all();
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|digits:4',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',

        ]);

        $validatedData['judul_buku'] = $validatedData['judul'];
        unset($validatedData['judul']);
        $buku->update($validatedData);

        return redirect()
            ->route('buku.index')
            ->with('success', 'buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        //
        $buku->delete();
        //redirect ke halaman index buku
        return redirect()->route('buku.index');
    }
}
