<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees' ));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $employee = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'photo' => 'required|string',
            'skills' => 'required|string',
            'services' => 'required|string',
            'schedule' => 'required|string',
        ]);

        Employee::create($employee);
        return redirect()->route('employee.index')->with('success', 'Employee created successfully');
    }

    public function show($id)
    {
        $employees = Employee::findOrFail($id);
        return view('employee.show', compact('employees'));
    }

    public function edit($id)
    {
        $employees = Employee::findOrFail($id);
        return view('employee.edit', compact('employees'));
    }

    public function update(Request $request, $id)
    {
        $employee = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'photo' => 'required|string',
            'skills' => 'required|string',
            'services' => 'required|string',
            'schedule' => 'required|string',
        ]);

        $employees = Employee::findOrFail($id);
        $employees->update($employee);
        return redirect('/employee')->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();
        return redirect('/employee')->with('success', 'Employee deleted successfully');
    }
}
