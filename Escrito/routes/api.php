<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/Persona/{id}', [PersonaController::class, 'BuscarPersona']);
Route::get('/Personas', [PersonaController::class, 'ListarPersonas']);
Route::post('/personas/baja/{id}', [PersonaController::class, 'BajaPersona']);
Route::post('/personas', [PersonaController::class, 'AltaPersona']);
Route::post('/personas/{id}', [PersonaController::class, 'ModificarPersona']);
