<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index() {
        $location = Location::with(['customer'])->get();
        return view('location.index', compact('location'));
    }

    public function show() {

    }

    public function store(Request $request) {
        $location = new Location([
            'location_name' => $request->location_name, 
            'phone' => $request->phone,
            'address' => $request->address,
            'grup_name' => $request->grup_name,
        ]);

        $customer = Customer::find($request->customer);

        $location->customer()->associate($customer);
        $location->save();

        return redirect()->route('location.index');
    }

    public function create()
    {
        $customer = Customer::all();
        $location = Location::all();
        return view('location.create', compact('customer'));
    }

    public function edit(Location $location) {

        $customer = Customer::all();
        return view('location.edit', compact('location', 'customer'));
    }

    public function update(Request $request, Location $location) {
        $location->location_name = $request->location_name;
        $location->phone = $request->phone;
        $location->address = $request->address;
        $location->grup_name = $request->grup_name;
        $location->save();

        return redirect()->route('location.index')->with('status','Data Location updated!')->with('success', true);
    }

    public function destroy(Location $location) {
        $location->delete();
        return redirect()->route('location.index')->with('Data Location deleted!')->with('success', true);
    }
}
