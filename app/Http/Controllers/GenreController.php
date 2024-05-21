<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Metode untuk menampilkan semua genre
    public function index()
    {
        $genreModel = new Genre();
        $genres = $genreModel->getAllGenre();

        return view('genre', ['genres' => $genres]);
    }

    // Metode untuk menampilkan genre berdasarkan ID
    public function genre($id)
    {
        $genreModel = new Genre();
        $genres = $genreModel->getAllGenre();

        // Mencari genre berdasarkan ID
        $genre = collect($genres)->firstWhere('id', $id);

        // Memeriksa apakah genre ada
        if (!$genre) {
            return response()->json(['error' => 'Genre tidak ditemukan'], 404);
        }

        // Mengembalikan detail genre
        return response()->json($genre);
    }
}
