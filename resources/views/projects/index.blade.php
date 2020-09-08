@extends('layout')
@section('title','Portfolio')
@section('content')


    <h1>@lang('Portfolio')</h1>
    
    @auth
        <a href="{{ route('projects.create') }}">Crear Projecto</a>
    @endauth
    
    <ul>
              
        @forelse ($projects as $project)

            <li> <a href="{{ route('projects.show', $project) }}">{{$project->title }}</a></li>
        
        @empty
        
            <li>No hay proyectos para mostrar</li>

         @endforelse
        
         {{ $projects->links() }}
   </ul>

@endsection

{{--  --}}
    {{-- <li> {{$project->title }} <br><small>{{$project->description }}</small> <br>{{ $project->created_at->format('Y-M-D') }}</li> <!-- <small>{{ var_dump($loop) }}</small> --> --}}
            