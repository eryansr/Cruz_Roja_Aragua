<?php

namespace App\Http\Controllers;

use App\Historia;
use App\Http\Requests\SaveHistoriaRequest;
use App\Sanguineo;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('historias.index', [
            'historias' => Historia::latest()->paginate()
        ]);
    }


    public function create()
    {
        $sanguineos = Sanguineo::all();
        return view('historias.create', compact('sanguineos'), [
            'historia' => new Historia
        ]);
    }


    public function store(SaveHistoriaRequest $request)
    {
        $historia = Historia::create( $request->validated() );

        return redirect()->route('historias.index')->with('status', 'La historia fue guardado con éxito.');
    }


    public function show(Historia $historia)
    {
        return view('historias.show', [
            'historia' => $historia
        ]);
    }


    public function edit(Historia $historia)
    {
        $sanguineos = Sanguineo::all();

        return view('historias.edit', compact('sanguineos'), [
            'historia' => $historia
        ]);
    }


    public function update(Historia $historia, SaveHistoriaRequest $request)
    {
        $historia->update( $request->validated() );

        return redirect()->route('historias.show', $historia)->with('status', 'La historia fue actualizado con éxito.');
    }


    public function destroy(Historia $historia)
    {
        $historia->delete();

        return redirect()->route('historias.index');
    }
}
