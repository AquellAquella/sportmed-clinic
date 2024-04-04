@extends('layouts.master')

@section('content')



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