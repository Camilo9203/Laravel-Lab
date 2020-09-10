@extends('layout')
@section('title',__('About'))
@section('content')


    <h1>@lang('About')</h1>


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/about.svg" alt="Quién soy">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">@lang('Quien Soy')</h1>
                <p class="lead text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing 
                    elit. Ex quod consectetur, maiores repudiandae, delectus omnis sunt temporibus 
                    dolore, non dignissimos magnam officia laudantium corporis dolorem atque! Omnis 
                    possimus sint odio.</p>
                    <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
                    <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                </div>
        </div>
    </div>
          
@endsection