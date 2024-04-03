@extends('layouts.plantilla')

@section('titulo', 'Lista de Tareas')

@section('content')
    <h1>Lista de tareas</h1>

    <a href="{{ route('tasks.create')}}">Crear tarea</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{route('tasks.show', $task)}}">
                    {{ $task->titulo }}</a>

            </li>
        @endforeach
    </ul>

    {{$tasks->links()}}
@endsection
