<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pembeli.index', ['title' => 'Pembeli','pembelis' => Pembeli ::latest()->get(),
]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('pembeli.create', [
            'title' => 'Create Pembeli',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'pembeli' => 'required',
                'email' => 'required|email|unique:pembelis,email',
                'telepon' => 'required',
                'alamat' => 'required',
            ],
            [
                'pembeli.required' => 'Nama pembeli wajib di input',
                'email.required' => 'Email wajib di input',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'telepon.required' => 'Telepon wajib di input',
                'alamat.required' => 'Alamat wajib di input',
            ]
        );

        Pembeli::create($validated);
        return to_route('pembeli.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Pembeli $pembeli)
{
    return view('pembeli.edit', [
        'title' => 'Edit Pembeli',
        'pembeli' => $pembeli,
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembeli $pembeli)
    {
        {
        $validated = $request->validate(
            [
                'pembeli' => 'required',
                'email' => 'required|email|unique:pembelis,email',
                'telepon' => 'required',
                'alamat' => 'required',
            ],
            [
                'pembeli.required' => 'Nama pembeli wajib di input',
                'email.required' => 'Email wajib di input',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'telepon.required' => 'Telepon wajib di input',
                'alamat.required' => 'Alamat wajib di input',
            ]
        );

        $pembeli->update($validated);
        return to_route('pembeli.index')->withSuccess('Data berhasil diubah');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembeli $pembeli)
    {
        //
    }
}
