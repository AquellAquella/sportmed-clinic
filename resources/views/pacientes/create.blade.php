@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('pacientes.store') }}" method="post">
                    @csrf

                    <h3 class="p-3">Información del paciente</h3>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del paciente *</label>
                        <input type="text" name="nombre" class="form-control form-control-lg">
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad *</label>
                        <input type="number" name="edad" class="form-control form-control-lg">
                    </div>

                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo *</label><br>
                        <select name="sexo" class="form-control form-control-lg">
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfPersPat" class="form-label">Enfermedades personales patológicas *</label><br>
                        <textarea name="enfPersPat"  class="form-control form-control-lg" cols="50" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="medicamentos" class="form-label">Medicamentos consumidos *</label><br>
                        <textarea name="medicamentos"  class="form-control form-control-lg" cols="50" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="enfPersNoPat" class="form-label">Enfermedades personales no patológicas *</label><br>
                        <textarea name="enfPersNoPat"  class="form-control form-control-lg" cols="50" rows="5"></textarea>
                    </div>

                    <h3 class="p-3">Antecedentes familiares</h3>

                    <div class="mb-3">
                        <label for="estatusPadre" class="form-label">Estado del padre *</label><br>
                        <select name="estatusPadre" class="form-control form-control-lg">
                            <option value="Vivo">Vivo</option>
                            <option value="Fallecido">Fallecido</option>
                            <option value="Desconocido">Desconocido</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfPadre" class="form-label">Enfermedades que padece el padre</label><br>
                        <textarea name="enfPadre"  class="form-control form-control-lg" cols="50" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="estatusMadre" class="form-label">Estado de la madre *</label><br>
                        <select name="estatusMadre" class="form-control form-control-lg">
                            <option value="Vivo">Viva</option>
                            <option value="Fallecida">Fallecida</option>
                            <option value="Desconocida">Desconocida</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="enfMadre" class="form-label">Enfermedades que padece la madre</label><br>
                        <textarea name="enfMadre"  class="form-control form-control-lg" cols="50" rows="3"></textarea>
                    </div>

                    <br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar paciente</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection