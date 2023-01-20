@extends('principal')
@section('titulo', 'Agregar cancion')
@section('contenido')
<h1>Agregar canciones</h1>
<form method="post" action="{{route('agregarCancion')}}"> 
{{-- siempre hay que ponerlo después del form  / es un medio de protección de datos --}}
@csrf 
    <input type="text" name="nombre" placeholder="Nombre de la cancion">
    <br><br>
    <input type="text" name="artista" placeholder="Nombre del artista"> 
    <br><br>
    <input type="text" name="album" placeholder="Nombre del album"> 
    <br><br>
    <input type="number" name="anio" placeholder="Año de la cancion"> 
    <br><br>
    <input type="submit" value="Guardar">
</form>
@endsection