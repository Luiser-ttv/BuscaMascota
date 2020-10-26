<?php

namespace App\Http\Controllers;
use App\Mascotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MascotasController extends Controller
{
    //
   

 public function carga_datos($id)
 {
    $datos_mascota = DB::table('mascotas')->where('id', '=', $id)->get();
    return view('paginaDatos', array('mascotas' => $datos_mascota));
    

}
}
