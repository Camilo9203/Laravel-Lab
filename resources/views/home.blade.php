@extends('layout')
@section('title',__('Home'))
@section('content')
    
    @include('partials.hero')

    
    <div class="container py-5">
        
        
        <div class="row">
            <div class="col-12 col-lg-6">
            @lang('Home')
                <h1 class="display-4 text-primary">@lang('Desarollo Web')</h1>
                <p class="lead text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing 
                    elit. Ex quod consectetur, maiores repudiandae, delectus omnis sunt temporibus 
                    dolore, non dignissimos magnam officia laudantium corporis dolorem atque! Omnis 
                    possimus sint odio.</p>
                    <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
                    <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
                </div>
            </div>
    
    @include('partials.pricing')
    </div>

   
@endsection

{{-- @auth
        {{ auth()->user()->name }}
    @endauth --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}