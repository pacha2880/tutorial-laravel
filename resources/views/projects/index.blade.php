@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{-- @if($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostras</li>
        @endif --}}
        @forelse ($projects as $projectItem)
            <li><a href="{{ route('projects.show', $projectItem) }}">{{ $projectItem->title }} </a>
                {{-- <br><small>{{ $portfolioItem->description }}
                <br><strong>{{ $portfolioItem->created_at->diffForHumans() }}</strong>
                {{ $loop->last ? " <- es el ultimo :v" : "" }}</small> --}}
            </li>
        @empty
            <li>No hay proyectos para mostras</li>
        @endforelse
        {{ $projects->links() }}
    </ul>

@endsection