<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use App\Models\servicios;
use App\Models\tratamiento;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Servicios";
        $servicios = servicios::where('activo', 1)->get();

        return view('servicios.index', compact('page_title','servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Crear nueva cita médica";
        $pacientes = pacientes::where('activo',1)->get();
        return view('servicios.create', compact('page_title', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        servicios::create([
            'fecha'=>$request->fecha,
            'horario'=>$request->horario,
            'paciente_nombre'=>$request->paciente_nombre,
            'direccion'=>$request->direccion,
            'ciudad'=>$request->ciudad,
            'estado'=>$request->estado,
            'mail'=>$request->mail,
            'activo'=>1,
        ]);

        return redirect()->route('servicios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicios = servicios::where('id', $id)
        ->select('id','fecha','horario','paciente_nombre','direccion','ciudad','estado','mail')
        ->firstOrFail();

        $page_title = "Editar cita del paciente";
        return view('servicios.show', compact('page_title','servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicios = servicios::where('id', $id)
        ->select('id','fecha','horario','paciente_nombre','direccion','ciudad','estado','mail')
        ->firstOrFail();

        $pacientes = pacientes::where('activo',1)->get();

        $page_title = "Editar cita del paciente";
        return view('servicios.edit', compact('page_title','servicios','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicio = servicios::where('id', $id)
        ->select('id','fecha','horario','paciente_nombre','direccion','ciudad','estado','mail')
        ->firstOrFail();

        $servicio->update([
            'fecha'=>$request->fecha,
            'horario'=>$request->horario,
            'paciente_nombre'=>$request->paciente_nombre,
            'direccion'=>$request->direccion,
            'ciudad'=>$request->ciudad,
            'estado'=>$request->estado,
            'mail'=>$request->mail,
        ]);

        return redirect()->route('servicios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = servicios::where('id', $id)
        ->select('id','fecha','horario','paciente_nombre','direccion','ciudad','estado','mail')
        ->firstOrFail();

        $servicio->update([
            'activo'=>0,
        ]);

        return redirect()->route('servicios.index');
    }
}
