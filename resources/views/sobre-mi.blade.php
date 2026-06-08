@extends('layouts.app')
@section('titulo', 'Sobre Mí')

@section('contenido')
    <section><h3>Sobre mi</h3></section>
    <img src="{{ asset('images.png') }}" alt="Foto de perfil">
    <p><b>Nombre</b></p>
    <p>Cristian Machicado</p>
    <p><b>Carrera</b></p>
    <p>Ingeniería de sistemas</p>
    <p><b>Semestre</b></p>
    <p>cuarto Semestre</p>
    <p><b>Frase personal</b></p>
    <p>La vida se construye linea por linea y precepto por precepto</p>

    <h3>Habilidades</h3>
    <ul>
        <li>Multimedia video</li>
        <li>Tecnico en electricidad</li>
        <li>BasketBall</li>
        <li>Exel</li>
        <li>Tecnico Celulares</li>
    </ul>
@endsection