<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\PutRequestRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        session(['key' => 'value']);
        $posts = Post::paginate(2);

        return view('dashboard/post/index', compact('posts'));


        // $category = Category::find(1);

        //dd($category->posts[0]->title);
        //no podemos obtener el objeto 

        //___________________________________________________________
        //METODO DE ELIMINAR 
        //PARA INDICAR LA VISTA 
        //control shif tecla hacia abajo para rellenar

        // $post = Post::find(3);
        // $post->delete();



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

        //CREAMOS UNA VARIABLE LLAMADA CATEGORIA QUE SEA IGUAL A CATEGOY Y QUE ME LAS PASE TODAS POR LA URL
        // $categories = Category::get(); // es muy similar a la funcion de find 

        $categories = Category::pluck('id', 'title'); // es otro metodo y se le pasa parametos que pasa el id de la categoria y su titulo



        $post = new Post(); //creamos un nuevo objeto de tipo post y le pasamos los datos que nos llegan por el request
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Post::create($request->validated());  //funcion simplificada 

        return to_route('post.index')->with('status', 'Post creado con exito'); //SE REALIZA UNA REDIRECCION

        //DOS FORMS DE ACCDER MEDIANTE LA VARIABLE $REQUEST O LA FUNCION REQUEST 
        //dd($request->all());

        // $request->validate([
        //     'title'  =>  'required|min:5|min:500',
        //     'slug'   =>  'required|min:5!min:500',
        //     'content' =>  'required|min:7',
        //     'category_id' => 'required|integer',
        //     'descripcion' => 'required|min:7',
        //     'posted'    =>  'required'

        // ]);

        // echo 'not';



        //Post::create(

        //SE TRABAJARAN CON VARIABLES DEL FORMULARIO 

        //         [
        //             'title' => $request->all()['title'],
        //             'slug' => $request->all()['slug'],
        //             'descripcion' => $request->all()['descripcion'],
        //             'category_id' => $request->all()['category_id'],
        //             'content' => $request->all()['content'],
        //             //'image' => $request->all()['image'],
        //             'posted' => $request->all()['posted'],

        //         ]
        //     );
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', ['post' => $post]);
        //return view('dashboard/post/show', ['post'=> $post]); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {

        $data = $request->validated();
        //dd($request->image);
        //validar si el usuario subio una imagen
        if (isset($data['image'])) {
            $data['image'] = $filename = time() . '.' . $data['image']->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
        }

        //image


        $post->update($data);
        return to_route('post.index')->with('status', 'Post Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post Eliminado correctamente');
    }
}
