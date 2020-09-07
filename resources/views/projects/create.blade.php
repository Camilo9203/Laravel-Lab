@extends('layout')
@section('title','Crear proyecto')
@section('content')


    <h1>Crear Proyecto</h1>

    @include('partials.validation-errors')
        
    {{-- Formulario de creación de projecto --}}
    <form method="POST" action="{{ route('projects.store') }}">
    
        @include('projects._form', ['btnText' => 'Guardar'])
        
    </form>

@endsection