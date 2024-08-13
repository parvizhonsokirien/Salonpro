<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services' ));
    }

    public function create()
    {
        $service_categories = ServiceCategory::all();
        return view('service.create', compact('service_categories'));
    }

    public function store(Request $request)
    {
       // dd($request);
        $service = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|decimal:0,2',
            'employee_price' => 'required|decimal:0,2',
            'service_categories_id' => 'required|exists:service_categories,id'
        ]);

        Service::create($service);
      //  return redirect()->route('service.index')->with('success', 'service created successfully');
    }

    public function show($id)
    {
        $services = Service::findOrFail($id);
        return view('service.show', compact('services'));
    }

    public function edit($id)
    {
        $categories = ServiceCategory::all();
        $services = Service::findOrFail($id);
        return view('service.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $service = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|string',
            'employee_price' => 'required|string',
            'service_categories_id' => 'required|exists:service_categories,id',
        ]);

        $services = Service::findOrFail($id);
        $services->update($service);
        return redirect('/service')->with('success', 'service updated successfully');
    }

    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect('/service')->with('success', 'service deleted successfully');
    }

}
