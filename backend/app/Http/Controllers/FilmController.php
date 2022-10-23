<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();

        return response()->json($films);
    }

    public function addFilm(Request $request)
    {
        $newFilm = new Film();
        $newFilm->nameFilm = $request->nameFilm;
        $newFilm->fileFilm = $request->fileFilm;
        $newFilm->sizeFilm = $request->sizeFilm;
        $newFilm->imgFilm = $request->imgFilm;
        $newFilm->description = $request->description;
        $newFilm->tagsFilm = $request->tagsFilm;

        $newFilm->save();

        return response()->json('Success');
    }

    public function editFilm(Film $id, Request $request)
    {
        return response()->json($id);
    }

    public function updateFilm(Film $id, Request $request)
    {
        $id->nameFilm = $request->nameFilm;
        $id->fileFilm = $request->fileFilm;
        $id->sizeFilm = $request->sizeFilm;
        $id->imgFilm = $request->imgFilm;
        $id->description = $request->description;
        $id->tagsFilm = $request->tagsFilm;

        $id->save();

        return response()->json('success');
    }

    public function deleteFilm(Film $id, Request $request)
    {
        $id->delete();

        return response()->json('success');
    }
}
