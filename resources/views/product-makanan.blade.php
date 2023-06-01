@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-utensils"></i> Aneka Makanan
@endsection

@section('card-appearance')
    <div class="product-container">
        @for ($i = 0; $i < 10; $i++)
            @include('components.card')
        @endfor
    </div>
@endsection
