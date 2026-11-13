<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('welcome', compact('projects'));
    }
}
