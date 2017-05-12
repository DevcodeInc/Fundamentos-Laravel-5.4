<?php

namespace App\Http\Domain\Controllers;

use Illuminate\Http\Request;
use App\Http\Domain\Bases\Controller;

//Llamada al interface
use App\Http\Domain\Contracts\IPost;

class PostController extends Controller
{
    /*
     * INYECCION DE DEPENDENCIAS
     */
    protected $IRepoPost;
    public function __construct(IPost $IRepoPost)
    {
        $this->IRepoPost = $IRepoPost;
        $this->middleware('auth')->only(['store', 'register']);

    }

    /*
     * Renderiza el landing con los posts
     */
    public function index(){
        $posts = $this->IRepoPost->all();
        return view('posts.index', compact('posts'));
    }

    /*
     * Detalle del post
     */
    public function detail($slug){
        $post = $this->IRepoPost->detail($slug);
        dd($post);
    }
    /**
     *METODO PARA MOSTRAR EL FORMULARIO DE GUARDAR
     */
    public function register(){
        return view('posts.register');
    }
    /**
     * METODO PARA GUARDAR
     */
    public function store(Request $request){
        $this->IRepoPost->store($request->all());
        return redirect()->route('index-post');
    }
}
