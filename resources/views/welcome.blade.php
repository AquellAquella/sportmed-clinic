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
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="#" style="padding-right: 20%; padding-left: 3%;">
        <img src="{{url('/images/sportmed-clinic-logo.png')}}" alt="logo" width="50px"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active" style="padding-right: 10%;">
            <a class="nav-link" href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="#">Pacientes</a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item" style="padding-right: 10%;">
            <a class="nav-link" href="#">Tratamientos</a>
        </li>
        <li class="nav-item dropdown" style="padding-right: 10%;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    
    <!-- <h2 class="bg-primary text-center text-white">Ejemplo</h2> -->
</body>
</html>