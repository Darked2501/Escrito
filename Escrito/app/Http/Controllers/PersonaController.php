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
}
