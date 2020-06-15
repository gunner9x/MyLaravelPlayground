@extends('layouts.default')

@section('title')
    <title>Simple Dashboard</title>
@endsection

@section('content')
    <div class = "container">
        <div class = "jumbotron">
            <h1>{{ Auth::user()->name }}{{$hello_str}}</h1>
        </div>
    </div>

@endsection

