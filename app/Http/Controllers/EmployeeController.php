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
        // Obtiene todos los empleados desde la base de datos
        $employees = Employee::all(); // SELECT * FROM employees;
        // Renderiza la vista 'employees.index' y pasa la variable $employees a la vista
        return view('employees.index', compact('employees'));
    }


    public function create()
    {
        // Obtiene todos los cargos (positions) desde la base de datos
        $positions = Position::all();  // SELECT * FROM positions;
        // Renderiza la vista 'employees.create' y pasa la variable $positions a la vista
        return view('employees.create', compact('positions'));
    }


    public function store(StoreEmployeeRequest $request)
    {
        // Crea un nuevo registro de empleado en la base de datos usando los datos del formulario
        Employee::create($request->all());
        // Redirecciona a la ruta 'employees.index' después de la creación exitosa
        return redirect()->route('employees.index');
    }



    public function show(Employee $employee)
    {
        // Renderiza la vista 'employees.show' y pasa la variable $employee a la vista
        return view('employees.show', compact('employee'));
    }



    public function edit(Employee $employee)
    {
        // Obtiene todos los cargos (positions) desde la base de datos
        $positions = Position::all(); // SELECT * FROM positions;
        // Renderiza la vista 'employees.edit' y pasa las variables $employee y $positions a la vista
        return view('employees.edit', compact('employee', 'positions'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        // Actualiza los datos del empleado en la base de datos usando los datos del formulario
        $employee->update($request->all());
        // Redirecciona a la ruta 'employees.index' después de la actualización exitosa
        return redirect()->route('employees.index')->with('updated', 'Empleado actualizado');
    }


    public function destroy(Employee $employee)
    {
        // Elimina el empleado de la base de datos
        $employee->delete();  // DELETE FROM employees WHERE id = ?;

        // Redirecciona a la ruta 'employees.index' después de la eliminación exitosa
        return redirect()->route('employees.index')->with('success', 'ok');
    }
}
