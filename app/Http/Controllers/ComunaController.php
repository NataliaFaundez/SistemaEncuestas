<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Region;
use App\Comuna;


class ComunaController extends Controller
{
    //
    public function PostGuardar(Request $request){
    	$validator = Validator::make($request->all(), [            
            'comuna'  =>'required',
            'region'  =>'required'            
        ]);
    
        if ($validator->fails())
        {
            return view('configuracion.comuna', ["errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();
        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        Region::create($inputs);
        return redirect('config/comuna');
    }

    public function Index(){
        $comunas = Comuna::all();

        return view('configuracion.comuna', ["comunas" => $comunas, "regiones"=> Region::all()]);
    }

    public function Editar($id){
        $comuna = Comuna::findOrFail($id);
        return view('configuracion.editarComuna', ['comuna'=> $comuna]);
    }
    public function EditarSave(Request $request, $id){
        $comuna = Comuna::findOrFail($id);
        $comuna->comuna = $request->comuna;
        $comuna->save();
        return redirect('config/region');
    }
    /*public function Mostrar($id){
        $region = Region::findOrFail($id);
        return view('region.mostrar', ["region" => $region]);
    }*/

    public function Eliminar($id){       
        $comuna = Comuna::findOrFail($id);
        $comuna->delete();
        return redirect('config/region');
    }
}
