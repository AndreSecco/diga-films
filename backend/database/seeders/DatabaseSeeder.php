<?php

namespace Database\Seeders;


use App\Models\Film;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Created Films
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
        Film::create([
            'nameFilm'=> 'O hobbit 1',
            'fileFilm'=> '1666665250.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665250.jpg',
            'description'=> 'Este filme é sobre a história do hobbit',
            'tagsFilm'=> 'Ação,Aventura,Aventura'
        ]);
        Film::create([
            'nameFilm'=> 'Os Vingadores',
            'fileFilm'=> '1666665273.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665273.jpg',
            'description'=> 'Este filme é sobre a história dos vingadores',
            'tagsFilm'=> 'Romance,Ficção,Aventura'
        ]);
        Film::create([
            'nameFilm'=> 'Lord of king',
            'fileFilm'=> '1666665295.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665295.png',
            'description'=> 'Este filme é sobre a história do Lord of king',
            'tagsFilm'=> 'Romance,Ficção,Aventura'
        ]);
        Film::create([
            'nameFilm'=> 'Velozes e Furiosos 5',
            'fileFilm'=> '1666665325.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665325.jpg',
            'description'=> 'Este filme é sobre a história dos velozes e furiosos',
            'tagsFilm'=> 'Ficção,Aventura'
        ]);
        Film::create([
            'nameFilm'=> 'The amazing spider-man',
            'fileFilm'=> '1666665345.mp4',
            'sizeFilm'=> '243439.00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'imgFilm'=>'1666665345.jpg',
            'description'=> 'Este filme é sobre a história The amazing spider-man',
            'tagsFilm'=> 'Ficção,Aventura,Comédia'
        ]);

        // Created Tags
        Tag::create([
            'nameTag'=>'Ação'
        ]);
        Tag::create([
            'nameTag'=>'Aventura'
        ]);
        Tag::create([
            'nameTag'=>'Terror'
        ]);
        Tag::create([
            'nameTag'=>'Romance'
        ]);
        Tag::create([
            'nameTag'=>'Comédia'
        ]);
        Tag::create([
            'nameTag'=>'Ficção'
        ]);
    }
}
