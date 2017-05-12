<?php

namespace App\Http\Domain\Controllers;

use Illuminate\Http\Request;
use App\Http\Domain\Bases\Controller;

//Llamada al interface
use App\Http\Domain\Contracts\IPost;
use Auth;

class AuthController extends Controller
{
    /*
     * INYECCION DE DEPENDENCIAS
     */
    protected $IRepoPost;
    public function __construct(IPost $IRepoPost)
    {
        $this->IRepoPost = $IRepoPost;
    }

    /*
     * lOGEAR AL USUARIO
     */
    public function login(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ])) {
            // Si se logeo correctamente
            return redirect()->back();
        }
        return "Login incorrecto";
    }

    /*
     * CERRAR SESSION
     */
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
