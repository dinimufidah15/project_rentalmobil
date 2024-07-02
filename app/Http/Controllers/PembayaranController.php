<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pembayaran = pembayaran::all();
        return view('admin.pembayaran', compact('list_pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'tanggal' => 'required|string',
            'jumlah_bayar' => 'required|string',
            'peminjaman_id' => 'required|string',
        ]);

        pembayaran::create($validated);
        return redirect('admin/pembayaran')->with('pesan', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembayaran =pembayaran::find($id);
        return view('admin.pembayaran', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembayaran = pembayaran::find($id);
        return view ('admin.pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|string',
            'jumlah_bayar' => 'required|string',
            'peminjaman_id' => 'required|string',
        ]);

        $pembayaran = pembayaran::find($id);
        $pembayaran->update($validated);
        return redirect('admin/pembayaran')->with('pesan', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = pembayaran::find($id);
        $pembayaran->delete();
        return redirect('admin/pembayaran')->with('pesan', 'data berhasil di hapus');
    }
}


