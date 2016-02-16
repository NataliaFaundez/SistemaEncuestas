<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Region;
use App\Comuna;



class ComunaController extends Controller
{
    //
    public function PostGuardar(Request $request){
        $inputs = $request->all();

        $validator = Validator::make($inputs, [            
            'comuna'    =>'required|alpha',
            'region_id' =>'required|exists:regiones,id'            
        ]);

        if ($validator->fails())
        {
            $comunas = Comuna::all();
            return view('configuracion.comuna', ["comunas" => $comunas,"errors" => $validator->errors()->all()]);
        }

        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        Comuna::create($inputs);
        return redirect('config/comuna');
    }

    public function Index(){

        $comunas = Comuna::with("region")->get();

        return view('configuracion.comuna', ["comunas" => $comunas, "regiones"=> Region::all()]);
    }

    public function Editar($id)
    {
        $comuna = Comuna::findOrFail($id);

        $regiones = Region::all();

        return view('configuracion.editarComuna', compact("comuna", "regiones"));
    }

    public function EditarSave(Request $request, $id){
        $validator = Validator::make($inputs, [            
            'comuna'    =>'required|alpha',
            'region_id' =>'required|exists:regiones,id'            
        ]);
         if ($validator->fails())
        {
            $comunas = Comuna::all();
            return view('configuracion.comuna', ["comunas" => $comunas,"errors" => $validator->errors()->all()]);
        }
        $comuna = Comuna::findOrFail($id);    
        $regiones = Region::all();
        
        $comuna->comuna    = $request->comuna;
        $comuna->region_id = $request->region_id;           
        $comuna->save();
        return redirect('config/comuna');
    }
    /*public function Mostrar($id){
        $region = Region::findOrFail($id);
        return view('region.mostrar', ["region" => $region]);
    }*/

    public function Eliminar($id){       
        $comuna = Comuna::findOrFail($id);
        $comuna->delete();
        return redirect('config/comuna');
    }
}
