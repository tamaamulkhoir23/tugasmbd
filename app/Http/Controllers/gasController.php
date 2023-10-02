<?php

namespace App\Http\Controllers;
use App\Models\gas;
use Illuminate\Http\Request;

class gasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gas = gas::all();
        return view('gas',[
            'gas' => $gas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gascreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idgas' => 'required',
            'namagas' => 'required',
            'jenisgas' => 'required',
            'nilaigas' => 'required',
        ]);

        Gas::create($validatedData);

        return redirect()->route('gas')->with('success', 'Data gas berhasil ditambahkan.');
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
        // Temukan data gas berdasarkan ID atau kunci unik lainnya
        $gas = Gas::find($id);
    
        if (!$gas) {
            return redirect()->route('gas')->with('error', 'Data gas tidak ditemukan.');
        }
    
        return view('editgas', compact('gas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir edit
        $validatedData = $request->validate([
            'idgas' => 'required',
            'namagas' => 'required',
            'jenisgas' => 'required',
            'nilaigas' => 'required',
        ]);
    
        // Temukan data gas berdasarkan ID atau kunci unik lainnya
        $gas = Gas::find($id);
    
        if (!$gas) {
            return redirect()->route('gas')->with('error', 'Data gas tidak ditemukan.');
        }
    
        // Update data gas
        $gas->update($validatedData);
    
        return redirect()->route('gas')->with('success', 'Data gas berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data gas berdasarkan ID atau kunci unik lainnya
        $gas = Gas::find($id);
    
        if (!$gas) {
            return redirect()->route('gas')->with('error', 'Data gas tidak ditemukan.');
        }
    
        // Hapus data gas
        $gas->delete();
    
        return redirect()->route('gas')->with('success', 'Data gas berhasil dihapus.');
    }
    
}
