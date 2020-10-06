<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Project;
use App\Jo;
use Illuminate\Http\Request;

class JobReportController extends Controller
{
    public function index(Request $request) {
        $jo = Jo::all();
        $selectedCustomer = null;
        $selectedProject = null;
        if(!empty($request->all())){
            // if(!empty($request->project_id)){
            //     $jo = Jo::where('project_id', $request->project_id)->get();
            // }
            if(!empty($request->customer_id) && !empty($request->project_id)){
                $selectedCustomer = $request->customer_id;
                $selectedProject = $request->project_id;
                $jo = Jo::join('project', 'jo.project_id', 'project.id')->join('customer', 'project.customer_id', 'customer.id')->where('project_id', $request->project_id)->where('customer_id', $request->customer_id)->get();
                // dd($jo);
            }

            // dd($request->all());
        }
        $project = Project::all();
        // $project = Project::find($request->project_id);
        $customer = Customer::all();
        return view('jobreport.index', compact('selectedCustomer','selectedProject','jo', 'project', 'customer'));
    }

    public function show() {

    }
}
