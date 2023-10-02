<?php

namespace App\Http\Controllers;

use App\Models\pemantauan;
use App\Models\pengukuran;
use Illuminate\Http\Request;

class pengukuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengukuran = pengukuran::all();
        return view('pengukuran',[
            'pengukuran' => $pengukuran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengukurancreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idpengukuran' => 'required',
            'idgas' => 'required',
            'idsuhu' => 'required',
            'idbuah' => 'required',
            'nilaigas' => 'required',
            'nilaisuhu' => 'required',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan.
        ]);

        Pengukuran::create($validatedData);

        return redirect()->route('pengukuran')->with('success', 'Data pengukuran berhasil ditambahkan.');
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
    public function edit($id)
    {
        $pengukuran = pengukuran::find($id);
    
        if (!$pengukuran) {
            return redirect()->route('pengukuran')->with('error', 'Data pengukuran tidak ditemukan.');
        }
    
        return view('editpengukuran', compact('pengukuran'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'idpengukuran' => 'required',
            'idgas' => 'required',
            'idsuhu' => 'required',
            'idbuah' => 'required',
            'nilaigas' => 'required',
            'nilaisuhu' => 'required',
        ]);
    
        // Temukan data pengukuran berdasarkan ID atau kunci unik lainnya
        $pengukuran = pengukuran::find($id);
    
        if (!$pengukuran) {
            return redirect()->route('pengukuran')->with('error', 'Data pengukuran tidak ditemukan.');
        }
    
        // Update data pengukuran
        $pengukuran->update($validatedData);
    
        return redirect()->route('pengukuran')->with('success', 'Data pengukuran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data pengukuran berdasarkan ID atau kunci unik lainnya
        $pengukuran = Pengukuran::find($id);
    
        if (!$pengukuran) {
            return redirect()->route('pengukuran')->with('error', 'Data pengukuran tidak ditemukan.');
        }
    
        // Hapus data pengukuran
        $pengukuran->delete();
    
        return redirect()->route('pengukuran')->with('success', 'Data pengukuran berhasil dihapus.');
    }
    
}
