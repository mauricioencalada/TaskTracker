@extends('layouts.plantilla')

@section('titulo', 'Lista de Tareas')

@section('content')
    <br>
    <div class="d-flex justify-content-center ">
        <h1><strong>Formulario para crear una Tarea
            </strong></h1>
    </div>

    <!--cuerpo del formulario-->
    <div class="container text">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <label class="form-label justify-content-start ">Nombre </label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}"
                        placeholder="Titulo de la Tarea">
                    @error('titulo')
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>

                    <label class="form-label justify-content-start ">Slug</label>

                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                        placeholder="Slug de la Tarea">
                    </label>

                    @error('slug')
                        <br>
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>
                    <label class="form-label justify-content-start ">Descripcion</label>
                    <textarea name="descripcion" class="form-control" placeholder="Descripcion de la tarea"
                        value="{{ old('descripcion') }}"></textarea>
                    </label>
                    @error('descripcion')
                        <br>
                        <span class="badge text-bg-warning">
                            {{ $message }}
                        </span>
                        <br>
                    @enderror
                    <br>
                    <div class="d-flex justify-content-center ">
                        <div class="container">
                            <label class="form-label justify-content-start ">Fecha de Inicio</label>
                            <input name="start_date" class="form-control" type="datetime">
                            @error('start_date')
                                <br>
                                <span class="badge text-bg-warning">
                                    {{ $message }}
                                </span>
                                <br>
                            @enderror
                        </div>
                        <div class="container">
                            <label class="form-label justify-content-start ">Fecha de Fin</label>
                            <input name="due_date" class="form-control" type="datetime">

                            @error('due_date')
                                <br>
                                <span class="badge text-bg-warning">
                                    {{ $message }}
                                </span>
                                <br>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center ">

                        <label class="form-label justify-content-start ">Estado</label>
                    </div>
                    <div class="d-flex justify-content-center ">

                        <select class="form-select" name="completed">
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
                    </div>
                    <br>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" class="btn btn-warning float-right justify-content-center">
                            Guardar
                        </button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
@endsection
