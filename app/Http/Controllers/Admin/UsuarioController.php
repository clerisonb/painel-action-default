<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

	public function index(){
	    return view('sistema.dashboard', compact('title'));
	}

    public function login () {
        return view('auth.login');
    }

	public function logout(){
	    Auth::logout();
	    return redirect()->route('login');
    }

	public function autenticar(Request $request){
        $usuario = Usuario::where('email', $request->email)->first();
        if ($usuario){
            if (Hash::check($request->senha, $usuario->senha)){
                Auth::loginUsingId($usuario->id);
                return redirect()->route('admin.index');
            }
        }else{
            return 'usuario invalido';
        }

    }

}
