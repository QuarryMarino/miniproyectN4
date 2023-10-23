<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Docente;
use App\Models\Curso;

class CursoController extends Controller
{
    // Obtener todos los docentes
    public function index()
    {
        $docentes = Curso::all();
        return response()->json($docentes);
    }

    // Crear un nuevo docente
    public function store(Request $request)
    {
        $docente = new Curso();
        $docente->nombre = $request->input('nombre');
        // Asignar otros campos
        $docente->save();
        return response()->json($docente, 201);
    }

    // Obtener un docente por ID
    public function show($id)
    {
        $docente = Curso::find($id);
        return response()->json($docente);
    }

    // Actualizar un docente por ID
    public function update(Request $request, $id)
    {
        $docente = Curso::find($id);
        $docente->nombre = $request->input('nombre');
        // Actualizar otros campos
        $docente->save();
        return response()->json($docente);
    }

    // Eliminar un docente por ID
    public function destroy($id)
    {
        $docente = Curso::find($id);
        $docente->delete();
        return response()->json(null, 204);
    }
}