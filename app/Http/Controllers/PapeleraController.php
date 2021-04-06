<?php

namespace App\Http\Controllers;

use App\User;
use App\Voluntario;
use Illuminate\Http\Request;

class PapeleraController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth', 'roles:admin,'
        ]);
    }

    public function index()
    {
        $voluntarios = Voluntario::onlyTrashed()->get();

        return view( 'papeleras.voluntarios', compact('voluntarios') );
    }

    public function restore(Voluntario $voluntario, $id)
    {
        Voluntario::onlyTrashed()->where('id', $id )->restore();

        return redirect()->route('papeleras.index')->with('status', 'El Voluntario fue recuperado con éxito.');
    }

    public function force(Voluntario $voluntario, $id)
    {
        Voluntario::onlyTrashed()->where('id', $id )->forceDelete();

        return redirect()->route('papeleras.index')->with('status', 'El Voluntario fue eliminado permanentemente con éxito.');
    }
}
