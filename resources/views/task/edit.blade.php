@extends('layouts.plantilla')

@section('titulo', 'Editar Tarea')

@section('content')
    <h1>formulario para editar una tarea</h1>


    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('put')
        <label>Nombre
            <input type="text" name="titulo" value="{{ old('titulo', $task->titulo) }}">
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
            <input type="text" name="slug" value="{{ old('slug',$task->slug) }}">
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
            <textarea name="descripcion">{{ $task->descripcion }}</textarea>
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
            <input name="start_date" type="datetime" value="{{ $task->start_date}}">
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
            <input name="due_date" type="datetime" value="{{ $task->due_date}}">
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
        <select name="completed" value="{{ $task->completed }}">
            <option value=0>Pendiente</option>
            <option value=1>Completado</option>
        </select>
        <br>
        <button type="submit">Actualizar </button>

    </form>
@endsection
