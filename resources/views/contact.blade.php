@extends('layout')
@section('title',__('Contact'))
@section('content')

    <h1>{{ __('Contact') }}</h1>

    <form action="{{ route('messages.store')}}" method="POST">
        
        @csrf 
        <input type="" name="name" placeholder="Nombre..." id="" value="{{ old('name') }}"><br>
        {!! $errors->first ('name', '<small>:message</small><br>') !!} 

        <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first ('email', '<small>:message</small><br>') !!} 

        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first ('subject', '<small>:message</small><br>') !!} 

        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
        {!! $errors->first ('content', '<small>:message</small><br>') !!} 

        <button>@lang('Send')</button><br>

    </form>
    
@endsection

{{-- Comprobar errores por medio de IF --}}
   {{-- @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)

            <li>{{ $error }}<li>
        
        @endforeach
        </ul>
    @endif --}}