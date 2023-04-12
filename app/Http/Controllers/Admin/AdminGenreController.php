<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminGenreController extends Controller
{
    /**
     * Display a listing of the genre resource.
     * @return View
     */
    public function index(): View
    {
        $models = Genre::get();
        return view('admin.genres.index', compact('models')); 
    }

    /**
     * Show the form for creating a new genre resource.
     * @return View
     */
    public function create(): View
    {
        $model = Genre::get();
        return view('admin.genres.create', compact('model')); 
    }

    /**
     * Store a newly created genre resource in database.
     * @param StoreGenreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreGenreRequest $request): RedirectResponse
    {
        Genre::create($request->all());
        return to_route('admin.genres.index');
    }

    /**
     * Show the form for editing the specified genre resource.
     * @param Genre $genre
     * @return View
     */
    public function edit(Genre $genre): View
    {
        $model = $genre;
        return view('admin.genres.edit', compact('model')); 
    }

    /**
     * Update the specified genre resource in database.
     * @param UpdateGenreRequest $request
     * @param Genre $genre
     * @return RedirectResponse
     */
    public function update(UpdateGenreRequest $request, Genre $genre): RedirectResponse
    {
        $genre->fill($request->all())->save();
        return to_route('admin.genres.index');
    }

    /**
     * Remove the specified genre resource from database.
     * @param Genre $genre
     * @return string
     */
    public function destroy(Genre $genre): string
    {
        $genre->delete();
        return response()->json(['success' => true]);
    }
}
