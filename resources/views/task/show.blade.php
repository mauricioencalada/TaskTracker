@extends('layouts.plantilla')

@section('titulo', 'Tarea'.$task->titulo)

 @section('content')
    <h1>Bienvenido a la tarea  {{$task->titulo}}</h1>
    <a href="{{route('tasks.index')}}">Regresar a la lista</a>
    <br>
    <a href="{{route('tasks.edit',$task)}}">Editar tarea</a>
   

    <p>{{$task->descripcion}}</p> 
    <h2>{{$task->completed}}</h2> 
    <h3>{{$task->start_date}}</h3> 
    <h3>{{$task->due_date}}</h3> 

    <form action="{{route('tasks.destroy',$task)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">
            Eliminar
        </button>
    </form>
@endsection