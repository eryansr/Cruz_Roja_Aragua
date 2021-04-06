<?php

namespace App\Http\Controllers;

use App\Almacenamiento;
use App\Asociada;
use App\Basura;
use App\Blanca;
use App\Censo;
use App\Ciudad;
use App\Civil;
use App\Consumo;
use App\Estado;
use App\Familia;
use App\Filiacion;
use App\Http\Requests\SaveCensoRequest;
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
use App\Voluntario;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ChartsController extends Controller
{

    public function charts()
    {
        $censo = Censo::count();
        $voluntario = Voluntario::count();

        $volmacha = DB::table('sexo_voluntario')->where('sexo_id', 1)->count();
        $volmacho = DB::table('sexo_voluntario')->where('sexo_id', 2)->count();
    
        $volage = DB::table('voluntarios')->where('edad','>',6)->where('edad','<',13)->count();
        $volage1 = DB::table('voluntarios')->where('edad','>=',14)->where('edad','<=',18)->count();
        $volage2 = DB::table('voluntarios')->where('edad','>=',19)->where('edad','<=',31)->count();
        $volage3 = DB::table('voluntarios')->where('edad','>=',32)->where('edad','<=',41)->count();
        $volage4 = DB::table('voluntarios')->where('edad','>=',42)->where('edad','<=',51)->count();
        $volage5 = DB::table('voluntarios')->where('edad','>=',52)->where('edad','<=',61)->count();
        $volage6 = DB::table('voluntarios')->where('edad','>=',62)->where('edad','<=',71)->count();
        $volage7 = DB::table('voluntarios')->where('edad','>=',72)->count();

        $volmun = Voluntario::where('municipio_id', 36)->count();
        $volmun1 = Voluntario::where('municipio_id', 37)->count();
        $volmun2 = Voluntario::where('municipio_id', 38)->count();
        $volmun3 = Voluntario::where('municipio_id', 39)->count();
        $volmun4 = Voluntario::where('municipio_id', 40)->count();
        $volmun5 = Voluntario::where('municipio_id', 41)->count();
        $volmun6 = Voluntario::where('municipio_id', 42)->count();
        $volmun7 = Voluntario::where('municipio_id', 43)->count();
        $volmun8 = Voluntario::where('municipio_id', 44)->count();
        $volmun9 = Voluntario::where('municipio_id', 45)->count();
        $volmun10 = Voluntario::where('municipio_id', 46)->count();
        $volmun11 = Voluntario::where('municipio_id', 47)->count();
        $volmun12 = Voluntario::where('municipio_id', 48)->count();
        $volmun13 = Voluntario::where('municipio_id', 49)->count();
        $volmun14 = Voluntario::where('municipio_id', 50)->count();
        $volmun15 = Voluntario::where('municipio_id', 51)->count();
        $volmun16 = Voluntario::where('municipio_id', 52)->count();
        $volmun17 = Voluntario::where('municipio_id', 53)->count();


        return view('charts.charts', compact('censo',
        'voluntario', 'volmacho', 'volmacha', 'volage', 'volage1', 'volage2', 'volage3', 'volage4', 'volage5', 'volage6', 'volage7', 'volmun', 'volmun1', 'volmun2', 'volmun3', 'volmun4', 'volmun5', 'volmun6', 'volmun7', 'volmun8', 'volmun9', 'volmun10', 'volmun11', 'volmun12', 'volmun13', 'volmun14', 'volmun15', 'volmun16', 'volmun17'
        ));
    }

}
