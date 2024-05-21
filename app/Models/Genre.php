<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'poster' => 'movie-01.jpg',
            'title' => 'Jojo Bizarre Adventure',
            'genre' => 'horror',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],

        [
            'id' => 2,
            'poster' => 'movie-02.jpg',
            'title' => 'Noragami',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        
        [
            'id' => 3,
            'poster' => 'movie-03.jpg',
            'title' => 'Wind Breaker',
            'genre' => 'action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'poster' => 'movie-04.jpg',
            'title' => 'spy x family',
            'genre' => 'komedi',
            'synopsis' => 'starting from action, comedy, to slice of life so that it becomes a spectacle that can be enjoyed by various ages and groups.',
        ],
        [
            'id' => 5,
            'poster' => 'movie-03.jpg',
            'title' => 'Fireworks',
            'genre' => 'romance',
            'synopsis' => 'Fireworks mengisahkan Norimichi Shimada (Masaki Suda) dan Yuusuke Azumi (Mamoru Miyano) yang suka sama cewek teman sekelas mereka, Nazuna Oikawa (Suzu Hirose).',
        ],
    ];

    public function getAllGenre()
    {
        return $this-> genres;
}
}
