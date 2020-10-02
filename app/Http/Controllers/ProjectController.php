<?php

namespace App\Http\Controllers;


use App\Customer;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index() {
        $project = Project::with(['customer'])->get();
        return view('project.index', compact('project'));
    }

    public function show() {

    }

    public function store(Request $request) {
        $project = new Project([
            'project_code' => $request->project_code, 
            'desc' => $request->desc,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        $customer = Customer::find($request->customer);

        $project->customer()->associate($customer);
        $project->save();

        return redirect()->route('project.index');
    }

    public function create()
    {
        $customer = Customer::all();
        $project = Project::all();
        return view('project.create', compact('customer'));
    }

    public function edit(Project $project) {
        $customer = Customer::all();
        return view('project.edit', compact('project', 'customer'));
    }

    public function update(Request $request, Project $project) {
        $project->project_code = $request->project_code;
        $project->desc = $request->desc;
        $project->tanggal_mulai = $request->tanggal_mulai;
        $project->tanggal_selesai = $request->tanggal_selesai;
        $project->save();

        return redirect()->route('project.index')->with('status','Data Project updated!')->with('success', true);
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('project.index')->with('Data Project deleted!')->with('success', true);
    }
}
