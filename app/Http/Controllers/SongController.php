<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return view('song.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('song.create', ['genres' => DB::table('genres')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'releasedate' => 'required',
            'duration' => 'required'
        ]);

        $song = Song::create([
            'name' => $request['name'],
            'author' => $request['author'],
            'releasedate' => $request['releasedate'],
            'duration' => $request['duration'],
        ]);

        $selectedGenre = intval($request['genreSelect']);
        if ($selectedGenre) {
            $attached = $song->genre()->associate($selectedGenre);
        }

        return redirect(route('song.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(song $song)
    {

        return view('song.view', ['song' => $song, 'genre' => $song->genre()->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(song $song)
    {
        Song::destroy($song->id);
        return redirect(route('song.index'));
    }
}
