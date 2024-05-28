<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Jojo Bizarre Adventure',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);
    
        Genre::create([
            'name' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);
    
        Genre::create([
            'name' => 'Wind Breaker',
            'description' => ' Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        Genre::create([
            'name' => 'spy x family',
            'description' => ' tells the story of a skilled spy agent codenamed Twillight who carries out Operation Strix, an important mission related to peace between countries including Westalis in the west and Ostania in the east.',
        ]);
        Genre::create([
            'name' => 'fireworks',
            'description' => ' tells the story of Norimichi Shimada (Masaki Suda) and Yuusuke Azumi (Mamoru Miyano) who like their classmate, Nazuna Oikawa (Suzu Hirose). Yuusuke clearly admits that he likes Nazuna, while Norimichi never says it openly.',
        ]);
        
    }
}
