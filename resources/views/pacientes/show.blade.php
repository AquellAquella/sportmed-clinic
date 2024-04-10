@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('pacientes.update', $pacientes->id) }}" method="post">
                    @csrf

                    <h3 class="p-3">Información del paciente</h3>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del paciente *</label>
                        <input type="text" name="nombre" class="form-control form-control-lg" value="{{ $pacientes->nombre }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad *</label>
                        <input type="number" name="edad" class="form-control form-control-lg" value="{{ $pacientes->edad }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo *</label><br>
                        <select name="sexo" class="form-control form-control-lg" disabled>
                            <option value="Mujer" @if ($pacientes->sexo == 'Mujer') selected  @endif>Mujer</option>
                            <option value="Hombre" @if ($pacientes->sexo == 'Hombre') selected  @endif>Hombre</option>
                            <option value="Otro" @if ($pacientes->sexo == 'Otro') selected  @endif>Otro</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfPersPat" class="form-label">Enfermedades personales patológicas *</label><br>
                        <textarea name="enfPersPat"  class="form-control form-control-lg" cols="50" rows="5" readonly>{{ $pacientes->enfPersPat }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="medicamentos" class="form-label">Medicamentos consumidos *</label><br>
                        <textarea name="medicamentos"  class="form-control form-control-lg" cols="50" rows="5" readonly>{{ $pacientes->medicamentos }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="enfPersNoPat" class="form-label">Enfermedades personales no patológicas *</label><br>
                        <textarea name="enfPersNoPat"  class="form-control form-control-lg" cols="50" rows="5" readonly>{{ $pacientes->enfPersNoPat }}</textarea>
                    </div>

                    <h3 class="p-3">Antecedentes familiares</h3>

                    <div class="mb-3">
                        <label for="estatusPadre" class="form-label">Estado del padre *</label><br>
                        <select name="estatusPadre" class="form-control form-control-lg" disabled>
                            <option value="Vivo" @if ($pacientes->estatusPadre == 'Vivo') selected  @endif>Vivo</option>
                            <option value="Fallecido" @if ($pacientes->estatusPadre == 'Fallecido') selected  @endif>Fallecido</option>
                            <option value="Desconocido" @if ($pacientes->estatusPadre == 'Desconocido') selected  @endif>Desconocido</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfPadre" class="form-label">Enfermedades que padece el padre</label><br>
                        <textarea name="enfPadre"  class="form-control form-control-lg" cols="50" rows="3" readonly>{{ $pacientes->enfPadre }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="estatusMadre" class="form-label">Estado de la madre *</label><br>
                        <select name="estatusMadre" class="form-control form-control-lg" disabled>
                            <option value="Vivo" @if ($pacientes->estatusMadre == 'Vivo') selected  @endif>Viva</option>
                            <option value="Fallecida" @if ($pacientes->estatusMadre == 'Fallecida') selected  @endif>Fallecida</option>
                            <option value="Desconocida" @if ($pacientes->estatusMadre == 'Desconocida') selected  @endif>Desconocida</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfMadre" class="form-label">Enfermedades que padece la madre</label><br>
                        <textarea name="enfMadre"  class="form-control form-control-lg" cols="50" rows="3" readonly>{{ $pacientes->enfMadre }}</textarea>
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
                <a href="{{ route('pacientes.edit', $pacientes->id) }}" class="btn btn-warning btn-lg btn-block">Editar expediente clínico</a>
            </div>
            <div class="col-6 text-start">
                <form action="{{ route('pacientes.destroy', $pacientes->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm ('¿Estás seguro de que quieres eliminar el expediente médico del paciente?')">Eliminar expediente clínico</button>
                </form>
            </div>
        </div>
    </div>
@endsection