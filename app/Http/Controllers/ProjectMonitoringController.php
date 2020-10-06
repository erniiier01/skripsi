<?php

namespace App\Http\Controllers;

use App\Location;
use App\Jo;
use App\Project;
use Illuminate\Http\Request;

class ProjectMonitoringController extends Controller
{
    public function index(Request $request) {
        $project = Project::find($request->project_id);
        $jo = Jo::all();
        return view('projectmonitoring.index', compact('jo', 'project'));
    }

    public function show() {

    }
}
