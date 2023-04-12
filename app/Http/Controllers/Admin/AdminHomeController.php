<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the movie resource.
     * @return View
     */
    public function index(): View
    {
        return View('admin.home');
    }
}
