<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{
    //
    public function PostGuardar(Request $request){
    	$validator = Validator::make($request->all(), [            
            'nombre'  =>'required|alpha|unique:clientes,nombre',    
            'rut'=>'required|string|unique:clientes,rut'        
        ]);
    
        if ($validator->fails())
        {
            $clientes = Cliente::all();
            return view('sistema.clientes', ["clientes" => $clientes,"errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();
        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        Cliente::create($inputs);
        return redirect('/sistema/clientes');
    }

    public function Index(){
        $clientes = Cliente::all();
        return view('sistema.clientes', ["clientes" => $clientes]);
    }

    public function Editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('sistema.editar_clientes', ['cliente'=> $cliente]);
    }
    public function EditarSave(Request $request, $id){
        $validator = Validator::make($request->all(), [            
            'nombre'  =>'required|alpha|unique:clientes,nombre',
            'rut'=>'required|string|unique:clientes,rut'            
        ]);
        if ($validator->fails())
        {
            $clientes = Cliente::all();
            return view('sistema.clientes', ["clientes" => $clientes,"errors" => $validator->errors()->all()]);
        }
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;        
        $cliente->rut = $request->rut;
        $cliente->save();
        return redirect('/sistema/clientes');
    }
    

    public function Eliminar($id){       
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('/sistema/clientes');
    }
}
