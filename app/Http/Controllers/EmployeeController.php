<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Salary;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Designation;
use App\Models\Schedule;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('admin.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departments = Department::all();
        $designations = Designation::all();
        $schedules = Schedule::all();
        return view('admin.employee.create', compact('departments', 'designations', 'schedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            // other fields
        ]);


        $employee = Employee::create($request->all());
        if($employee) {
            $salary = new Salary($request->all());
            $employee->salary()->save($salary);
        }
        return back()->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $designations = Designation::all();
        $schedules = Schedule::all();
        return view('admin.employee.show',compact('employee', 'departments', 'designations', 'schedules'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $designations = Designation::all();
        $schedules = Schedule::all();
        return view('admin.employee.edit',compact('employee', 'departments', 'designations', 'schedules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
        $employee->update($request->all());
        $salary = $employee->salary ?: new Salary();
        $salary->fill($request->all());
        $employee->salary()->save($salary);

        // return Redirect::route('admin.employee.edit')->with('success', 'Employee updated successfully');
        return back()->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return back()->with('success','Employee deleted successfully');
    }
}
