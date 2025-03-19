@extends('dashboard.post.master')

@section('content')
                 <form action="" method="post">

<label for="">Title</label>
<input type="text" name="title">

<label for="">Slug</label>
<input type="text" name="slug">

<label for="">content</label>
<textarea name="content"></textarea>

<label for="">Categoria</label>
<select name="category_id">

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