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
        $tanggalMulai = null;
        $tanggalSelesai = null;
        if(!empty($request->all())){
            if(!empty($request->customer_id) && !empty($request->project_id)){
                $tanggalMulai = $request->tanggal_mulai;
                $tanggalSelesai = $request->tanggal_selesai;
                $selectedCustomer = $request->customer_id;
                $selectedProject = $request->project_id;
                $jo = Jo::join('project', 'jo.project_id', 'project.id')->join('customer', 'project.customer_id', 'customer.id')->where('project_id', $request->project_id)->where('customer_id', $request->customer_id)->whereBetween('jo.created_at', [$request->tanggal_mulai, $request->tanggal_selesai])->get();

            }
        }
        $project = Project::all();
        $customer = Customer::all();
        return view('jobreport.index', compact('selectedCustomer','selectedProject','jo', 'project', 'customer', 'tanggalMulai', 'tanggalSelesai'));
    }

    public function show() {

    }
}
