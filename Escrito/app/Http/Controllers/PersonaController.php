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
    public function BajaPersona($id){
        $personas = Persona::findOrFail($id);
        if ($personas) {
            $personas->delete();
        }
        return "Persona eliminada correctamente";
    }
    public function AltaPersona(Request $request){
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();
        return "Persona creada con exito";
    }
}
