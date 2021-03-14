<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::All();
        //valor que le asignamos a la variable $alumnos
        return view("alumno.listado",['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("alumno.nuevo");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        // input devuelve en un array todos los elementos del formulario
        $alumno = new Alumno( $request->input());
        $alumno->saveOrFail();
        $alumnos = Alumno::All();
        return view("alumno.listado",['alumnos'=>$alumnos,"msj"=>"El alumno $alumno->nombre ha sido insertado"]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(alumno $alumno)
    {
        return view("alumno.edit",['alumno'=>$alumno]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, alumno $alumno)
    {
        $alumno->fill($request->input())->saveOrFail();
        $alumnos = Alumno::All();
        return view("alumno.listado",['alumnos'=>$alumnos,"msj"=>"El alumno $alumno->nombre ha sido modificado"]);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::All();
        return view("alumno.listado",['alumnos'=>$alumnos,"msj"=>"El alumno $alumno->nombre ha sido borrado"]);
        //
    }
}
