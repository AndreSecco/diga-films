<?php

namespace App\Http\Controllers;

use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();

        dd($film);
    }
}
