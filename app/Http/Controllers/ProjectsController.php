<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function getProjects() {
        $projects = Project::all();
        // return view('layouts/project')
        return view('backend')->with('projects', $projects);  // with: key->value, przekazywanie informacji
    }
}