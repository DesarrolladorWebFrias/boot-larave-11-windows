@csrf

<label for="">Title</label>
<input type="text" name="title"  placeholder="TITULO" value="{{ old('title', $category->title) }}" >

<label for="">Slug</label>
<input type="text" name="slug" placeholder="RUTA" value="{{ old('slug', $category->slug) }}" >





<button type="submit" >Send</button>

                 