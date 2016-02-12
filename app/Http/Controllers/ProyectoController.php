<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Proyecto;

class ProyectoController extends Controller
{

     public function PostGuardar(Request $request){
        $validator = Validator::make($request->all(), [            
            'proyecto'  =>'required|alpha',            
        ]);
    
        if ($validator->fails())
        {
            return view('cliente.proyecto', ["errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();
        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        Proyecto::create($inputs);
        return redirect('cliente/proyecto');
    }

    public function Index(){
        $proyectos = Proyecto::all();
        return view('cliente.proyecto', ["proyectos" => $proyectos]);
    }

    public function Editar($id){
        $proyecto = Proyecto::findOrFail($id);
        return view('cliente.proyecto_editar', ['proyecto'=> $proyecto]);
    }
    public function EditarSave(Request $request, $id){
        $validator = Validator::make($request->all(), [            
            'proyecto'  =>'required|alpha',            
        ]);
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->proyecto = $request->proyecto;
        $proyecto->save();
        return redirect('cliente/proyecto');
    }
    /*public function Mostrar($id){
        $region = Region::findOrFail($id);
        return view('region.mostrar', ["region" => $region]);
    }*/

    public function Eliminar($id){       
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect('cliente/proyecto');
    }
}
