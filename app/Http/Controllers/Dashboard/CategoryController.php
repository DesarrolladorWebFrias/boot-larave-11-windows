<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::paginate(2);
        return view('dashboard/category/index', compact('categories'));
        return 'index';
    }

   
    public function create()

    {
        $category = new Category(); //creamos un nuevo objeto de tipo category y le pasamos los datos que nos llegan por el request
        return view('dashboard.category.create', compact( 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Category::create($request->validated());  //funcion simplificada 
        return to_route('category.index')->with('status', 'Categoría creada con éxito'); //SE REALIZA UNA REDIRECCION
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('dashboard.category.show', ['category' => $category]);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact( 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('category.index')->with('status', 'Categoría Actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index')->with('status', 'Categoría Eliminada con éxito');
    }
}
