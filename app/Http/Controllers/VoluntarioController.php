<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Civil;
use App\Donante;
use App\Estado;
use App\Hijo;
use App\Http\Requests\SaveVoluntarioRequest;
use App\Instruccion;
use App\Municipio;
use App\Nacionalidad;
use App\Ocupacion;
use App\Parroquia;
use App\Profesion;
use App\Sanguineo;
use App\Sexo;
use App\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use PDF;

class VoluntarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'update', 'destroy');
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
        return view('voluntarios.index', [
            'voluntarios' => Voluntario::latest()->paginate()
        ]);
    }

    public function create()
    {
        $estados = Estado::all();
        $profesions = Profesion::all();
        $ocupacions = Ocupacion::all();
        $instruccions = Instruccion::all();
        $sanguineos = Sanguineo::all();
        $nacionalidads = Nacionalidad::pluck('nombre', 'id');
        $sexos = Sexo::pluck('nombre', 'id');
        $civils = Civil::pluck('nombre', 'id');
        $donantes = Donante::pluck('nombre', 'id');
        $hijos = Hijo::pluck('nombre', 'id');
        return view('voluntarios.create', compact('estados', 'profesions', 'ocupacions', 'instruccions', 'sanguineos', 'nacionalidads', 'sexos', 'civils', 'donantes', 'hijos'), [
            'voluntario' => new Voluntario
        ]);
    }

    public function store(SaveVoluntarioRequest $request)
    {
        $voluntario = Voluntario::create( $request->validated() );
        $voluntario->nacionalidads()->attach($request->nacionalidads);
        $voluntario->sexos()->attach($request->sexos);
        $voluntario->civils()->attach($request->civils);
        $voluntario->donantes()->attach($request->donantes);
        $voluntario->hijos()->attach($request->hijos);

        return redirect()->route('voluntarios.index')->with('status', 'El voluntario fue creado con éxito.');
    }

    public function show(Voluntario $voluntario)
    {
        return view('voluntarios.show', [
            'voluntario' => $voluntario
        ]);
    }

    public function edit(Voluntario $voluntario)
    {
        $estados = Estado::all();
        $profesions = Profesion::all();
        $ocupacions = Ocupacion::all();
        $instruccions = Instruccion::all();
        $sanguineos = Sanguineo::all();
        $nacionalidads = Nacionalidad::pluck('nombre', 'id');
        $sexos = Sexo::pluck('nombre', 'id');
        $civils = Civil::pluck('nombre', 'id');
        $donantes = Donante::pluck('nombre', 'id');
        $hijos = Hijo::pluck('nombre', 'id');
        return view('voluntarios.edit', compact('estados', 'profesions', 'ocupacions', 'instruccions', 'sanguineos', 'nacionalidads', 'sexos', 'civils', 'donantes', 'hijos'), [
            'voluntario' => $voluntario
        ]);
    }

    public function update(SaveVoluntarioRequest $request, $id)
    {
        $voluntario = Voluntario::findOrFail($id);
        $voluntario->update( $request->validated() );
        $voluntario->nacionalidads()->sync($request->nacionalidads);
        $voluntario->sexos()->sync($request->sexos);
        $voluntario->civils()->sync($request->civils);
        $voluntario->donantes()->sync($request->donantes);
        $voluntario->hijos()->sync($request->hijos);

        return redirect()->route('voluntarios.show', $voluntario)->with('status', 'El voluntario fue actualizado con éxito.');
    }

    public function destroy(Voluntario $voluntario)
    {
        $voluntario->delete();

        return redirect()->route('voluntarios.index')->with('status', 'El voluntario fue eliminado con éxito.');
    }

    public function pdf($id)
    {
        $voluntarios = Voluntario::FindOrFail ($id);
        $pdf = PDF::loadView('pdf.voluntario', compact('voluntarios'));
        return $pdf->stream();
        // return $pdf->download('invoice.pdf');
    }
}
