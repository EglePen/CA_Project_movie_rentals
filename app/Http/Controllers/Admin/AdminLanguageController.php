<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;

class AdminLanguageController extends Controller
{
    /**
     * Display a listing of the language resource.
     * @return View
     */
    public function index(): View
    {
        $models = Language::get();
        return view('admin.languages.index', compact('models')); 
    }

    /**
     * Show the form for creating a new language resource.
     * @return View
     */
    public function create(): View
    {
        $model = Language::get();
        return view('admin.languages.create', compact('model')); 
    }

    /**
     * Store a newly created language resource in database.
     * @param StoreLanguageRequest $request
     * @return RedirectResponse
     */
    public function store(StoreLanguageRequest $request): RedirectResponse
    {
        Language::create($request->all());
        return to_route('admin.languages.index');
    }

    /**
     * Show the form for editing the specified language resource.
     * @param Language $language
     * @return View
     */
    public function edit(Language $language): View
    {
        $model = $language;
        return view('admin.languages.edit', compact('model')); 
    }

    /**
     * Update the specified language resource in database.
     * @param UpdateLanguageRequest $request
     * @param Language $language
     * @return RedirectResponse
     */
    public function update(UpdateLanguageRequest $request, Language $language): RedirectResponse
    {
        $language->fill($request->all())->save();
        return to_route('admin.languages.index');
    }

    /**
     * Remove the specified language resource from database.
     * @param Language $language
     * @return string
     */
    public function destroy(Language $language): string
    {
        $language->delete();
        return response()->json(['success' => true]);
    }
}
