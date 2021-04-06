<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUsuarioRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth', 'roles:admin,'
        ]);
    }

    public function index()
    {
        $usuarios = User::where( 'id', '!=', auth()->id() )->get();

        return view( 'usuarios.index', compact('usuarios') );
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('usuarios.create', compact('roles'), [
            'usuario' => new User
        ]);
    }

    public function store(SaveUsuarioRequest $request)
    {
        $usuario = User::create( $request->validated() );
        $usuario->roles()->attach($request->roles);

        return redirect()->route('usuarios.index')->with('status', 'El Usuario fue creado con éxito.');
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        $roles = Role::pluck('name', 'id');

        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function update(SaveUsuarioRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->update($request->all());
        $usuario->roles()->sync($request->roles);

        return redirect()->route('usuarios.index')->with('status', 'Usuario actualizado');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
