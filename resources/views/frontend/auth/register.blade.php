@extends('frontend.components.layouts')

@section('title')
    User Registration
@endsection   
@section('content')
    <div class="card mt-4"> 
        <h5 class="card-header">User Registration Form</h5>
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

            <form action="{{route('user.registration')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="name" placeholder="Enter your name">
                    @error('name') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>
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
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <label for="photo">Profile photo</label>
                    <input type="file" name="photo" id="photo">
                    @error('photo') <span class="text-danger font-italic">{{$message}}</span> @enderror
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Registration</button>
                </div>
            
            </form>
        </div>
    
    </div>              
@endsection