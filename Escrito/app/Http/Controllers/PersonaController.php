<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function ModificarPersona(Request $request,$id){
    $personas = persona::findOrFail($id);

    $personas->nombre = $request->nombre;
    $personas->apellido = $request->apellido;
    $personas->telefono = $request->telefono;
    $personas->save();

    return "Persona modificada con exito";
    }
}
