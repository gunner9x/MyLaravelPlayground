@extends('layouts.default')

@section('title')
    <title>Simple Dashboard</title>
@endsection

@section('content')
    <div class = "container">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/hello-world') }}">Home</a>
                @else
                    <a href="{{ url('/logintest') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class = "jumbotron">
            <h1 style="text-align: center">{{$hello_str}}</h1>
        </div>
    </div>

@endsection

