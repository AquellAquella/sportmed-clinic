<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #b5b5b5; ">
    <a class="navbar-brand" href="#" style="padding-right: 20%; padding-left: 3%;">
        <img src="{{url('/images/sportmed-clinic-logo.png')}}" alt="logo" width="50px"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active" style="padding-right: 10%;">
            <a class="nav-link" style="color:#030ABC;" href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="{{ route('pacientes.index') }}" style="color:#030ABC;">Pacientes</a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="{{ route('servicios.index') }}" style="color:#030ABC;">Servicios</a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="{{ route('tratamientos.index') }}" style="color:#030ABC;">Tratamientos</a>
        </li>
        <li class="nav-item dropdown" style="padding-right: 10%;">
            <a class="nav-link dropdown-toggle" style="color:#030ABC;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catálogo digital
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('hombro_cervical') }}">Hombro - Cervical</a>
            <a class="dropdown-item" href="{{ route('cadera_lumbar') }}">Cadera - Lumbar</a>
            <a class="dropdown-item" href="{{ route('muslo') }}">Muslo</a>
            <a class="dropdown-item" href="{{ route('rodilla') }}">Rodilla</a>
            <a class="dropdown-item" href="{{ route('otros') }}">Otros</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>

    <div class="container" style="padding-top:80px">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 p-3">
                <h2 class="text-center" style="color:#030ABC;">{{ $page_title }}</h2>
            </div>
        </div>
    </div>