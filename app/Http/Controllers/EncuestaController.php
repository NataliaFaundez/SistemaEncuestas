<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Comuna;
use App\Proyecto;

use App\Encuesta;



class EncuestaController extends Controller
{
    //
    
    public function GetGuardar(Request $request){
             $inputs = $request->all();
        
         $validator = Validator::make($request->all(), [
            'proyecto_id'=>'required|exists:proyectos,id',
            'folio_a'=>'required|numeric',
            'folio_b'=>'required|digits:1',
            'rut'  =>'required',
            'direccion'  =>'required|alpha',
            'numero'  =>'required|numeric',
            'block'  =>'required',
            'departamento'  =>'required',
            'comuna_id' =>'required|exists:comunas,id',
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
        return redirect('/encuestador');

     }

     public function Index(){
        $encuestas = Encuesta::with("proyecto")->get();
        $encuestas = Encuesta::with("comuna")->get();

        return view('encuestador1', ["encuestas" => $encuestas, "proyectos"=> Proyecto::all(), "comunas"=> Comuna::all()]);
    }

    public function VerGuardar(){
        return view('encuestador2');
    }

    public function Editar($id)
    {
        $encuesta = Encuesta::findOrFail($id);

        $proyectos = Proyecto::all();
        $comunas = Comuna::all();

        return view('####', compact("encuesta", "proyecto", "comunas"));
    }

    public function EditarSave(Request $request, $id){
        $validator = Validator::make($inputs, [            
            'proyecto_id'=>'required|exists:proyectos,id ',
            'folio_a'=>'required|numeric',
            'folio_b'=>'required|digits:1',
            'rut'  =>'required',
            'direccion'  =>'required|alpha',
            'numero'  =>'required|numeric',
            'block'  =>'required',
            'departamento'  =>'required',
            'comuna_id' =>'required|exists:comunas,id',
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
        $encuesta = Encuesta::findOrFail($id);    
        
        $proyectos = Proyecto::all();
        $comunas = Comuna::all();
        
        $encuesta->proyecto_id    = $request->proyecto_id;
        $encuesta->folio_a = $request->folio_a;  
        $encuesta->folio_b = $request->folio_b;  
        $encuesta->rut = $request->rut;  
        $encuesta->direccion = $request->direccion;  
        $encuesta->numero = $request->numero;  
        $encuesta->block = $request->block;  
        $encuesta->departamento = $request->departamento;  
        $encuesta->comuna_id = $request->comuna_id;  
        $encuesta->telefono = $request->telefono;  
        $encuesta->celular = $request->celular;  
        $encuesta->contacto1 = $request->contacto1;  
        $encuesta->contacto2 = $request->contacto2;  
        
        $encuesta->save();
        return redirect("/encuestador");
    }

     public function Mostrar($id){
        $encuesta = Encuesta::findOrFail($id);
        return view('mostrar_encuesta', ["encuesta" => $encuesta, "proyectos"=> Proyecto::all(), "comunas"=> Comuna::all()]);
    }

    public function Eliminar($id){       
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->delete();
        return redirect('/encuestador');
    }


}
    
      