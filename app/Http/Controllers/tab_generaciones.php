<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\generaciones;
class tab_generaciones extends Controller
{
    public function altageneracion()
    {    
        $clavequesigue = generaciones::orderBy('id_gen','desc')
                                    ->take(1)
                                    ->get();
        if (count($clavequesigue)==0)
        {
            $id_gene=1;
        }
        else{
            $id_gene = $clavequesigue[0]->id_gen+1;
        }
       
        // return $clavequesigue;
        return view ("sistema.altagen")
->with('id_gene',$id_gene);
    }


    public function guardageneracion(Request $request)
    {
        $id_gen = $request->id_gen;
        $ano_gen = $request->ano_gen;
        
    $this->validate($request,[
           //'id_gen'=>['regex:/^[0-9]{9}$/'],
            'ano_gen'=>['regex:/^[0-9, ,-]*$/'],
            'archivo'=>'image|mimes:jpeg,jpg,png.gif'
        ]);
        
        $file = $request->file('archivo');
        if($file!="")
        {
        $ldate = date('Ymd_His_');
        $img = $file->getClientOriginalName();
        $img2 = $ldate.$img;
        \Storage::disk('local')->put($img2, \File::get($file));
        }
        else
        {
            $img2 = "sinfoto.png";
        }
                $generacion = new generaciones;
                $generacion->id_gen = $request->id_gen;
                $generacion->ano_gen = $request->ano_gen;
                $generacion->archivo = $img2;
                $generacion->save();
                    $proceso = "Alta de Generacion";
                    $mensaje = "La Generacion Ha Sido Guardada Correctamente";
                return view ('sistema.mensaje')
                ->with('proceso',$proceso)
                ->with('mensaje',$mensaje);

                
    }
    public function reportegeneraciones()
    {
    $generaciones = generaciones::all();
    return view('sistema.reportegen')
    ->with('generaciones',$generaciones);
    }
    public function eliminagen($id_gen)
	{
	generaciones::find($id_gen)->delete();
	$proceso = "Eliminacion de generacion";
	$mensaje =  "La generacion ha sido borrada Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
}
}
