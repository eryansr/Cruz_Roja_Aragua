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

class CensoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'update', 'destroy', 'destroyCarga');
    }

    public function contador()
    {
        $censo = Censo::count();
        $voluntario = Voluntario::count();
       
        return view('home', compact('censo',
        'voluntario'
        ));
    }

    public function ciudads()
    {
        $estado_id = Input::get('estado_id');
        $ciudads = Ciudad::where('estado_id', '=', $estado_id)->get();
        return response()->json($ciudads);
    }

    public function municipios()
    {
        $estado_id = Input::get('estado_id');
        $municipios = Municipio::where('estado_id', '=', $estado_id)->get();
        return response()->json($municipios);
    }

    public function parroquias()
    {
        $municipio_id = Input::get('municipio_id');
        $parroquias = Parroquia::where('municipio_id', '=', $municipio_id)->get();
        return response()->json($parroquias);
    }

    public function index()
    {
        return view('censos.index', [
            'censos' => Censo::latest()->paginate()
        ]);
    }

    public function create()
    {
        $estados = Estado::all();
        $ocupacions = Ocupacion::all();
        $profesions = Profesion::all();
        $instruccions = Instruccion::all();
        $filiacions = Filiacion::all();
        $nacionalidads = Nacionalidad::pluck('nombre', 'id');
        $sexos = Sexo::pluck('nombre', 'id');
        $civils = Civil::pluck('nombre', 'id');
        $viviendas = Vivienda::pluck('nombre', 'id');
        $saluds = Salud::pluck('nombre', 'id');
        $consumos = Consumo::pluck('nombre', 'id');
        $blancas = Blanca::pluck('nombre', 'id');
        $basuras = Basura::pluck('nombre', 'id');
        $almacenamientos = Almacenamiento::pluck('nombre', 'id');
        $preparacions = Preparacion::pluck('nombre', 'id');
        $servidas = Servida::pluck('nombre', 'id');
        $manipulacions = Manipulacion::pluck('nombre', 'id');
        $mascotas = Mascota::pluck('nombre', 'id');
        $asociadas = Asociada::pluck('nombre', 'id');
        $recreacions = Recreacion::pluck('nombre', 'id');

        return view('censos.create', compact('nacionalidads', 'sexos', 'ocupacions', 'profesions', 'instruccions', 'filiacions', 'civils', 'viviendas', 'saluds', 'consumos', 'blancas', 'basuras', 'almacenamientos', 'preparacions', 'servidas', 'manipulacions', 'mascotas', 'asociadas', 'recreacions', 'estados'), [
            'censo' => new Censo,
        ]);
    }

    public function store(SaveCensoRequest $request)
    {
        $censo = Censo::create( $request->validated() );
        $censoid = $censo->id;

        $total = count($request->cedulaf);
        for ($i=0; $i < $total; $i++)
        {
            $cargas = new Familia();
            $cargas->cedulaf = $request->cedulaf[$i];
            $cargas->apellidof = $request->apellidof[$i];
            $cargas->nombref = $request->nombref[$i];
            $cargas->edadf = $request->edadf[$i];
            $cargas->sexof = $request->sexof[$i];
            $cargas->civilf = $request->civilf[$i];
            $cargas->filiacion = $request->filiacion[$i];
            $cargas->instruccionf = $request->instruccionf[$i];
            $cargas->ocupacionf = $request->ocupacionf[$i];
            $cargas->enfermedad = $request->enfermedad[$i];
            $cargas->censo_id = $censoid;
            $cargas->save();
        }

        $censo->nacionalidads()->attach($request->nacionalidads);
        $censo->sexos()->attach($request->sexos);
        $censo->civils()->attach($request->civils);
        $censo->viviendas()->attach($request->viviendas);
        $censo->saluds()->attach($request->saluds);
        $censo->consumos()->attach($request->consumos);
        $censo->blancas()->attach($request->blancas);
        $censo->basuras()->attach($request->basuras);
        $censo->almacenamientos()->attach($request->almacenamientos);
        $censo->preparacions()->attach($request->preparacions);
        $censo->servidas()->attach($request->servidas);
        $censo->manipulacions()->attach($request->manipulacions);
        $censo->mascotas()->attach($request->mascotas);
        $censo->asociadas()->attach($request->asociadas);
        $censo->recreacions()->attach($request->recreacions);

        return redirect()->route('censos.index')->with('status', 'El Censo fue creado con éxito.');
    }

    public function show(Censo $censo)
    {
        return view('censos.show', [
            'censo' => $censo
        ]);
    }

    public function edit(Censo $censo)
    {
        $estados = Estado::all();
        $ocupacions = Ocupacion::all();
        $profesions = Profesion::all();
        $instruccions = Instruccion::all();
        $filiacions = Filiacion::all();
        $nacionalidads = Nacionalidad::pluck('nombre', 'id');
        $sexos = Sexo::pluck('nombre', 'id');
        $civils = Civil::pluck('nombre', 'id');
        $viviendas = Vivienda::pluck('nombre', 'id');
        $saluds = Salud::pluck('nombre', 'id');
        $consumos = Consumo::pluck('nombre', 'id');
        $blancas = Blanca::pluck('nombre', 'id');
        $basuras = Basura::pluck('nombre', 'id');
        $almacenamientos = Almacenamiento::pluck('nombre', 'id');
        $preparacions = Preparacion::pluck('nombre', 'id');
        $servidas = Servida::pluck('nombre', 'id');
        $manipulacions = Manipulacion::pluck('nombre', 'id');
        $mascotas = Mascota::pluck('nombre', 'id');
        $asociadas = Asociada::pluck('nombre', 'id');
        $recreacions = Recreacion::pluck('nombre', 'id');

        return view('censos.edit', compact('nacionalidads', 'sexos', 'ocupacions', 'profesions', 'instruccions', 'filiacions', 'civils', 'viviendas', 'saluds', 'consumos', 'blancas', 'basuras', 'almacenamientos', 'preparacions', 'servidas', 'manipulacions', 'mascotas', 'asociadas', 'recreacions', 'estados'), [
            'censo' => $censo
        ]);
    }

    public function update(SaveCensoRequest $request, $id)
    {
        $censo = Censo::findOrFail($id);
        $censo->update( $request->validated() );
        $censoid = $censo->id;
        $numCargas = count($request->cedulaf);

        for ($i=0; $i < $numCargas; $i++) {
            $cargaOld = Familia::where('cedulaf', $request->cedulaf[$i])->first();

            if ($cargaOld instanceof Familia)
            {
                $cargaOld->cedulaf = $request->cedulaf[$i];
                $cargaOld->apellidof = $request->apellidof[$i];
                $cargaOld->nombref = $request->nombref[$i];
                $cargaOld->edadf = $request->edadf[$i];
                $cargaOld->sexof = $request->sexof[$i];
                $cargaOld->civilf = $request->civilf[$i];
                $cargaOld->filiacion = $request->filiacion[$i];
                $cargaOld->instruccionf = $request->instruccionf[$i];
                $cargaOld->ocupacionf = $request->ocupacionf[$i];
                $cargaOld->enfermedad = $request->enfermedad[$i];
                $cargaOld->save();
            }
            else
            {
                $cargas = new Familia();
                $cargas->cedulaf = $request->cedulaf[$i];
                $cargas->apellidof = $request->apellidof[$i];
                $cargas->nombref = $request->nombref[$i];
                $cargas->edadf = $request->edadf[$i];
                $cargas->sexof = $request->sexof[$i];
                $cargas->civilf = $request->civilf[$i];
                $cargas->filiacion = $request->filiacion[$i];
                $cargas->instruccionf = $request->instruccionf[$i];
                $cargas->ocupacionf = $request->ocupacionf[$i];
                $cargas->enfermedad = $request->enfermedad[$i];
                $cargas->censo_id = $censoid;
                $cargas->save();
            }
        }

        $censo->nacionalidads()->sync($request->nacionalidads);
        $censo->sexos()->sync($request->sexos);
        $censo->civils()->sync($request->civils);
        $censo->viviendas()->sync($request->viviendas);
        $censo->saluds()->sync($request->saluds);
        $censo->consumos()->sync($request->consumos);
        $censo->blancas()->sync($request->blancas);
        $censo->basuras()->sync($request->basuras);
        $censo->almacenamientos()->sync($request->almacenamientos);
        $censo->preparacions()->sync($request->preparacions);
        $censo->servidas()->sync($request->servidas);
        $censo->manipulacions()->sync($request->manipulacions);
        $censo->mascotas()->sync($request->mascotas);
        $censo->asociadas()->sync($request->asociadas);
        $censo->recreacions()->sync($request->recreacions);

        return redirect()->route('censos.show', $censo)->with('status', 'El censo fue actualizado con éxito.');
    }

    public function destroyCarga($id)
    {
        $carga = Familia::FindOrFail($id);
        $censos = Censo::FindOrFail($carga->censo_id);
        $cargaOld = Familia::where('id', $carga->id)->first();
        $cargaOld->delete();

        return redirect()->route('censos.edit', $censos);
    }

    public function destroy(Censo $censo)
    {
        $censo->delete();

        return redirect()->route('censos.index');
    }
}
