@extends('layouts.plantilla')

@section('titulo', 'Tarea' . $task->titulo)

@section('content')
    <br>
    <div class="d-flex justify-content-center ">
        <h1><strong>{{ $task->titulo }}</strong></h1>
    </div>
    <br>
    <!--botones -->
    <div class="d-flex justify-content-center align-items-center">
        <a href="{{ route('tasks.index') }}" style="margin-right: 400px;"
            class="btn btn-warning float-right justify-content-center">Regresar a la lista</a>
        <a href="{{ route('tasks.edit', $task) }} " class="btn btn-warning float-right justify-content-center">Editar
            tarea</a>
    </div>
    <br>
    <!-- cuerpo-->



    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card d-flex justify-content-center align-items-center">
                    <div class="card-body">
                        <div class="container text-center">
                            <p>{{ $task->descripcion }}</p>
                        </div>
                        @if ($task->completed)
                            <h2><span class="badge text-bg-info">Completo</span></h2>
                        @else
                            <h2><span class="badge text-bg-secondary" >Incompleto</span></h2>
                        @endif
                        <div class="d-flex justify-content-center ">
                            <div class="container">
                                <span> fecha de inico</span>
                                <br>
                                <h3 >{{ \Carbon\Carbon::parse($task->start_date)->format('Y-m-d') }}</h3>
                            </div>
                            <div class="container">
                                <span> fecha de inico</span>
                                <br>
                                <h3>{{ \Carbon\Carbon::parse($task->due_date)->format('Y-m-d')}}</h3>
                            </div>
                            
                        </div>
                        <!--boton de eliminar-->
                        <div class="d-flex justify-content-center ">
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-warning float-right justify-content-center">
                                    Eliminar
                                </button>
                            </form>
                            @if (session('info'))
                <script>
                    alert('{{ session('info') }}')
                </script>
                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
