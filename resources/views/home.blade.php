@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead-text-secondary">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quo quas doloremque. Libero voluptates eveniet tenetur amet incidunt nulla quia, magni adipisci! Fuga ratione sequi ea qui facilis a recusandae?
            </p>
            <a class="btn btn-lg btn-block btn-primary" 
                href="{{ route('contact') }}"
            >Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" 
                href="{{ route('projects.index') }}"
            >Portafolio</a>
        </div>
    </div>
</div>
@endsection