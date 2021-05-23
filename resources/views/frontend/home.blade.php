@extends('frontend.components.layouts')

@section('title')
    Blog Home
@endsection   
@section('content')
    
    <h1 class="my-4">Home Page</h1>
                    
     <x-single-post post-title="This is our first post">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</x-single-post>
     <x-single-post post-title="This is our second post"></x-single-post>
          
                
@endsection