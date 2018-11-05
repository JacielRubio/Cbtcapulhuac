<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carreras;

class tab_carreras extends Controller
{
    public function altacarreras()
    {
    	$clavequesigue = carreras::orderBy('id_carrera','desc')
    				->take(1)
    				->get();
    	$carr =$clavequesigue[0]->id_carrera+1;

    	return view ("sistema.altacarreras")
   		->with('carr',$carr);
    }
    public function guardacarreras(Request $request)
    {
    	$id_carrera = $request->id_carrera;
    	$nom_carrera = $request->nom_carrera;
        
    	$this->validate($request,[
    	'id_carrera'=>'required|numeric',
    	'nom_carrera'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],

	 	$carr = new carreras;
	 	$carr->id_carrera = $request->id_carrera;
	 	$carr->nom_carrera = $request->nom_carrera;
	 	//$carr->archivos2 = $img2;
	 	$carr->save();
				$proceso = "Alta de carreras";
	$mensaje =  "La carrera ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);

    }
    public function reportecarreras()
	{
	$carreras = carreras::all();
	return view('sistema.reporte')
	->with('carreras',$carreras);
	}
}
