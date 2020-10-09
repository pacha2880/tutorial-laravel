@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form action="">
        <input name="name" placeholder="Nombre...">
        <input name="email" name="email" placeholder="Email...">
        <input name="subject" placeholder="Asunto...">
        <textarea name="content" placeholder="Mensaje..."></textarea>
        <button>Enviar</button>
    </form>
@endsection