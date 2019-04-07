@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if (Auth::guest()) 
            <h1>{{$title}}</h1>
        @else 
            <h1>Welcome {{Auth::user()->name}}</h1>
        @endif
        <p>You can write your post on any topics or can read the blogs that posted by others </p>
        @if (Auth::guest())  
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
        @endif
    </div>
@endsection
