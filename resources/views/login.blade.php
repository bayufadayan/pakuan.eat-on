@extends('layouts.registlayout')
<?php 
$title = "Login"
?>
@section('login-text')
    <h1>Welcome Back,</h1>
    <p>Login now to continue</p>
@endsection

@section('login-mainsection')
    <div class="login-illust">
        @include('components.loginillust')
    </div>
    <div class="login-form">
        @include('components.loginform')
    </div>
@endsection
