@extends('layouts.master')

@section('content')

<div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">

                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 10%;">No.</th>
                            <th scope="col">Tratamiento</th>
                            <th scope="col" style="width: 30%;">Categoría</th>
                            <th scope="col" style="width: 20%;">Tipo</th>
                        </tr>
                    </thead>

                    <tbody>
                            <tr>
                                <td>{{$tratamientos->id}}</td>
                                <td>{{$tratamientos->nombre}}</td>
                                <td>
                                    @switch($tratamientos->categoria)
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
                                <td>{{$tratamientos->tipo}}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

@endsection

@section('buttons')
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="col-6 text-end">
                <a href="{{ route('tratamientos.edit', $tratamientos->id) }}" class="btn btn-warning btn-lg btn-block">Editar tratamiento</a>
            </div>
            <div class="col-6 text-start">
                <form action="{{ route('tratamientos.destroy', $tratamientos->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm ('¿Estás segura de que quieres borrar este tratamiento?')">Borrar tratamiento</button>
                </form>
            </div>
        </div>
    </div>
@endsection