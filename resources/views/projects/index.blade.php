@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
    <h1 class="display-4">Portfolio</h1>
    @auth
        <a href="{{ route('projects.create') }}">Crear proyecto</a>
    @endauth
    <ul class="list-group">
        @forelse ($projects as $projectItem)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a 
                    class="d-flex"
                    href="{{ route('projects.show', $projectItem) }}"
                >
                    <span>
                        {{ $projectItem->title }} 
                    </span>
                    <span>
                        {{ $projectItem->created_at->format('d/m/Y') }} 
                    </span>
                </a>
            </li>
        @empty
            <li>No hay proyectos para mostras</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
</div>
@endsection