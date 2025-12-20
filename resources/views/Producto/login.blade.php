@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Logéate para comprar</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <br>
            </form>
            @if($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif
        </div>
    </div>
</div>
@endsection

  
