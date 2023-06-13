@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-utensils"></i> Aneka Makanan
@endsection

@section('card-appearance')
    <div class="product-container">
        @foreach ($data as $item)
            @if ($item->category === 2)
                @include('components.card', [
                    'title' => $item->name,
                    'desc' => $item->description,
                    'price' => $item->price,
                ])
            @endif
        @endforeach
    </div>
@endsection
