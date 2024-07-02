<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_kendaraan;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jenis_kendaraan = jenis_kendaraan::all();
        return view('admin.jenis_kendaraan', compact('list_jenis_kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_jenis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
        ]);

        jenis_kendaraan::create($validated);
        return redirect('admin/jenis_kendaraan')->with('pesan', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        return view('admin.jenis_kendaraan', compact('jenis_kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        return view ('admin.jenis_kendaraan.edit', compact('jenis_kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
        ]);

        $jenis_kendaraan = jenis_kendaraan::find($id);
        $jenis_kendaraan->update($validated);
        return redirect('admin/jenis_kendaraan')->with('pesan', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        $jenis_kendaraan->delete();
        return redirect('admin/jenis_kendaraan')->with('pesan', 'data berhasil di hapus');
    }
}

