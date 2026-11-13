<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the portfolio landing page with featured projects and grouped skills.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $featuredProjects = Project::query()
            ->orderBy('sort_order', 'asc')
            ->orderByDesc('created_at')
            ->get();

        $skillsGrouped = Skill::query()
            ->where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get()
            ->groupBy('category');

        return view('welcome', [
            'featuredProjects' => $featuredProjects,
            'skillsGrouped'    => $skillsGrouped,
        ]);
    }

    /**
     * Handle single action invocations if routed without a method name.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return $this->index();
    }
}
