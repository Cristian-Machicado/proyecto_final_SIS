@extends('layouts.app')
@section('titulo', 'Contacto')

@section('contenido')
    <h3>Contacto</h3>
    <form action="" method="POST">
        @csrf <br> <label for="Nombre">Nombre</label>
        <br> <input type="text" id="Nombre" name="Nombre" placeholder="Tu nombre" >
        <br> <label for="email">Correo Electrónico</label>
        <br> <input type="email" id="email" name="email" placeholder="pon tu correo" required>
        <br> <label for="mensaje">Mensaje</label>
        <br> <textarea name="mensaje" id="mensaje" rows="4"></textarea>
        <br> <button type="submit">Enviar</button>
    </form>
@endsection