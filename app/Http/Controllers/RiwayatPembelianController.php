<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\RiwayatPembelian;
use Illuminate\Http\Request;

class RiwayatPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    return view('riwayatpembelian.index', [
'title' => 'Riwayat Pembelian',
'riwayatPembelians' => RiwayatPembelian::with('pembeli')->latest()->get(),
]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('riwayatpembelian.create', [
            'title' => 'Tambah Riwayat Pembelian',
            'pembelis' => Pembeli::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'pembeli_id' => 'required|exists:pembelis,id',
                'judul_game' => 'required',
                'jenis' => 'required',
                'tanggal' => 'required|date',
                'total_bayar' => 'required|numeric|min:0',
                'metode' => 'required',
                'status' => 'required',
            ],
            [
                'pembeli_id.required' => 'Pembeli wajib dipilih',
                'judul_game.required' => 'Judul game wajib di input',
                'jenis.required' => 'Jenis wajib dipilih',
                'tanggal.required' => 'Tanggal wajib di input',
                'total_bayar.required' => 'Total bayar wajib di input',
                'total_bayar.numeric' => 'Total bayar harus berupa angka',
                'metode.required' => 'Metode pembayaran wajib dipilih',
                'status.required' => 'Status wajib dipilih',
            ]
        );

        RiwayatPembelian::create($validated);

    return to_route('riwayatPembelian.index')->withSuccess('Data riwayat pembelian berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(RiwayatPembelian $riwayatPembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RiwayatPembelian $riwayatPembelian)
    {
        return view('riwayatpembelian.edit', [
            'title' => 'Edit Riwayat Pembelian',
            'riwayatPembelian' => $riwayatPembelian,
            'pembelis' => Pembeli::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RiwayatPembelian $riwayatPembelian)
    {
        $validated = $request->validate(
            [
                'pembeli_id' => 'required|exists:pembelis,id',
                'judul_game' => 'required',
                'jenis' => 'required',
                'tanggal' => 'required|date',
                'total_bayar' => 'required|numeric|min:0',
                'metode' => 'required',
                'status' => 'required',
            ],
            [
                'pembeli_id.required' => 'Pembeli wajib dipilih',
                'judul_game.required' => 'Judul game wajib di input',
                'jenis.required' => 'Jenis wajib dipilih',
                'tanggal.required' => 'Tanggal wajib di input',
                'total_bayar.required' => 'Total bayar wajib di input',
                'total_bayar.numeric' => 'Total bayar harus berupa angka',
                'metode.required' => 'Metode pembayaran wajib dipilih',
                'status.required' => 'Status wajib dipilih',
            ]
        );

        $riwayatPembelian->update($validated);

        return to_route('riwayatPembelian.index')->withSuccess('Data riwayat pembelian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RiwayatPembelian $riwayatPembelian)
    {
       $riwayatPembelian->delete();

        return to_route('riwayatPembelian.index')->withSuccess('Data riwayat pembelian berhasil dihapus');
    }
}
