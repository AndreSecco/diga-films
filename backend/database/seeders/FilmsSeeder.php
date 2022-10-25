<?php

use App\Models\Film;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    public function run()
    {
        Film::create([
            'nameFilm'=> 'O Homem Aranha 3',
            'fileFilm'=> '1666665221.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665221.jpg',
            'description'=> 'Este filme é sobre a história do homem aranha 3',
            'tagsFilm'=> 'Ação,Aventura,Comédia'
        ]);
    }
}

