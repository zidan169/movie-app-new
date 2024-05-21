<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Metode untuk menampilkan semua review
    public function index()
    {
        $reviewModel = new Review();
        $Reviews = $reviewModel->getAllReview();

        return view('review', ['reviews' => $Reviews]);
    }

    // Metode untuk menampilkan review berdasarkan ID
    public function review($user)
    {
        $reviewModel = new Review();
        $reviews = $reviewModel->getAllReview();

        // Mencari review berdasarkan ID
        $review = collect($s)->firstWhere('id', $id);

        // Memeriksa apakah review ada
        if (!$review) {
            return response()->json(['error' => 'review tidak ditemukan'], 404);
        }

        // Mengembalikan detail review
        return response()->json($review);
    }
}
