@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre..." value=""><br>
        <input name="email" placeholder="Email..." value="caco@cagones.com"><br>
        <input name="subject" placeholder="Asunto..." value="asunto de caca"><br>
        <textarea name="content" placeholder="Mensaje...">mensaje de caca</textarea><br>
        <button>Enviar</button>
    </form>
@endsection