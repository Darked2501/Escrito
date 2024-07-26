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
    public function ListarPersonas(){
        $personas = persona::all();

        $response = [
        'personas' => $personas
        ];

        return response()->json($response);
    }
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

        public function ListarPersonasVista(){
            $personas = persona::all();
    
    
            return view('VerPersonaCargada',)->with($personas);

        }
}


