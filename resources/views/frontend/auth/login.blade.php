@extends('frontend.components.layouts')

@section('title')
    User Login
@endsection   
@section('content')
    <div class="card mt-4"> 
        <h5 class="card-header">User Login Form</h5>
        <div class ="card-body">

            <!-- @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

            @if(session('message'))
                <div class="alart alert-{{session('type')}}">{{session('message')}}</div>
            @endif

            <form action="{{route('user.login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control @error ('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="email" placeholder="Enter your e-mail address">
                    @error('email') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error ('password') is-invalid @enderror" name="password" value="{{old('password')}}" id="password" placeholder="Enter your Password">
                    @error('password') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            
            </form>
        </div>
    
    </div>              
@endsection