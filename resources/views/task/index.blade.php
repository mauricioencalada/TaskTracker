@extends('layouts.plantilla')

@section('titulo', 'Lista de Tareas')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection


@section('content')

<div class="d-flex justify-content-center ">
    <h1 >Lista de tareas</h1>
</div>
<div class="d-flex justify-content-center ">
    <a href="{{ route('tasks.create')}}" class="btn btn-warning float-right justify-content-center">Crear tarea</a>

</div>
    
    

    <!-- <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{route('tasks.show', $task)}}">
                    {{ $task->titulo }}</a>

            </li>
        @endforeach
    </ul>
-->

    <div class="container">
        <h2>Lista de elementos</h2>
        <ul class="list-group">
          <!-- Mostrar solo los primeros 10 elementos -->
          @foreach($tasks->take(10) as $task)
            <li class="list-group-item">
                <a href="{{route('tasks.show', $task)}}">
                {{ $task->titulo }}
            </li>
            
          @endforeach
        </ul>
<br>
        <div class="d-flex justify-content-center ">
            {{$tasks->links()}}
        </div>

    
      

@endsection
