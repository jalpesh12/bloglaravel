@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>You can write your post on any topics or can read the blogs</p>
        @if (Auth::guest())  
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
        @endif
    </div>
@endsection
