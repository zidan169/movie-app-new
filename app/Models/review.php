<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'Movie' => 'jojo bizzare adventure',
            'user' => 'daan',
            'rating' => '10.00',
            'date' => '4 april 2024',
        ],

        [
            'Movie' => 'Noragami',
            'user' => 'andro',
            'rating' => '9.50',
            'date' => '9 mei 2024',       
         ],
        
        [
            'id' => '3',
            'Movie' => 'Wind Breaker',
            'user' => 'yanz',
            'rating' => '9.00',
            'date' => '10 april 2024',        
        ],
        [
            'Movie' => 'spy f family',
            'user' => 'daps',
            'rating' => '8.50',
            'date' => '26 mei 2024',        
        ],
        [
            'Movie' => 'fireworks',
            'user' => 'wins',
            'rating' => '8.00',
            'date' => '18 agustus 2017',        
        ],

    
    ];

    public function getAllReview()
    {
        return $this-> reviews;
}
}
