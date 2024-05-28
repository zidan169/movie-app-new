<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Review::create([
            'movie_id' => 1,
            'user' => 'daan',
            'rating' => '10.00',
            'date' => '4 april 2024',
            
        ]);
    
        Review::create([
            'movie_id' => 2,
            'user' => 'andro',
            'rating' => '9.50',
            'date' => '9 mei 2024',   
        ]);
    
        Review::create([
            'movie_id' => 3,
            'user' => 'yanz',
            'rating' => '9.00',
            'date' => '10 april 2024',      
        ]);
        Review::create([
            'movie_id' => 4,
            'user' => 'daps',
            'rating' => '8.50',
            'date' => '26 mei 2024',    
        ]);
        Review::create([
            'movie_id' => 5,
            'user' => 'puts',
            'rating' => '8.00',
            'date' => '16 juni 2024',    
        ]);
       
    }
}
