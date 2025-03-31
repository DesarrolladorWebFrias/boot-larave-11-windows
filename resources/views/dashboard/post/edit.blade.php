@extends('dashboard.post.master')

@section('content') 

@include('dashboard.fragment._errors-form') 

         <form action="{{ route('post.update', $post->id )}}" method="post"> 

            @method('PATCH')

              @csrf

<label for="">Title</label>
<input type="text" name="title"  placeholder="TITULO" value="{{ $post->title }}" >

<label for="">Slug</label>
<input type="text" name="slug" placeholder="RUTA"value="{{ $post->slug }}" >


<label for="">content</label>
<textarea name="content" placeholder="ESCRIBA EL CONTENIDO" >{{$post->content}}</textarea>

<label for="">Category</label>
<select name="category_id">


    @foreach ($categories as $title=>$id) //se separa el valor de la clave 
       <option {{$post->category->id == $id ? 'selected' : ''}}value="{{$id}}">{{$title}}</option>   //como se manipula 
    @endforeach

</select>

<label for="">Descripcion</label>
<textarea name="descripcion" placeholder="DESCRIPCION">{{$post->content}}</textarea>

<label for="">Posted</label>
<select name="posted">
    <option {{$post->posted == 'not' ? 'selected' : ''}} value="not">Not</option>
    <option {{$post->posted == 'yes' ? 'selected' : ''}} value="yes">Yes</option>
   
</select>


                  <button type="submit">Send</button>

                 </form>

@endsection                  