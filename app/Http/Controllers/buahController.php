<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;


class buahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buah = buah::all();
        return view('buah',[
            'buah' => $buah
        ]);
    }

    public function create()
    {
        return view('buahcreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idbuah' => 'required',
            'namabuah' => 'required',
            'beratbuah' => 'required',
        ]);

        buah::create($request->all());

        return redirect()->route('buah')
            ->with('success', 'buah berhasil ditambahkan.');
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $buah = buah::find($id);
    
        if (!$buah) {
            return redirect()->route('buah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        return view('editbuah', compact('buah'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'idbuah' => 'required',
            'namabuah' => 'required',
            'beratbuah' => 'required',
        ]);
    
        // Temukan data buah berdasarkan ID atau kunci unik lainnya
        $buah = buah::find($id);
    
        if (!$buah) {
            return redirect()->route('buah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        // Update data buah
        $buah->update($validatedData);
    
        return redirect()->route('buah')->with('success', 'Data buah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data buah berdasarkan ID atau kunci unik lainnya
        $buah = Buah::find($id);
    
        if (!$buah) {
            return redirect()->route('buah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        // Hapus data buah
        $buah->delete();
    
        return redirect()->route('buah')->with('success', 'Data buah berhasil dihapus.');
    }
    
}
