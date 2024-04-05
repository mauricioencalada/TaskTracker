@extends('layouts.plantilla')

@section('titulo', 'Contactos')


@section('content')
    <div class="d-flex justify-content-center ">
        <h1><strong>Deja un comentario o mensaje
            </strong></h1>
    </div>

    <!--cuerpo del formulario-->
    <div class="container text">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">

                <form action="{{ route('contactanos.store') }}" method="POST">
                    @csrf
                    <label class="form-label justify-content-start ">Nombre </label>
                    <input type="text" name="name" class="form-control" placeholder="Titulo de la Tarea">
                    @error('name')
                        <br>
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>
                    <label class="form-label justify-content-start ">Correo </label>
                    <input type="text" name="correo" class="form-control" placeholder="ejemplo: ejemplo@gmail.com">
                    @error('correo')
                        <br>
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>
                    
                    <label class="form-label justify-content-start ">Mensaje</label>
                    <textarea name="mensaje" class="form-control" placeholder="Escribe tu mensaje"></textarea>
                    @error('mensaje')
                        <br>
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" class="btn btn-warning float-right justify-content-center">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>

                @if (session('info'))
                    <script>
                        alert('{{ session('info') }}')
                    </script>
                @endif

            </div>
        </div>
    </div>
@endsection
