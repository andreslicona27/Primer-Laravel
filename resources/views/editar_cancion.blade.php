@extends('principal')
@section('titulo', 'Editar cancion')
@section('contenido')
<h1>Editar canciones</h1>
<form method="post" action="{{route('guardarCambiosCancion')}}"> 
{{-- siempre hay que ponerlo después del form  / es un medio de protección de datos --}}
@csrf 
    <input type="hidden" name="idCancion" placeholder="Nombre de la cancion" value="{{$cancion->id}}"> 
    <br><br>
    <input type="text" name="nombre" placeholder="Nombre de la cancion" value="{{$cancion->nombre}}"> 
    <br><br>
    <input type="text" name="artista" placeholder="Nombre del artista" value="{{$cancion->artista}}"> 
    <br><br>
    <input type="text" name="album" placeholder="Album de la cancion" value="{{$cancion->album}}"> 
    <br><br>
    <input type="number" name="anio" placeholder="Año de la cancion" value="{{$cancion->anio}}"> 
    <br><br>
    <input type="submit" value="Guardar">
</form>
@endsection