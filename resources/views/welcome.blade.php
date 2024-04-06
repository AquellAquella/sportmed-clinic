@extends('layouts.master')

@section('content')

        <div class="container col-lg-9 col-sm-12">
          <div class="row row row-cols-1 row-cols-md-3 g-4g-4">
              <div class="col-sm-6 d-md-block">
                <div class="card mb-3 border-0">
                  <div class="card-body">
                      <img src="{{ asset('/images/ch-principal.jpg') }}" class="card-img-top mb-2" alt="...">
                      <h5 class="card-title">Hombro - Cervical</h5>
                      <p class="card-text">Correspondiente a las zonas del hombro, clavícula, articulaciones, cuello, base de vertebras cervicales y zona de la mandíbula</p>
                      <a href="{{ route('hombro_cervical') }}" class="btn btn-primary btn-block btn-lg" target="_blank">Más información</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-3 border-0">
                  <div class="card-body">
                      <img src="{{ asset('/images/cl-principal.webp') }}" class="card-img-top mb-2" alt="...">
                      <h5 class="card-title">Cadera - Lumbar</h5>
                      <p class="card-text">Correspondiente a las zonas de la cadera, pelvis, vértebras lumbares, artículaciones de la cadera, suelo pélvico y artículaciones de la pierna</p>
                      <a href="{{ route('cadera_lumbar') }}" class="btn btn-primary btn-block btn-lg" target="_blank">Más información</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-3 border-0">
                  <div class="card-body">
                      <img src="{{ asset('/images/p-principal.jpg') }}" class="card-img-top mb-2" alt="...">
                      <h5 class="card-title">Muslo</h5>
                      <p class="card-text">Correspondiente a las zonas de la parte superior de la pierna, músculos anteriores y posteriores; y nervios, junto con sus articulaciones.</p>
                      <a href="{{ route('muslo') }}" class="btn btn-primary btn-block btn-lg" target="_blank">Más información</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-3 border-0">
                  <div class="card-body">
                      <img src="{{ asset('/images/r-principal.jpg') }}" class="card-img-top mb-2" alt="...">
                      <h5 class="card-title">Rodilla</h5>
                      <p class="card-text">Correspondiente a la zona debajo del múslo y directamente en la zona de la rótula junto con los músculos y articulaciones que ahí tienen inserción.</p>
                      <a href="{{ route('rodilla') }}" class="btn btn-primary btn-block btn-lg" target="_blank">Más información</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mb-3 border-0">
                  <div class="card-body">
                      <img src="{{ asset('/images/o-principal.jpg') }}" class="card-img-top mb-2" alt="...">
                      <h5 class="card-title">Otros</h5>
                      <p class="card-text">Aquellas categorías no definidas dentro de una zona se encuentran dentro de este espacio, permitiendo evitar sobresaturar los otros catélogos.</p>
                      <a href="{{ route('otros') }}" class="btn btn-primary btn-block btn-lg" target="_blank">Más información</a>
                  </div>
                </div>
              </div>
          </div>
      </div>

@endsection