<?php
namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.review', compact('reviews'));
    }

    public function create()
{
    $movies = Movie::all();
    return view('reviews.create', compact('movies'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'movie_id' => 'required',
        'user' => 'required',
        'rating' => 'required',
        'date' => 'required',
    ]);

    Review::create($validatedData);

    return redirect('/review')->with('success', 'Review added successfully!');
}

public function destroy(Review $reviews)
{
    $reviews->delete();
    return redirect('/review')->with('success', 'Movie deleted successfully!');
}
}