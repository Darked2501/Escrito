<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
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
