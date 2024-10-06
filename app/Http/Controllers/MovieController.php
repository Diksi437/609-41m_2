<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function show($id)
    {
        $movie = Movie::with('screenings.hall')->findOrFail($id);

        return view('movies.show', compact('movie'));
    }
}
