<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $data = $user->playlists;
            return view('playlist.index', ['data' => $data]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $validate = $request->validate([
            'name' => 'required'
        ]);
        
        $playlist = $user->playlists()->create([
            'name' => $request['name']
        ]);
        return redirect(route('playlist.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        return view('playlist.edit', ['songs' => DB::table('songs')->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        PLaylist::destroy($playlist->id);
        return redirect(route('playlist.index'));
    }
}
