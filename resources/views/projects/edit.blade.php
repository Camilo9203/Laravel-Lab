@extends('layout')
@section('title','Editar proyecto')
@section('content')
   
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')

            {{-- Formulario de creación de projecto --}}
            <form class="bg-white py-3 px-4 shadow rounded" 
                method="POST" 
                action="{{ route('projects.update', $project) }}">
                
                <h1 class="display-4">Editar Proyecto</h1>

                @method('PATCH')
                
                @include('projects._form', ['btnText' => 'Actualizar'])
                
            </form>
        </div>
    </div>
</div>

@endsection