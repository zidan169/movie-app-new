<?php
namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.genre', compact('genres'));
    }

    public function create()
{
   
    return view('genres.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        
    ]);

    Genre::create($validatedData);

    return redirect('/genres')->with('success', 'Movie added successfully!');
}

public function destroy(Genre $genres)
{
    $genres->delete();
    return redirect('/genres')->with('success', 'Movie deleted successfully!');
}
}