<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use App\Models\servicios;
use App\Models\tratamientos;

use Illuminate\Http\Request;

class TratamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Tratamientos";
        $tratamientos = tratamientos::where('activo', 1)->get();
        
        return view('tratamientos.index', compact('page_title','tratamientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Crear nuevo tratamiento";
        
        return view('tratamientos.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        tratamientos::create([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'tipo' => $request->tipo,
            'activo' => 1,
        ]);

        return redirect() -> route('tratamientos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page_title = "Información del tratamiento";
        $tratamientos = tratamientos::where('id', $id)->firstOrFail();

        return view('tratamientos.show', compact('page_title','tratamientos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page_title = "Editar información del tratamiento";
        $tratamiento = tratamientos::where('id', $id)
        ->select('id','nombre','categoria','tipo')->firstOrFail();

        return view('tratamientos.edit', compact('page_title','tratamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tratamiento = tratamientos::where('id', $id)
        ->select('id','nombre','categoria','tipo')
        ->firstOrFail();

        $tratamiento->update([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'tipo' => $request->tipo,
        ]);

        return redirect()->route('tratamientos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tratamiento = tratamientos::where('id', $id)
        ->select('id','nombre','categoria','tipo')
        ->firstOrFail();

        $tratamiento->update([
            'activo'=> 0,
        ]);

        return redirect()->route('tratamientos.index', $id);
    }
}
