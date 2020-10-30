@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1 class="display-4">{{ $project->title }}</h1>
        @auth
            <a href="{{ route('projects.edit', $project) }}">Editar</a>
            <form method="POST" action="{{ route('projects.destroy', $project) }}">
                @csrf @method('DELETE')
                <button>Eliminar</button>
            </form>
        @endauth
        <p>{{ $project->description }}</p>
        <p>{{ $project->created_at->diffForHumans() }}</p>
    </div>
</div>
@endsection