@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog posts</h3>
                    <table class="table table-striped">
                        @if (count($posts) > 0)
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> </td >
                                    <td>
                                        {!! Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right' ]) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>You have no post</p>
                        @endif

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
