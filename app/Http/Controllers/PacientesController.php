<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use App\Models\servicios;
use App\Models\tratamiento;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Pacientes";
        $pacientes = pacientes::where('activo', 1)->get();

        return view('pacientes.index', compact('page_title', 'pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Crear nuevo paciente";
        
        return view('pacientes.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pacientes::create([
            'nombre'=> $request->nombre,
            'edad'=> $request->edad,
            'sexo'=> $request->sexo,
            'enfPersPat'=> $request->enfPersPat,
            'medicamentos'=> $request->medicamentos,
            'enfPersNoPat'=> $request->enfPersNoPat,
            'estatusPadre'=> $request->estatusPadre,
            'enfPadre'=> $request->enfPadre,
            'estatusMadre'=> $request->estatusMadre,
            'enfMadre'=> $request->enfMadre,
            'activo'=> 1,
        ]);

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pacientes = pacientes::where('id', $id)
        ->select('id','nombre','edad','sexo','enfPersPat','medicamentos','enfPersNoPat','estatusPadre','enfPadre','estatusMadre','enfMadre')
        ->firstOrFail();

        $page_title = 'Editar historial clínico del paciente';
        return view('pacientes.show', compact('page_title','pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente = pacientes::where('id', $id)
        ->select('id','nombre','edad','sexo','enfPersPat','medicamentos','enfPersNoPat','estatusPadre','enfPadre','estatusMadre','enfMadre')
        ->firstOrFail();

        $page_title = 'Editar historial clínico del paciente';
        return view('pacientes.edit', compact('page_title','paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = pacientes::where('id', $id)
        ->select('id','nombre','edad','sexo','enfPersPat','medicamentos','enfPersNoPat','estatusPadre','enfPadre','estatusMadre','enfMadre')
        ->firstOrFail();
        
        $paciente->update([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'sexo' => $request->sexo,
            'enfPersPat' => $request->enfPersPat,
            'medicamentos' => $request->medicamentos,
            'enfPersNoPat' => $request->enfPersNoPat,
            'estatusPadre' => $request->estatusPadre,
            'enfPadre' => $request->enfPadre,
            'estatusMadre' => $request->estatusMadre,
            'enfMadre' => $request->enfMadre
        ]);

        return redirect()->route('pacientes.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paciente = pacientes::where('id', $id)
        ->select('id','nombre','edad','sexo','enfPersPat','medicamentos','enfPersNoPat','estatusPadre','enfPadre','estatusMadre','enfMadre')
        ->firstOrFail();

        $paciente->update([
            'activo' => 0,
        ]);

        return redirect()->route('pacientes.index');
    }
}
