<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    /**
     * Display a listing of the movie resource.
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        return to_route('front.movies.index');
    }
}
