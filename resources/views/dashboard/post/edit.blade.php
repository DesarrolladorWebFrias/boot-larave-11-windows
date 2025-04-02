@extends('dashboard.post.master')

@section('content') 

@include('dashboard.fragment._errors-form') 

         <form action="{{ route('post.update', $post->id )}}" method="post"> 

            @method('PATCH')

            @include('dashboard.post._form') 

                 </form>

@endsection                  