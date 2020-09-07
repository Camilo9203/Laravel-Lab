@extends('layout')
@section('title','Crear proyecto')
@section('content')


    <h1>Crear Proyecto</h1>

    @include('partials.validation-errors')
        
    @endif

    {{-- Formulario de creación de projecto --}}
    <form method="POST" action="{{ route('projects.store') }}">
    
        @csrf
        <labe>
            Titulo del projecto <br>
            <input type="text" name="title" value="{{ old('title') }}"> 
        </label><br>
        
        <label>
            URL del proyecto <br>
            <input type="text" name="url" value="{{ old('url') }}"> 
        </label><br>
        <label>
            Descripción del proyecto <br>
            <textarea name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
        </label><br>
        
        <button>Guardar</button>
    </form>

@endsection