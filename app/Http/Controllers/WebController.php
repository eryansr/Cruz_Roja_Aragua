<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveVoluntarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;

use App\Censo;
use App\Familia;
use App\Voluntario;
use App\Instruccion;
use App\Manipulacion;
use App\Mascota;
use App\Municipio;
use App\Nacionalidad;
use App\Ocupacion;
use App\Parroquia;
use App\Preparacion;
use App\Profesion;
use App\Recreacion;
use App\Salud;
use App\Servida;
use App\Sexo;
use App\Vivienda;
use App\Almacenamiento;
use App\Asociada;
use App\Basura;
use App\Blanca;
use App\Ciudad;
use App\Civil;
use App\Consumo;
use App\Estado;
use App\Filiacion;
use DB;
use PDF;
use Alert;

class WebController extends Controller
{

    public function index(){
        return view ("cr.index");
    }

    public function info(){
        return view ("cr.info");
    }

    public function direccion(){
        return view ("cr.address");
    }

    public function censo(Censo $censo){
        
        $get = Input::get ('verify');
        $censo = DB::table('censos')->where('cedula', $get)->first();

        if ($censo==false) {

            return view ("cr.viewfalse", [
            'censo' => $censo
        ]);

        }else{

            return view ("cr.view", [
            'censo' => $censo
        ]);

        }
    
    }

    public function censoView(){
        return view ("cr.censo");
    }


    public function voluntario(){

        return view ("cr.voluntario");
    }



    public function show(Voluntario $voluntario)
    {
        return view('voluntarios.show', [
            'voluntario' => $voluntario
        ]);
    }

  

    public function pdf($id)
    {
        $voluntarios = Voluntario::FindOrFail ($id);
        $pdf = PDF::loadView('pdf.voluntario', compact('voluntarios'));
        return $pdf->stream();
        // return $pdf->download('invoice.pdf');
    }
}
