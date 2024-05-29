<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoController;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Alumno::all();
        return view('alumnos.index', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|max:255|unique:alumno',
            'fecha_nacimiento' => 'required|date',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno creado exitosamente.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|max:255|unique:alumno,email,' . $id,
            'fecha_nacimiento' => 'required|date',
        ]);

        $alumno = Alumno::find($id);
        if (!$alumno) {
            return redirect()->route('alumnos.index')
                ->with('error', 'No se encontró el alumno.');
        }

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return redirect()->route('alumnos.index')
                ->with('error', 'No se encontró el alumno.');
        }

        $alumno->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno eliminado exitosamente.');
    }

    // Métodos para las rutas
    /**
     * Show the form for creating a new alumno.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return redirect()->route('alumnos.index')
                ->with('error', 'No se encontró el alumno.');
        }

        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified alumno.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return redirect()->route('alumnos.index')
                ->with('error', 'No se encontró el alumno.');
        }

        return view('alumnos.edit', compact('alumno'));
    }
}