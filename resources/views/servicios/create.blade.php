@extends('layouts.master')

@section('content')
    <script>
        window.onload = function(){
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth()+1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var ano = fecha.getFullYear(); //obteniendo año
            if(dia<10)
                dia='0'+dia; //agrega cero si el menor de 10
            if(mes<10)
                mes='0'+mes //agrega cero si el menor de 10
            document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;

            // Obtener la hora actual
            var horaActual = new Date().toLocaleTimeString('en-US', { hour12: false });

            // Eliminar los segundos de la hora actual
            horaActual = horaActual.substring(0, 5);

            // Asignar la hora actual al input de tipo time
            document.getElementById('horaInput').value = horaActual;
            }
    </script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{  route('servicios.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-7">
                                <label for="fecha"class="form-label">Fecha de la cita *</label><br>
                                <input name="fecha"  class="form-control form-control-lg" type="date" id="fechaActual" value="" />
                            </div>

                            <div class="col-5">
                                <label for="horario"class="form-label">Hora de la cita *</label><br>
                                <input type="time" class="form-control form-control-lg" name="horario" min="08:00" max="20:00" id="horaInput" />
                                <small>Disponibilidad de 8am a 8pm</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="paciente_nombre"class="form-label">Nombre del paciente *</label><br>
                        <select class="form-control form-control-lg" name="paciente_nombre">
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->nombre }}">{{ $paciente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección del paciente *</label><br>
                        <textarea name="direccion"  class="form-control form-control-lg" cols="50" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="ciudad" class="form-label">Ciudad *</label>
                                <input type="text" name="ciudad" class="form-control form-control-lg">
                            </div>

                            <div class="col-6">
                                <label for="estado" class="form-label">Estado *</label>
                                <input type="text" name="estado" class="form-control form-control-lg">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Correo del paciente *</label><br>
                        <input type="email" name="mail" class="form-control form-control-lg">
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