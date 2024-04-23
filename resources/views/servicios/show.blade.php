@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('servicios.update', $servicios->id) }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-7">
                                <label for="fecha"class="form-label">Fecha de la cita *</label><br>
                                <input name="fecha"  class="form-control form-control-lg" type="date" id="fechaActual" value="{{ $servicios->fecha }}" disabled/>
                            </div>

                            <div class="col-5">
                                <label for="horario"class="form-label">Hora de la cita *</label><br>
                                <input type="time" class="form-control form-control-lg" name="horario" min="08:00" max="20:00" id="horaInput" value="{{ $servicios->horario }}" disabled/>
                                <small>Disponibilidad de 8am a 8pm</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="paciente_nombre"class="form-label">Nombre del paciente *</label><br>
                        <select class="form-control form-control-lg" name="paciente_nombre" disabled>
                            <option value="{{ $servicios->paciente_nombre }}" selected>{{ $servicios->paciente_nombre }}</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección del paciente *</label><br>
                        <textarea name="direccion"  class="form-control form-control-lg" cols="50" rows="2" disabled>{{ $servicios->direccion }}</textarea>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="ciudad" class="form-label">Ciudad *</label>
                                <input type="text" name="ciudad" class="form-control form-control-lg" value="{{ $servicios->ciudad }}" disabled>
                            </div>

                            <div class="col-6">
                                <label for="estado" class="form-label">Estado *</label>
                                <input type="text" name="estado" class="form-control form-control-lg" value="{{ $servicios->estado }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Correo del paciente *</label><br>
                        <input type="email" name="mail" class="form-control form-control-lg" value="{{ $servicios->mail }}" disabled>
                    </div>

                    <br>
                    
                </form>

            </div>
        </div>
    </div>

@endsection

@section('buttons')
    <div class="container">
        <div class="row text-center">
            <div class="col-6 text-end">
                <a href="{{ route('servicios.edit', $servicios->id) }}" class="btn btn-warning btn-lg btn-block">Editar cita</a>
            </div>
            <div class="col-6 text-start">
                <form action="{{ route('servicios.destroy', $servicios->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm ('¿Estás seguro de que quieres eliminar la cita del paciente?')">Eliminar cita</button>
                </form>
            </div>
        </div>
    </div>
@endsection