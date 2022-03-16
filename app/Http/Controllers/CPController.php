<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodigoPostal;
class CPController extends Controller
{
    //mostrar colonias
    public function buscarCodigo(Request $request){
    $buscar=$request->input('CP');
    $codigo=CodigoPostal::where('codigo',$buscar)->get();
    return view('colonia',['codigo'=>$codigo]);
;    }
    //mostrar municipios
    public function mostrarMunicipo($id){
        $codigo=CodigoPostal::where('id',$id)->get();
        return view('municipio',['codigo'=>$codigo]);
    }
    //mostrar ciudades
    public function mostrarCiudad($id){
        $codigo=CodigoPostal::where('id',$id)->get();
        return view('ciudad',['codigo'=>$codigo]);
    }

}
