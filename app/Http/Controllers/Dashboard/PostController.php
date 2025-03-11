<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //___________________________________________________________
        //METODO DE ELIMINAR 
        //PARA INDICAR LA VISTA 
        //control shif tecla hacia abajo para rellenar

        $post = Post::find(3);
        $post->delete();



        //____________________________________________________________
        //_____________________________________________________________
        //METODO DE ACTUALIZAR 

        // //SELECT * FROM WHERE  ID=1
        // $post = Post::find(1); //funcion de busqueda por medio del ORM ELOQUEN

        // //dd($post);

        // $post->update(

        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug',
        //         'descripcion' => 'test descripcion',
        //         'image' => 'test image',


        //     ]
        // );

        //dd($post->title);  // funcion de ayuda para ver las propiedades del objeto
        //__________________________________________________________________________
        return 'index';
    }

    //______________________________________________________________________________
    //METODO DE CREAR 

    // Post::create(

    //     [
    //         'title' => 'test title',
    //         'slug' => 'test slug',
    //         'descripcion' => 'test descripcion',
    //         'category_id' => 1,
    //         'content' => 'test content',
    //         'image' => 'test image',
    //         'posted' => 'not',

    //     ]
    // );
    //________________________________________________________________________________

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
