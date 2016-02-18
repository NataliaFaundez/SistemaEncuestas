<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Region;
use App\Comuna;
use App\Proyecto;



class EncuestaController extends Controller
{
    //
    
    public function GetGuardar(Request $request){

        
         $validator = Validator::make($request->all(), [
            'proyecto_id'=>'required|exists:proyectos,id '
            'folio_a'=>'required|numeric',
            'folio_b'=>'required|digits:1',
            'rut_encuestador'  =>'required',
            'direccion'  =>'required|alpha',
            'numero'  =>'required|numeric',
            'block'  =>'required',
            'departamento'  =>'required',
            'region_id' =>'required|exists:regiones,id'
            'comuna_id' =>'required|exists:comunas,id'
            'telefono'  =>'required|numeric',
            'celular'  =>'required|numeric',
            'contacto1'  =>'required|alpha',
            'contacto2'  =>'required|alpha',
            
        ]);

        if ($validator->fails())
        {
            $encuestas = Encuesta::all();
            return view('encuestador2', ["encuestas" => $encuestas,"errors" => $validator->errors()->all()]);
        } 
     
        Encuesta::create($inputs);
        return redirect('/encuestador1');

     }

     public function Index(){
        $encuestas = Encuesta::with("proyecto")->get();
        $encuestas = Encuesta::with("comuna")->get();

        return view('encuestador1', ["encuestas" => $encuestas,
                    "proyectos"=> Proyecto::all()]),"comunas"=> Comuna::all()];
    }


}
    
      