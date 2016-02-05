<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EncuestaController extends Controller
{
    //
    
    public function GetGuardar(Request $request){

        
         $validator = Validator::make($request->all(), [
            'folio_a'=>'required|numeric',
            'folio_b'=>'required|digits:1',
            'rut_encuestador'  =>'required',
            'direccion'  =>'required|alpha',
            'numero'  =>'required|numeric',
            'block'  =>'required',
            'departamento'  =>'required',
            'telefono'  =>'required|numeric',
            'celular'  =>'required|numeric',
            'contacto1'  =>'required|alpha',
            'contacto2'  =>'required|alpha',
            
        ]);
    
        if ($validator->fails())
        {
            return view('encuesta.add', ["errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();

        $user = Auth::user();

        $inputs["validador_id"] = $user->id;

        Encuesta::create($inputs);       

        return redirect('encuestas');
    }

    public function Index(){
        $encuestas = Encuesta::all();
        return view('encuesta.index', ["encuestas" => $encuestas]);
    }

//solo se manda una encuesta
    public function Mostrar($id){
        $encuesta = Encuesta::findOrFail($id);
        return view('encuesta.mostrar', ["encuesta" => $encuesta]);
    }

    public function Eliminar($id){       
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->delete();
        return redirect('encuestas');
    }
}
