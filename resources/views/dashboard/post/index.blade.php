@extends('dashboard.post.master')

@section('content') 

<a href="{{ route('post.create') }}"> CREAR</a>

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
            POSTED
        </td>
        <td>
            CATEGORIA
        </td>
        <td>
            OPCIONES
        </td>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $p)
    <tr>
        <td>
            {{$p->id}} 
         </td>
        <td>
           {{$p->title}} 
        </td>
    
    
        <td>
           {{$p->posted}} 
        </td>
    
    
        <td>
           {{$p->category->title}} 
        </td>
        <td>
            <a href="{{ route('post.edit', $p->id) }}"> EDITAR</a>
            <a href="{{ route('post.show', $p->id) }}"> DETALLES</a>
        </td>
    </tr>
        
    @endforeach
    </tbody>
 </table>

{{$posts->links()}}

@endsection                  