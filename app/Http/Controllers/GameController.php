<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('game.index', ['title' => 'Game','games' => Game ::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.create',['title' => 'create Game']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
    'title' => 'required',
    'platform' => 'required',
    'genre' => 'required',
    'developer' => 'required',
    'release_year' => 'required',
    ],
    [
    'title.required'        => 'Judul game wajib di input',
    'platform.required'     => 'Platform wajib di input',
    'genre.required'        => 'Genre wajib di input',
    'developer.required'    => 'Developer wajib di input',
    'release_year.required' => 'Tahun rilis wajib di input',
]
    );
 
 Game::create($validated);
 
    return redirect('/game');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
