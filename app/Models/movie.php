<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
    [
        'id' => 1,
        'title'=> 'Jojo Bizzare Adventure',
        'poster'=> 'movie-01.jpg',
        'genre'=> 'shounen',
        'synopsis'=> 'Jojo Bizzare Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
    ],
    [
        'id' => 1,
        'title'=> 'Noragami',
        'poster'=> 'movie-02.jpg',
        'genre'=> 'Drama',
        'synopsis'=> 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
    ],
    [
        'id' => 1,
        'title'=> 'Wind Breaker',
        'poster'=> 'movie-03.jpg',
        'genre'=> 'Action',
        'synopsis'=> 'Haruka Sakura wants nothing to do with weaklings—he is only interested in the strongest of the strong.'
    ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}