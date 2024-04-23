@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">
                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col" style="width: 30%">Dirección</th>
                            <th scope="col" style="width: 20%">Fecha</th>
                            <th scope="col" style="width: 20%">Horario</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($servicios as $servicio)
                            <tr>
                                <td>
                                    <a href="{{  route('servicios.show', $servicio->id) }}">{{ $servicio->paciente_nombre }}</a>
                                </td>
                                <td>{{ $servicio->direccion }}</td>
                                <td>{{ $servicio->fecha }}</td>
                                <td>{{ $servicio->horario }}</td>
                            </tr>
                        @empty
                            <td>No hay citas médicas existentes</td><td></td>----<td>----</td><td>----</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('button')

@section('button')

<div class="container">
    <div class="row text-end">
        <div class="col-12">
            <br><a href=" {{ route('servicios.create') }} " class="btn btn-primary btn-lg">Nueva cita</a>
        </div>
    </div>
</div>

@endsection