<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Docente; // Asegúrate de usar el nombre de la entidad correcto con "D" mayúscula
use App\Models\Docente as ModelsDocente;

class DocenteController extends Controller
{
    // Obtener todos los docentes
    public function index()
    {
        $docentes = ModelsDocente::all();
        return response()->json($docentes);
    }

    // Crear un nuevo docente
    public function store(Request $request)
    {
        $docente = new ModelsDocente();
        $docente->nombre = $request->input('nombre');
        // Asignar otros campos
        $docente->save();
        return response()->json($docente, 201);
    }

    // Obtener un docente por ID
    public function show($id)
    {
        $docente = ModelsDocente::find($id);
        return response()->json($docente);
    }

    // Actualizar un docente por ID
    public function update(Request $request, $id)
    {
        $docente = ModelsDocente::find($id);
        $docente->nombre = $request->input('nombre');
        // Actualizar otros campos
        $docente->save();
        return response()->json($docente);
    }

    // Eliminar un docente por ID
    public function destroy($id)
    {
        $docente = ModelsDocente::find($id);
        $docente->delete();
        return response()->json(null, 204);
    }
}