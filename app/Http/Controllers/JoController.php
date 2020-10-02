<?php

namespace App\Http\Controllers;


use App\Location;
use App\Jo;
use App\Project;
use Illuminate\Http\Request;

class JoController extends Controller
{
    public function index(Request $request) {
        $project = Project::find($request->project_id);
        $jo = Jo::with(['location'])->where('project_id', $request->project_id)->get();
        return view('jo.index', compact('jo', 'project'));
    }

    public function show() {

    }

    public function store(Request $request) {
        $jo = Jo::create($request->all());

        $location = Location::find($request->location_id);

        $project = Project::find($request->project_id);
        $jo->location()->associate($location);
        $jo->save();

        return redirect()->route('jo.index',['project_id'=>$project->id]);
    }

    public function create(Request $request)
    {
        $location = Location::all();
        $project = Project::find($request->project_id);
        return view('jo.create', compact('location', 'project'));
    }

    public function edit(Jo $jo) {
        $location = Location::all();
        return view('jo.edit', compact('jo', 'location'));
    }

    public function update(Request $request, Jo $jo) {
        $jo->jo_id = $request->jo_id;
        $jo->desc = $request->desc;
        $jo->status_jo = $request->status_jo;
        $jo->target_date = $request->target_date;
        $jo->save();
        return redirect()->route('jo.index',['project_id'=>$jo->project_id])->with('status','Data JO updated!')->with('success', true);
    }

    public function destroy(Jo $jo) {
        $jo->delete();
        return redirect()->route('jo.index')->with('Data JO deleted!')->with('success', true);
    }
}
