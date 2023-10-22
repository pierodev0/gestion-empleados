<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Requests\UpdatePositionRequest;
use App\Models\Position;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }

   
    public function create()
    {
        $positions = Position::all();
        return view('employees.create',compact('positions'));
    }

    
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->all());
       
        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }
    
    public function edit(Employee $employee)
    {
        $positions = Position::all();
        return view('employees.edit',compact('employee','positions'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('updated','Empleado actualizado');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','ok');
    }
}
