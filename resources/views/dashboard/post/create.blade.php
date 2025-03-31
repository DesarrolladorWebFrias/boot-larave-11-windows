@extends('dashboard.post.master')

@section('content') 

@include('dashboard.fragment._errors-form') 

         <form action="{{ route('post.store')}}" method="post"> 

              @csrf

<label for="">Title</label>
<input type="text" name="title"  placeholder="TITULO">

<label for="">Slug</label>
<input type="text" name="slug" placeholder="RUTA">

<label for="">content</label>
<textarea name="content" placeholder="ESCRIBA EL CONTENIDO"></textarea>

<label for="">Category</label>
<select name="category_id">


    @foreach ($categories as $title=>$id) //se separa el valor de la clave 
       <option value="{{$id}}">{{$title}}</option>   //como se manipula 
    @endforeach

</select>

<label for="">Descripcion</label>
<textarea name="descripcion" placeholder="DESCRIPCION"></textarea>

<label for="">Posted</label>
<select name="posted">
    <option value="not">Not</option>
    <option value="yes">Yes</option>
   
</select>


                  <button type="submit">Send</button>

                 </form>

@endsection                  