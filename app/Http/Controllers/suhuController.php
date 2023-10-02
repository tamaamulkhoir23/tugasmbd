<?php

namespace App\Http\Controllers;

use App\Models\suhu;
use Illuminate\Http\Request;

class suhuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suhu = suhu::all();
        return view('suhu',[
            'suhu' => $suhu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suhucreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idsuhu' => 'required',
            'namasuhu' => 'required',
            'nilaisuhu' => 'required',
        ]);

        suhu::create($validatedData);

        return redirect()->route('suhu')->with('success', 'Data suhu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suhu = suhu::find($id);
    
        if (!$suhu) {
            return redirect()->route('suhu')->with('error', 'Data suhu tidak ditemukan.');
        }
    
        return view('editsuhu', compact('suhu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'idsuhu' => 'required',
            'namasuhu' => 'required',
            'nilaisuhu' => 'required',
        ]);
    
        // Temukan data suhu berdasarkan ID atau kunci unik lainnya
        $suhu = suhu::find($id);
    
        if (!$suhu) {
            return redirect()->route('suhu')->with('error', 'Data suhu tidak ditemukan.');
        }
    
        // Update data suhu
        $suhu->update($validatedData);
    
        return redirect()->route('suhu')->with('success', 'Data suhu berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data suhu berdasarkan ID atau kunci unik lainnya
        $suhu = Suhu::find($id);
    
        if (!$suhu) {
            return redirect()->route('suhu')->with('error', 'Data suhu tidak ditemukan.');
        }
    
        // Hapus data suhu
        $suhu->delete();
    
        return redirect()->route('suhu')->with('success', 'Data suhu berhasil dihapus.');
    }
    
}
