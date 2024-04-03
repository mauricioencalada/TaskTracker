@extends('layouts.plantilla')

@section('titulo', 'Lista de Tareas')

@section('content')
    <h1>formulario para crear una tarea</h1>


    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Nombre
            <input type="text" name="titulo" value="{{ old('titulo') }}">
        </label>

        @error('titulo')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label>Slug
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>

        @error('slug')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        
        <label>Descripcion
            <textarea name="descripcion" value="{{ old('descripcion') }}"></textarea>
        </label>
        @error('descripcion')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label>Fecha de Inicio
            <input name="start_date" type="date">
        </label>
        @error('start_date')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label>Fecha de Fin
            <input name="due_date" type="date">
        </label>
        @error('due_date')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <label>Estado:</label>
        <select name="completed">
            <option value=0>Pendiente</option>
            <option value=1>Completado</option>
        </select>
        @error('completed')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br>
        <button type="submit">Guardar </button>

    </form>
@endsection
