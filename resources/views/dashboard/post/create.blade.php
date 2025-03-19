@extends('dashboard.post.master')

@section('content') 
                 <form action="{{ route('post.store')}}" method="post"> 

              @csrf

<label for="">Title</label>
<input type="text" name="title">

<label for="">Slug</label>
<input type="text" name="slug">

<label for="">content</label>
<textarea name="content"></textarea>

<label for="">Category</label>
<select name="category_id">


    @foreach ($categories as $title=>$id) //se separa el valor de la clave 
       <option value="{{$id}}">{{$title}}</option>   //como se manipula 
    @endforeach

</select>

<label for="">Descripcion</label>
<textarea name="descripcion"></textarea>

<label for="">Posted</label>
<select name="posted">
    <option value="yes">Yes</option>
    <option value="not">Not</option>
    
</select>


                  <button type="submit">Send</button>

                 </form>

@endsection                  