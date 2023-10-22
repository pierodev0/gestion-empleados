<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;

class PositionController extends Controller
{
    /**
     * Mostrar una lista de los recursos.
     */
    public function index()
    {
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento.
     */
    public function store(StorePositionRequest $request)
    {
        Position::create($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Mostrar el recurso especificado.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     */
    public function edit(Position $position)
    {
        return view('positions.edit', compact('position'));
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        $position->update($request->all());
        return redirect()->route('positions.index')->with('updated', 'Área actualizada');
    }

    /**
     * Eliminar el recurso especificado del almacenamiento.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'Ok');
    }
}
