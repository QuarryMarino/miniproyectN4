<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Matricula;
use App\Models\Matricula as ModelsMatricula;

class MatriculaController extends Controller
{
    // Matricular un alumno en un curso existente
    public function matricular(Request $request)
    {
        $matricula = new ModelsMatricula();
        $matricula->alumno_id = $request->input('alumno_id');
        $matricula->curso_id = $request->input('curso_id');
        // Validar la disponibilidad de plazas en el curso si es necesario
        $matricula->save();
        return response()->json($matricula, 201);
    }
}