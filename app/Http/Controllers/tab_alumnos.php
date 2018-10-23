<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\carreras;
use App\alumnos;
use App\generaciones;

class tab_alumnos extends Controller
{
    public function altaalumnos()
   {    $clavequesigue = alumnos::withTrashed()->orderBy('Matricula','desc')
							->take(1)
								->get();
     $mat = $clavequesigue[0]->Matricula+1;
		
		$carreras = carreras::where('activo','=','Si')
		                      ->orderBy('nom_carrera','asc')
                              ->get();
        $generaciones = generaciones::where('activo','=','Si')
		                      ->orderBy('ano_gen','asc')
						  ->get();                      
	
      return view ("sistema.altaalum")
     ->with('carreras',$carreras)
      ->with('generaciones',$generaciones)
	  ->with('mat',$mat);
    } 
    public function guardaalumno (Request $request)
    {
        $Matricula = $request->Matricula;
        $Ap = $request->Ap;
        $Am = $request->Am;
        $Nombre = $request->Nombre;
        $Edad = $request->Edad;
        $Sexo = $request->Sexo;
		$Telefono = $request->Telefono;
        $Correo= $request->Correo;
        $Calle = $request->Calle;
        $Cp = $request->Cp;
		$Municipio = $request->Municipio;
        $Estado= $request->Estado;
       
        $this->validate($request,[
           // 'Matricula'=>['regex:/^[0-9]{9}$/'],
            'Ap'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Am'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Edad'=>'required|integer|min:10|max:30',
            'Telefono'=>['regex:/^[0-9]{10}$/'],
            'cp'=>['regex:/^[0-9]{5}$/'],
           // 'Correo'=>['regex:/^[A-Z][0-9][A-Z,a-z,@,ñ,é,í,á,ó,ú]*$/'],
            'Calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Cp'=>['regex:/^[0-9]{5}$/'],
            'Municipio'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Estado'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'archivo'=>'image|mimes:jpeg,jpg,png,gif'
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
            
                   $alum = new alumnos;
                   $alum->Matricula = $request->Matricula;
                   $alum->archivo = $img2;
                   $alum->Ap = $request->Ap;
                   $alum->Am =$request->Am;
                   $alum->Nombre= $request->Nombre;
                   $alum->Edad=$request->Edad;
                   $alum->Sexo=$request->Sexo;
                   $alum->Telefono= $request->Telefono;
                   $alum->Correo=$request->Correo;
                   $alum->Calle=$request->Calle;
                   $alum->Cp= $request->Cp;
                   $alum->Municipio=$request->Municipio;
                   $alum->Estado=$request->Estado;
                   $alum->id_carrera=$request->id_carrera;
                   $alum->id_gen=$request->id_gen;
                   $alum->save();
                       $proceso = "Alta de Alumno";
           $mensaje =  "El alumno ha sido agregado Correctamente";	
           return view ('sistema.mensaje')
           ->with('proceso',$proceso)
           ->with('mensaje',$mensaje);
                
           }

}
