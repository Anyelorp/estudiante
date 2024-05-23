<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'index'])->name('alumnos.index');
// Devuelve el formulario para agregar un alumno
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
// Agrega un alumno a la base de datos
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
// Devuelve una página que muestra un alumno completo
Route::get('/alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
// Devuelve el formulario para editar un alumno
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
// Actualiza un alumno
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
// Elimina un alumno
Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
