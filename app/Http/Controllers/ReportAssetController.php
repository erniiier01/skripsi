<?php

namespace App\Http\Controllers;

use App\Location;
use App\Jo;
use App\Project;
use App\Customer;
use App\Asset;
use Illuminate\Http\Request;

class ReportAssetController extends Controller
{
    public function index(Request $request) {
        $project = Project::find($request->project_id);
        $jo = Jo::all();
        $selectedCustomer = null;
        $selectedProject = null;
        $asset = Asset::all();
        // dd($asset);
        if(!empty($request->all())){
            // dd($request->all());
            if(!empty($request->customer_id)){
                $selectedCustomer = $request->customer_id;
                $selectedProject = $request->project_id;
                $jo = Jo::join('project', 'jo.project_id', 'project.id')->join('customer', 'project.customer_id', 'customer.id')->where('project_id', $request->project_id)->where('customer_id', $request->customer_id)->get();
                $asset = Asset::join('jo', 'asset.jo_id', 'jo.id')->join('location', 'jo.location_id', 'location.id')->join('project', 'jo.project_id', 'project.id')->join('customer', 'project.customer_id', 'customer.id')->where('customer.id', $request->customer_id)->get();
            }
        }
        $project = Project::all();
        $customer = Customer::all();
        return view('reportasset.index', compact('jo', 'project', 'customer', 'asset', 'selectedCustomer'));
    }

    public function show() {

    }
}
