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

    public function update(Request $request, $id) {
        $joF = Jo::find($id);
        // dd($request->all());
        $joF->update([
            'status_jo' => $request->status_jo 
        ]);

        return redirect()->route('projectmonitoring.index', compact('jo'));
    }

    public function show() {

    }
}
