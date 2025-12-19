@extends('layouts.app')
@section('content')

<div class="container my-5 custom-boxed-container">
    <div class="text-center"> 
       <h1 class="display-5 fw-bold text-body-emphasis" style="color: #02354bff">{{ $productos->nombre }}</h1>
        <br>
       <h2 style="color: #0280b6ff">{{ $productos->autor }}</h2>
      <img class="d-block mx-auto mb-4" src="{{ asset('imagenes/Stock/'.$sku.'.jpg') }}" alt="" width="15%"> 
      <div class="col-lg-6 mx-auto"> 
        <h3 class="display-8 fw-bold text-body-emphasis" style="color: #0280b6ff">${{ $productos->valor }}</h3>
        <br>
        <p class="lead mb-4">{{ $productos->descripcion }}</p>
        <br>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
         @if($productos->estado == 'inactivo')
            <a href="{{ url('/productos/activar/'.$sku) }}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Activar</a>
         @else
            <a href="{{ url('/productos/inactivar/'.$sku) }}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Inactivar</a>
         @endif
            <a href="{{ url('/productos') }}" class="btn btn-outline-secondary btn-lg px-4" role="button">
              Regresar </a>
        </div> 
      </div> 
    </div>
</div>

@endsection

  
