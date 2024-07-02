<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_peminjaman = peminjaman::all();
        return view('admin.peminjaman', compact('list_peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_peminjaman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
        'nama_peminjam' => 'required|string',
        'ktp_peminjam' => 'required|integer',
        'keperluan_pinjam' => 'required|string',
        'mulai' => 'required|date',
        'selesai' => 'required|date',
        'biaya' => 'required|numeric',  // Ubah ke numeric untuk menerima nilai desimal
        'armada_id' => 'required|integer',
        'komentar_peminjam' => 'required|string',
        'status_pinjam' => 'required|string',

        ]);

        peminjaman::create($validated);
        return redirect('admin/peminjaman')->with('pesan', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = peminjaman::find($id);
        return view('admin.peminjaman', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = peminjaman::find($id);
        return view ('admin.peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required|string',
            'ktp_peminjam' => 'required|string',
            'keperluan_pinjam' => 'required|string',
            'mulai' => 'required|string',
            'selesai' => 'required|string',
            'biaya' => 'required|string',
            'armada_id' => 'required|string',
            'komentar_peminjam' => 'required|string',
            'status_pinjam' => 'required|string',
        ]);

        $peminjaman = peminjaman::find($id);
        $peminjaman->update($validated);
        return redirect('admin/peminjaman')->with('pesan', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman= peminjaman::find($id);
        $peminjaman->delete();
        return redirect('admin/peminjaman')->with('pesan', 'data berhasil di hapus');
    }
}



