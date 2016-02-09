<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProyectoController extends Controller
{
    //
    $validator = Validator::make($request->all(), [
            
            'proyecto'  =>'required',
           
            
        ]);
    /*
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

    public function Mostrar($id){
        $proyecto = Proyecto::findOrFail($id);
        return view('proyecto.mostrar', ["proyecto" => $proyecto]);
    }
*/
    public function Eliminar($id){       
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect('proyectos');
    }
}
