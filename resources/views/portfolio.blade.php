@extends('layout')
@section('title','Portfolio')
@section('content')


    <h1>Portfolio</h1>

    <ul>
              
        @forelse ($portfolio as $portfolioItem)
            
            <li> {{$portfolioItem ['title'] }} </li> <!-- <small>{{ var_dump($loop) }}</small> -->

        
        @empty
            <li>No hay proyectos para mostrar</li>

         @endforelse
                     
   </ul>



@endsection

