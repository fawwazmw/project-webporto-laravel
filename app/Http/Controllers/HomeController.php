<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data proyek dari database
        $projects = Project::all();

        // Kirim data ke view 'index'
        return view('index', compact('projects'));
    }

    public function pageView(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }
    }
}
