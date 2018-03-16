@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Laravel</h1>
        <p>This is an application from the "Laravel from scratch" Youtube Series.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
