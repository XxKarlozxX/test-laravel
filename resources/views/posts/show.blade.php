@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="well">
        <h3>{{$post->title}} </h3>
        <p>{{$post->body}} </p>
    </div>
@endsection