<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $sercats = ServiceCategory::all();
        return view('sercat.index', compact('sercats' ));
    }

    public function create()
    {
        return view('sercat.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $sercat = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        ServiceCategory::create($sercat);
        return redirect()->route('sercat.index')->with('success', 'Sercats created successfully');
    }

    public function show($id)
    {
        $sercats = ServiceCategory::findOrFail($id);
        return view('sercat.show', compact('sercats'));
    }

    public function edit($id)
    {
        $sercats = ServiceCategory::findOrFail($id);
        return view('sercat.edit', compact('sercats'));
    }

    public function update(Request $request, $id)
    {
        $sercat = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $sercats = ServiceCategory::findOrFail($id);
        $sercats->update($sercat);
        return redirect('/sercat')->with('success', 'Sercats updated successfully');
    }

    public function destroy($id)
    {
        $sercats = ServiceCategory::findOrFail($id);
        $sercats->delete();
        return redirect('/sercat')->with('success', 'Sercats deleted successfully');
    }

}
