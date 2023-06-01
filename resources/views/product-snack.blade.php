@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-cookie-bite"></i> Snack
@endsection

@section('card-appearance')
    <div class="product-container">
        @for ($i = 0; $i < 10; $i++)
            @include('components.card')
        @endfor
    </div>
@endsection
