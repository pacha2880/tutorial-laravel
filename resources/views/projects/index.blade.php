@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{ route('projects.create') }}">Crear proyecto</a>
    <ul>
        
        @forelse ($projects as $projectItem)
            <li>
                <a href="{{ route('projects.show', $projectItem) }}">{{ $projectItem->title }} </a>
            </li>
        @empty
            <li>No hay proyectos para mostras</li>
        @endforelse
        {{ $projects->links() }}
    </ul>

@endsection