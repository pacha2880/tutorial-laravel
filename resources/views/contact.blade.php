@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1>{{ __('Contact') }}</h1>

    @if ($errors->any())
        {{ $errors->first('name') }}
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <form  class="bg-white shadow rounded py-3 px-4"
            method="POST" 
            action="{{ route('contact') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm border-0"
                id="name"
                name="name" 
                placeholder="Nombre..." 
                value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>@lang('Send')</button>
    </form>
</div>
@endsection