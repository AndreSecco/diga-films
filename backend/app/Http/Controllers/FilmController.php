<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function indexAsc()
    {
        $films = Film::orderBy('nameFilm', 'ASC')->paginate(500);

        return response()->json($films);
    }
    public function indexDesc()
    {
        $films = Film::orderBy('nameFilm', 'DESC')->paginate(500);

        return response()->json($films);
    }
    public function index()
    {
        $films = Film::all();

        return response()->json($films);
    }

    public function addFilm(Request $request)
    {
        try {
            if ($request->hasFile('fileFilm')) {

                $newFilm = new Film();

                $newFilm->nameFilm = $request->nameFilm;

                $file = $request->file('fileFilm');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $newFilm->fileFilm = $filename;
                $request->fileFilm->move('storage/videoFilms', $filename);
                $newFilm->sizeFilm = $request->sizeFilm;

                $imgFilm = $request->file('imgFilm');
                $imgName = time() . '.' . $imgFilm->getClientOriginalExtension();
                $request->imgFilm->move('storage/imgFilms', $imgName);
                $newFilm->imgFilm = $imgName;
                $newFilm->description = $request->description;
                $newFilm->tagsFilm = $request->tagsFilm;

                $newFilm->save();

                return response()->json('Success');

            }
        } catch (\Exception $e) {

        }

    }
    

    public function editFilm(Film $id, Request $request)
    {
        return response()->json($id);

    }

    public function updateFilm(Film $id, Request $request)
    {
        $id->nameFilm = $request->nameFilm;
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

    public function filmCategory(Film $id, Request $request)
    {
        echo ($request->nameTag);
        $films = DB::table('films')->where('tagsFilm', "'" . $request->nameTag . "'")->get();

        return response()->json($films);

        dd($request->nameTag);
    }

    public function singleFilm(Film $id)
    {
        $film = Film::find($id);

        return response()->json($film);
    }
}
