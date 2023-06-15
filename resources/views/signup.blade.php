@extends('layouts.registlayout')
<?php 
$title = "Sign Up"
?>
@section('login-text')
    <p id="signup-text1">START FOR FREE</p>
    <h1 id="signup-text2">Sign Up to PAKUAN EAT ON.</h1>
@endsection

@section('login-mainsection')
    <div class="login-illust">
        @include('components.registerillust')
    </div>
    <div class="login-form">
        @include('components.registerform')
    </div>
@endsection
