<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function ListarPersonas(){
        $personas = persona::all();

        $response = [
        'personas' => $personas
        ];

        return response()->json($response);
    }
}
