<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;
use Illuminate\Queue\Jobs\RedisJob;

class CancionController extends Controller
{
    public function index(){
        $songs = Cancion::get();
        return view('inicio', ['canciones'=>$songs]);
    }

    
    public function agregarCancion(Request $peticion){
        $cancion = new Cancion;
        
        $cancion->nombre = $peticion->nombre;
        $cancion->artista = $peticion->artista;
        $cancion->album = $peticion->album;
        $cancion->anio = $peticion->anio;
        $cancion->save();

        // Mensaje de session flash
        session()->flash("mensaje", "Cancion agregada correctamente");

        return redirect()->route('inicio');
    }

    public function editarCancion($id){
        $cancion = Cancion::find($id);

        return view('editar_cancion', ['cancion'=>$cancion]);
    }
}
