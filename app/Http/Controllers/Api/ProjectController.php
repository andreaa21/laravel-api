<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['technologies', 'category'])->get();
        return response()->json(compact('projects'));
    }

    public function show($slug)
    {

        $project = Project::where('slug', $slug)->with('technologies', 'category')->first();

        return response()->json(compact('project'));
    }
}
