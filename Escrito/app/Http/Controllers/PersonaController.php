<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function BuscarPersona($id){
        $persona = Persona::findOrFail($id);
        return response()->json($persona);
    }
}
