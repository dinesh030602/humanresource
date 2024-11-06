<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller 
{ 
    public function index() {
        
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob'=> 'required',
            'address'=>'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required',
            'department' => 'required',
            'experience' => 'required',
            'position' => 'required',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee) {
        return view('employees.', compact('employee'));
    }

    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }
    

    public function update(Request $request, Employee $employee) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'address'=>'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'phone' => 'required',
            'department' => 'required',
            'experience' => 'required',
            'position' => 'required',
           
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}

