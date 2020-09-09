@extends('layout')
@section('title',__('Contact'))
@section('content')

<div class="container">
    

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" 
                method="POST"  
                action="{{ route('messages.store')}}">

                @csrf 
                <h1 class="display-4">{{ __('Contact') }}</h1>
                <hr>
                {{-- Nombre --}}
                <div class="form-group">
                    <label for="name"> Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else borde-0 @enderror"
                        id ="name"
                        name="name" 
                        placeholder="Nombre..." 
                        value="{{ old('name') }}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        {{-- {!! $errors->first ('name', '<small>:message</small><br>') !!}  --}}
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                    type="email"
                    id="email" 
                    name="email" 
                    placeholder="Email..." 
                    value="{{ old('email') }}">
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>    
                    </span>    

                @enderror
                    {{-- {!! $errors->first ('email', '<small>:message</small><br>') !!}  --}}
                </div>

                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" 
                    id="subject"
                    name="subject" 
                    placeholder="Asunto..." 
                    value="{{ old('subject') }}">
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    {{-- {!! $errors->first ('subject', '<small>:message</small><br>') !!}  --}}
                </div>

                <div class="form-group">
                    <label for="content">Mensaje</label>
                    <textarea class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                    id="content"
                    name="content" 
                    cols="30" rows="10" 
                    placeholder="Mensaje...">{{ old('content') }}</textarea>
                    
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- {!! $errors->first ('content', '<small>:message</small><br>') !!}  --}}

                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
                </div>  
            </form>
        </div>
    </div>
</div>  
@endsection

{{-- Comprobar errores por medio de IF --}}
   {{-- @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)

            <li>{{ $error }}<li>
        
        @endforeach
        </ul>
    @endif --}}