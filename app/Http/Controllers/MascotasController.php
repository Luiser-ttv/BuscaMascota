<?php

namespace App\Http\Controllers;
use App\Mascotas;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    //
    public function devuelve_nombre($nombre)
 {
 return Mascotas::where('nombre', $nombre)->inOrder()->first();
 }

 public function carga_datos($nombre)
 {
 

}
}
