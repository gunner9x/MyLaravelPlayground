@extends('layouts.default')

@section('title')
<title>Bootstrap Simple Login Form</title>
@endsection

@section('content')
<div class="login-form">
    <form action="/hello-world" method="post">
        {{ csrf_field() }}
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <?php
            if(isset($failure)){
                echo $failure;
            }
            ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <a href="#" class="text-justify">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>

@endsection

