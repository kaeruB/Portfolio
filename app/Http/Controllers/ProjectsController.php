<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class ProjectsController extends Controller
{
    public function getBackendProjects() {
        $projects = //Project::all()->where('type', 'backend');
        DB::table('projects')
            ->join('project_technologies', 'projects.name', '=', 'project_technologies.project')
            ->join('technologies', 'project_technologies.technology', '=', 'technologies.name')
            ->select('projects.name', 'projects.description', 'projects.source_url', DB::raw('GROUP_CONCAT(technologies.name) as technology'))
            ->where('type', 'backend')
            ->groupBy('projects.name', 'projects.description', 'projects.source_url')
            ->get();
        return view('backend')->with('projects', $projects);  // with: key->value, przekazywanie informacji
    }

    public function getFrontendProjects() {
        $projects =
            DB::table('projects')
                ->join('project_technologies', 'projects.name', '=', 'project_technologies.project')
                ->join('technologies', 'project_technologies.technology', '=', 'technologies.name')
                ->select('projects.name', 'projects.description', 'projects.source_url', 'projects.site_url', DB::raw('GROUP_CONCAT(technologies.name) as technology'))
                ->where('type', 'frontend')
                ->groupBy('projects.name', 'projects.description', 'projects.source_url', 'projects.site_url')
                ->get();
        return view('frontend')->with('projects', $projects);
    }
}

/*
SELECT p.name, p.description, p.source_url, GROUP_CONCAT(t.name) as technology
FROM `projects` AS p
JOIN `project_technologies` AS pt
	ON p.name = pt.project
JOIN `technologies` AS t
	ON t.name = pt.technology
group by p.name

*/