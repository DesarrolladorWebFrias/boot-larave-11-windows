@csrf

<label for="">Title</label>
<input type="text" name="title"  placeholder="TITULO" value="{{ old('title', $post->title) }}" >

<label for="">Slug</label>
<input type="text" name="slug" placeholder="RUTA" value="{{ old('slug', $post->slug) }}" >


<label for="">content</label>
<textarea name="content" placeholder="ESCRIBA EL CONTENIDO" >{{ old ('content', $post->content) }}</textarea>

<label for="">Category</label>
<select name="category_id">


    @foreach ($categories as $title => $id) //se separa el valor de la clave 
       <option {{ old ('category_id', $post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{ $title }}</option>   //como se manipula 
    @endforeach

</select>

<label for="">Descripcion</label>
<textarea name="descripcion" placeholder="DESCRIPCION">{{old ('descripcion', $post->descripcion) }}</textarea>

<label for="">Posted</label>
<select name="posted">
    <option {{old ('posted', $post->posted) == 'not' ? 'selected' : ''}} value="not">Not</option>
    <option {{old ('posted', $post->posted) == 'yes' ? 'selected' : ''}} value="yes">Yes</option>   
</select>



@if (isset($task) && $task == 'edit')
      <label for="">Image</label>
      <input type="file" name="image" >
@endif



<button type="submit" >Send</button>

                 