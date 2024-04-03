@extends('layouts.plantilla')

@section('titulo', 'Contactos')


@section('content')
    <h1>dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label >
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label >
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        @error('correo')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label >
            Mensaje:
            <br>
            <textarea name="mensaje" rows="5"></textarea>
        </label>
        @error('mensaje')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>

        <button type="submit">
            Enviar Mensaje
        </button>
    </form>

    @if (session('info'))
        <script>
            alert('{{session('info')}}')
        </script>
    @endif
@endsection