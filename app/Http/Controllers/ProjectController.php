<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Fetch all projects from the database
        $projects = Project::all();

        // Return the view and pass the projects data
        return view('projects.index', compact('projects'));
    }
}
