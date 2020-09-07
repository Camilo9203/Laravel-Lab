@extends('layout')
@section('title','Editar proyecto')
@section('content')


    <h1>Editar Proyecto</h1>

    @include('partials.validation-errors')

    {{-- Formulario de creación de projecto --}}
    <form method="POST" action="{{ route('projects.update', $project) }}">
        
        @method('PATCH')
        
        @include('projects._form', ['btnText' => 'Actualizar'])
        
        
    </form>

@endsection