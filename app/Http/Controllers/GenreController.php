<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;

class GenreController extends Controller
{
    function getData() {
        $data = Genre::all();
        return view("genre", ['genre' => $data]);
    }
}
