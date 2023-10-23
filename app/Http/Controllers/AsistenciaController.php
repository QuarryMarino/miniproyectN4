<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//class AsistenciaController extends Controller
use App\Asistencia;
use App\Models\Asistencia as ModelsAsistencia;

class AsistenciaController extends Controller
{
    // Registrar asistencia de un alumno
    public function registrarAsistencia(Request $request)
    {
        $asistencia = new ModelsAsistencia();
        $asistencia->alumno_id = $request->input('alumno_id');
        $asistencia->curso_id = $request->input('curso_id');
        $asistencia->fecha = $request->input('fecha');
        $asistencia->estado = $request->input('estado'); // A, T, F u otros estados posibles
        $asistencia->save();
        return response()->json($asistencia, 201);
    }
}