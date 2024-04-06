@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('tratamientos.update', $tratamiento->id) }}" method="post">
                    @method('put')
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del tratamiento *</label>
                        <input type="text" name="nombre" class="form-control form-control-lg" value="{{ $tratamiento->nombre }}">
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría *</label><br>
                        <select name="categoria" class="form-control form-control-lg">
                            <option value=1 @if ($tratamiento->categoria == 1) selected  @endif>Hombro - Cervical</option>
                            <option value=2 @if ($tratamiento->categoria == 2) selected  @endif>Cadera - Lumbar</option>
                            <option value=3 @if ($tratamiento->categoria == 3) selected  @endif>Muslo</option>
                            <option value=4 @if ($tratamiento->categoria == 4) selected  @endif>Rodilla</option>
                            <option value=5 @if ($tratamiento->categoria == 5) selected  @endif>Tobillo</option>
                            <option value=6 @if ($tratamiento->categoria == 6) selected  @endif>Otros</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo *</label><br>
                        <select name="tipo" class="form-control form-control-lg">
                            <option value="Ejercicio" @if ($tratamiento->tipo == 'Ejercicio') selected  @endif>Ejercicio</option>
                            <option value="Tratamiento" @if ($tratamiento->tipo == 'Tratamiento') selected  @endif>Tratamiento</option>
                            <option value="Rehabilitación" @if ($tratamiento->tipo == 'Rehabilitación') selected  @endif>Rehabilitación</option>
                            <option value="Fortalecimiento" @if ($tratamiento->tipo == 'Fortalecimiento') selected  @endif>Fortalecimiento</option>
                            <option value="Infiltración" @if ($tratamiento->tipo == 'Infiltración') selected  @endif>Infiltración</option>
                            <option value="Vendaje" @if ($tratamiento->tipo == 'Vendaje') selected  @endif>Vendaje</option>
                            <option value="Masaje" @if ($tratamiento->tipo == 'Masaje') selected  @endif>Masaje</option>
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