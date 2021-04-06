<?php

namespace App\Http\Controllers;

use App\User;
use App\Censo;
use Illuminate\Http\Request;

class PapeleracensoController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth', 'roles:admin,'
        ]);
    }

    public function index()
    {
        $censos = Censo::onlyTrashed()->get();

        return view( 'papeleras.censos', compact('censos') );
    }

    public function restore(Censo $censo, $id)
    {
        Censo::onlyTrashed()->where('id', $id )->restore();

        return redirect()->route('papelerascenso.index')->with('status', 'El Censo fue recuperado con éxito.');
    }

    public function force(Censo $censo, $id)
    {
        Censo::onlyTrashed()->where('id', $id )->forceDelete();

        return redirect()->route('papelerascenso.index')->with('status', 'El Censo fue eliminado permanentemente con éxito.');
    }
}
