<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients' ));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $clin = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'description' => 'required|string',
        ]);

        Client::create($clin);
        return redirect()->route('client.index')->with('success', 'Client created successfully');
    }

    public function show($id)
    {
        $clients = Client::findOrFail($id);
        return view('client.show', compact('clients'));
    }

    public function edit($id)
    {
        $clients = Client::findOrFail($id);
        return view('client.edit', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $clin = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'description' => 'required|string',
        ]);

        $clients = Client::findOrFail($id);
        $clients->update($clin);
        return redirect('/client')->with('success', 'Client updated successfully');
    }

    public function destroy($id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();
        return redirect('/client')->with('success', 'Client deleted successfully');
    }
}
