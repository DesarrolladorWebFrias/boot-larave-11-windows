<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'descripcion', 'content', 'image', 'category_id'];


    // ESE CREA UNA FUNCION PARA RETORNAR EL TIPO DE RELACION QUE VA A SOPORTAR 
    // LAS RELACIONES SE CREAN MEDIANTE FUNCIONES 
    // EL METODO ES UNA CATEGORIA PERTENECE A UN POST

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
