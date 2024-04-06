@extends('layouts.master')

@section('content')

<div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">

                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tratamiento</th>
                            <th scope="col" style="width: 30%;">Categoría</th>
                            <th scope="col" style="width: 20%;">Tipo</th>
                        </tr>
                    </thead>

                    <tbody>
                         @forelse($tratamientos as $tratamiento)
                            <tr>
                                <td>
                                    <a href="{{ route('tratamientos.show', $tratamiento->id) }}">{{$tratamiento->nombre}}</a>
                                </td>
                                <td>
                                    @switch($tratamiento->categoria)
                                        @case(1)
                                            Hombro - Cervical
                                            @break
                                        @case(2)
                                            Cadera - Lumbar
                                            @break
                                        @case(3)
                                            Muslo
                                            @break  
                                        @case(4)
                                            Rodilla
                                            @break
                                        @case(5)
                                            Tobillo
                                            @break
                                        @case(6)
                                            Otros
                                            @break                  
                                    @endswitch
                                </td>
                                <td>{{$tratamiento->tipo}}</td>
                            </tr>
                        @empty
                            <td>No hay tratamientos registrados</td><td>----</td><td>----</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

@endsection

@section('button')

<div class="container">
    <div class="row text-end">
        <div class="col-12">
            <br><a href=" {{ route('tratamientos.create') }} " class="btn btn-primary btn-lg">Nuevo tratamiento</a>
        </div>
    </div>
</div>

@endsection