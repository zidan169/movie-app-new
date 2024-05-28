<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Movie::create([
        'id' => 1,
        'title' => 'Jojo Bizarre Adventure',
        'genre_id' => 1,
        'poster' => 'movie-01.jpg',
        'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
    ]);

    Movie::create([
        'id' => 2,
        'title' => 'Noragami',
        'genre_id' => 2,
        'poster' => 'movie-02.jpg',
        'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
    ]);

    Movie::create([
        'id' => 3,
        'title' => 'Wind Breaker',
        'genre_id' => 3,
        'poster' => 'movie-01.jpg',
        'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
    ]);
    Movie::create([
        'id' => 4,
        'title' => 'spy x family',
        'genre_id' => 4,
        'poster' => 'movie-04.jpg',
        'synopsis' => 'tells the story of a skilled spy agent codenamed Twillight who carries out Operation Strix, an important mission related to peace between countries including Westalis in the west and Ostania in the east.',
    ]);
    Movie::create([
        'id' => 5,
        'title' => 'fireworks',
        'genre_id' => 5,
        'poster' => 'movie-05.webp',
        'synopsis' => 'tells the story of a skilled spy agent codenamed Twillight who carries out Operation Strix, an important mission related to peace between countries including Westalis in the west and Ostania in the east.',
    ]);
    
}
}
