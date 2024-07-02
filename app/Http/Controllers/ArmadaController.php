<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armada;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_armada = armada::all();
        return view('admin.armada', compact('list_armada'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_armada');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'merk' => 'required|string',
            'nopol' => 'required|string',
            'thn_beli' => 'required|string',
            'deskripsi' => 'required|string',
            'jenis_kendaraan_id' => 'required|string',
            'kapasitas_kursi' => 'required|string',
            'rating' => 'required|string',
        ]);

        armada::create($validated);
        return redirect('admin/armada')->with('pesan', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $armada = armada::find($id);
        return view('admin.armada', compact('armada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $armada = armada::find($id);
        return view ('admin.armada.edit', compact('armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'merk' => 'required|string',
            'nopol' => 'required|string',
            'thn_beli' => 'required|string',
            'deskripsi' => 'required|string',
            'jenis_kendaraan_id' => 'required|string',
            'kapasitas_kursi' => 'required|string',
            'rating' => 'required|string',
        ]);

        $armada = armada::find($id);
        $armada->update($validated);
        return redirect('admin/armada')->with('pesan', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $armada= armada::find($id);
        $armada->delete();
        return redirect('admin/armada')->with('pesan', 'data berhasil di hapus');
    }
}


