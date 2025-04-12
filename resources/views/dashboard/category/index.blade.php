@extends('dashboard.category.master')

@section('content') 

<a href="{{ route('category.create') }}"> CREAR</a>

 <table>
    <thead>
        <tr>

        <td>
            ID
        </td>

        <td>
            TITULO
        </td>
        <td>
            OPCIONES
        </td>
        </tr>
    </thead>
    <tbody>
    @foreach ($categories as $c)
    <tr>
        <td>
            {{$c->id}} 
         </td>
        <td>
           {{$c->title}} 
        </td>    
        <td>
            <a href="{{ route('category.edit', $c->id) }}"> EDITAR</a>
            <a href="{{ route('category.show', $c->id) }}"> DETALLES</a>
            <a href="{{ route('category.show', $c->id) }}"> DETALLES</a>
            
            <form action="{{ route('category.destroy', $c->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">ELIMINAR</button>
            </form>
        </td>
    </tr>
        
    @endforeach
    </tbody>
 </table>

{{$categories->links()}}

@endsection                  