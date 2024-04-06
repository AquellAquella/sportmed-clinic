@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">
                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col" style="width: 20%">Edad</th>
                            <th scope="col" style="width: 30%">Sexo</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pacientes as $paciente)
                            <tr>
                                <td>
                                    <a href="{{  route('pacientes.show', $paciente->id) }}">{{ $paciente->nombre }}</a>
                                </td>
                                <td>{{ $paciente->edad }}</td>
                                <td>{{ $paciente->sexo }}</td>
                            </tr>
                        @empty
                            <td>No hay registros de expedientes médicos existentes</td><td></td>----<td>----</td>
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
            <br><a href=" {{ route('pacientes.create') }} " class="btn btn-primary btn-lg">Nuevo paciente</a>
        </div>
    </div>
</div>

@endsection