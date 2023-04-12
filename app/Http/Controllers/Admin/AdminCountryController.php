<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\Http\RedirectResponse;

class AdminCountryController extends Controller
{
    /**
     * Display a listing of the country resource.
     * @return View
     */
    public function index(): View
    {
        $models = Country::get();
        return view('admin.countries.index', compact('models')); 
    }

    /**
     * Show the form for creating a new country resource.
     * @return View
     */
    public function create(): View
    {
        $model = Country::get();
        return view('admin.countries.create', compact('model')); 
    }

    /**
     * Store a newly created country resource in database.
     * @param StoreCountryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCountryRequest $request): RedirectResponse
    {
        Country::create($request->all());
        return to_route('admin.countries.index');
    }

    /**
     * Show the form for editing the specified country resource.
     * @param Country $country
     * @return View
     */
    public function edit(Country $country): View
    {
        $model = $country;
        return view('admin.countries.edit', compact('model')); 
    }

    /**
     * Update the specified country resource in database.
     * @param UpdateCountryRequest $request
     * @param Country $country
     * @return RedirectResponse
     */
    public function update(UpdateCountryRequest $request, Country $country): RedirectResponse
    {
        $country->fill($request->all())->save();
        return to_route('admin.countries.index');
    }

    /**
     * Remove the specified country resource from database.
     * @param Country $country
     * @return string
     */
    public function destroy(Country $country): string
    {
        $country->delete();
        return response()->json(['success' => true]);
    }
}
