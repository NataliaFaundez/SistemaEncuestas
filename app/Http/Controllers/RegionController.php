<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Region;

class RegionController extends Controller
{
    //
    public function PostGuardar(Request $request){
    	$validator = Validator::make($request->all(), [            
            'region'  =>'required|alpha',            
        ]);
    
        if ($validator->fails())
        {
            return view('configuracion.region', ["errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();
        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        Region::create($inputs);
        return redirect('config/region');
    }

    public function Index(){
        $regiones = Region::all();
        return view('configuracion.region', ["regiones" => $regiones]);
    }

    public function Editar($id){
        $region = Region::findOrFail($id);
        return view('configuracion.editarRegion', ['region'=> $region]);
    }
    public function EditarSave(Request $request, $id){
        $validator = Validator::make($request->all(), [            
            'region'  =>'required|alpha',            
        ]);
        $region = Region::findOrFail($id);
        $region->region = $request->region;
        $region->save();
        return redirect('config/region');
    }
    /*public function Mostrar($id){
        $region = Region::findOrFail($id);
        return view('region.mostrar', ["region" => $region]);
    }*/

    public function Eliminar($id){       
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect('config/region');
    }
}
