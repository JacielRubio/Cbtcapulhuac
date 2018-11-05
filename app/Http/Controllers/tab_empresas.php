<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresas;
use App\Http\Controllers\tab_empresa;
class tab_empresas extends Controller
{
    public function altaempresa()
    {    
        $clavequesigue = empresas::orderBy('id_em','desc')
                                    ->take(1)
                                    ->get();
        if (count($clavequesigue)==0)
        {
            $id_emp=1;
        }
        else{
            $id_emp = $clavequesigue[0]->id_em+1;
        }
       
        // return $clavequesigue;
        return view ("sistema.altaemp")
->with('id_emp',$id_emp);
    }

    public function guardaempresa(Request $request)
    {
        $id_em = $request->id_em;
        $rfc = $request->rfc;
        $nom_emp = $request->nom_emp;
        $dir = $request->dir;
        $tel = $request->tel;
        $municipio = $request->municipio;
        $cp = $request->cp;
        $Estado = $request->Estado;
        $Correo = $request->Correo;
        $Pag_web = $request->Pag_web;
        $Giro = $request->Giro;

    $this->validate($request,[
           //'id_em'=>['regex:/^[0-9]{9}$/'],
            'rfc'=>['regex:/^[A-Z,0-9]*$/'],
            'nom_emp'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'dir'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú,0-9]*$/'],
            'municipio'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Estado'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'tel'=>['regex:/^[0-9]{10}$/'],
            'cp'=>['regex:/^[0-9]{5}$/'],
            'Correo'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ,ü,@,_,-,.,0-9]*$/'],
            'Pag_web'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ,@,_,-,.,0-9]*$/'],
            'Giro'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
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
                $empresa = new empresas;
                $empresa->id_em = $request->id_em;
                $empresa->rfc = $request->rfc;
                $empresa->nom_emp = $request->nom_emp;
                $empresa->dir = $request->dir;
                $empresa->tel = $request->tel;
                $empresa->municipio = $request->municipio;
                $empresa->cp = $request->cp;
                $empresa->Estado = $request->Estado;
                $empresa->Correo = $request->Correo;
                $empresa->Pag_web = $request->Pag_web;
                $empresa->Giro = $request->Giro;
                $empresa->archivo = $img2;
                $empresa->save();
                    $proceso = "Alta de Empresa";
                    $mensaje = "La Empresa Ha Sido Guardada Correctamente";
                return view ('sistema.mensaje')
                ->with('proceso',$proceso)
                ->with('mensaje',$mensaje);

                
    }
    public function reporteempresas()
    {
    $empresas = empresas::all();
    return view('sistema.reporteemp')
    ->with('empresas',$empresas);
    }
    public function eliminaemp($id_em)
	{
	empresas::find($id_em)->delete();
	$proceso = "Eliminacion de empresa";
	$mensaje =  "La empresa ha sido borrada Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
}
public function modificae($id_em)
	{
		$empresa= empresas::where('id_em','=',$id_em)->get();
		//$idc = $maestros[0]-idc;
		//$carrera = carreras::where('idc','=',$idc)->get();
		//$todasdemas = carreras::where('idc','!=',$idc)
		//						->orderBy('nombre'.'asc')
		//						->get();
		
		return $empresas;
		
		return view('sistema.modificaempresa')
		->with('empresas',$empresas[0]); with('id_em',$id_em);
	}
	public function modificaemp(Request $request)
	{
		$id_em = $request->id_em;
        $rfc = $request->rfc;
        $nom_emp = $request->nom_emp;
        $dir = $request->dir;
        $tel = $request->tel;
        $municipio = $request->municipio;
        $cp = $request->cp;
        $Estado = $request->Estado;
        $Correo = $request->Correo;
        $Pag_web = $request->Pag_web;
        $Giro = $request->Giro;
		// NUNCA SE RECIBEN archivos
        
        $this->validate($request,[
            'rfc'=>['regex:/^[A-Z,0-9]*$/'],
            'nom_emp'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'dir'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú,0-9]*$/'],
            'municipio'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'Estado'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
            'tel'=>['regex:/^[0-9]{10}$/'],
            'cp'=>['regex:/^[0-9]{5}$/'],
            'Correo'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ,ü,@,_,-,.,0-9]*$/'],
            'Pag_web'=>['regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ,@,_,-,.,0-9]*$/'],
            'Giro'=>['regex:/^[A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
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
	 
            $empresa = empresas::find($id_em);
			$empresa->id_em = $request->id_em;
			if($file!="")
			{
            $empresa->archivo = $img2;
			}
            $empresa->rfc = $request->rfc;
            $empresa->nom_emp = $request->nom_emp;
            $empresa->dir = $request->dir;
            $empresa->tel = $request->tel;
            $empresa->municipio = $request->municipio;
            $empresa->cp = $request->cp;
            $empresa->Estado = $request->Estado;
            $empresa->Correo = $request->Correo;
            $empresa->Pag_web = $request->Pag_web;
            $empresa->Giro = $request->Giro;
            $empresa->archivo = $img2;
            $empresa->save();
				$proceso = "modifica empresa";
	            $mensaje =  "La Empresa ha sido Modificada Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
	}
}