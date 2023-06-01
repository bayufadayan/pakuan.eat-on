@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-heart"></i> Makanan yang disukai
@endsection

@section('card-appearance')
    <div class="product-container">
        @for ($i = 0; $i < 10; $i++)
            @include('components.card')
        @endfor
    </div>
@endsection
