<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        
        $projects = Project::with(['technologies', 'category'])->orderByDesc('id')->paginate(8);

        return response()->json([
            'success' => true,
            'projects' => $projects,
        ]);
    }

    public function show($title) {
        $project = Project::with(['technologies', 'category'])->where('title', $title)->first();
        if($project) {
            return response()->json([
                'success' => true,
                'project' => $project,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'project' => 'Project not found 404',
            ]);
        }
    }
}
