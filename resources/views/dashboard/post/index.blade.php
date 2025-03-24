@extends('dashboard.post.master')

@section('content') 
 <table>
    <thead>
        <tr>
            ID
        </tr>

        <tr>
            TITULO
        </tr>
        <tr>
            POSTED
        </tr>
        <tr>
            CATEGORIA
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
    </tr>
        
    @endforeach
    </tbody>
 </table>

{{$posts->links()}}

@endsection                  