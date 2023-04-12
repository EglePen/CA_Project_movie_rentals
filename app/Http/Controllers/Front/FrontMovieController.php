<?php

namespace App\Http\Controllers\Front;

use App\Models\Movie;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontMovieController extends Controller
{
    /**
     * Display a listing of the movie resource.
     * @return View
     */
    public function index(): View
    {
        $models = Movie::get();
        return view('front.movies.index', compact('models'));
    }

    /**
     * Display the specified movie resource.
     * @param Movie $movie
     * @return View
     */
    public function show(Movie $movie): View
    {
        $model = $movie;
        return view('front.movies.show', compact('model'));
    }
}
