@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('pacientes.store') }}" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del tratamiento *</label>
                        <input type="text" name="nombre" class="form-control form-control-lg">
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría *</label><br>
                        <select name="categoria" class="form-control form-control-lg">
                            <option value="HC">Hombro - Cervical</option>
                            <option value="CL">Cadera - Lumbar</option>
                            <option value="M">Muslo</option>
                            <option value="R">Rodilla</option>
                            <option value="M">Tobillo</option>
                            <option value="O">Otros</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo *</label><br>
                        <select name="tipo" class="form-control form-control-lg">
                            <option value="Ejercicio">Ejercicio</option>
                            <option value="Tratamiento">Tratamiento</option>
                            <option value="Rehabilitación">Rehabilitación</option>
                            <option value="Fortalecimiento">Fortalecimiento</option>
                            <option value="Infiltración">Infiltración</option>
                            <option value="Vendaje">Vendaje</option>
                            <option value="Masaje">Masaje</option>
                        </select>
                    </div>

                    <br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar tratamiento</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection