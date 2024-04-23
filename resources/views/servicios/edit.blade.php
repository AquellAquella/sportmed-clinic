@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('servicios.update', $servicios->id) }}" method="post">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-7">
                                <label for="fecha"class="form-label">Fecha de la cita *</label><br>
                                <input name="fecha"  class="form-control form-control-lg" type="date" id="fechaActual" value="{{ $servicios->fecha }}"/>
                            </div>

                            <div class="col-5">
                                <label for="horario"class="form-label">Hora de la cita *</label><br>
                                <input type="time" class="form-control form-control-lg" name="horario" min="08:00" max="20:00" id="horaInput" value="{{ $servicios->horario }}"/>
                                <small>Disponibilidad de 8am a 8pm</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="paciente_nombre"class="form-label">Nombre del paciente *</label><br>
                        <select class="form-control form-control-lg" name="paciente_nombre">
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->nombre }}" @if($paciente->nombre == $servicios->paciente_nombre) selected @endif>{{ $paciente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección del paciente *</label><br>
                        <textarea name="direccion"  class="form-control form-control-lg" cols="50" rows="2">{{ $servicios->direccion }}</textarea>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="ciudad" class="form-label">Ciudad *</label>
                                <input type="text" name="ciudad" class="form-control form-control-lg" value="{{ $servicios->ciudad }}">
                            </div>

                            <div class="col-6">
                                <label for="estado" class="form-label">Estado *</label>
                                <input type="text" name="estado" class="form-control form-control-lg" value="{{ $servicios->estado }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Correo del paciente *</label><br>
                        <input type="email" name="mail" class="form-control form-control-lg" value="{{ $servicios->mail }}">
                    </div>

                    <br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar cita médica</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

@endsection