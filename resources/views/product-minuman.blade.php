@extends('layouts.mainlayout')
<?php 
$title = "Minuman"
?>
@section('title-mainpage')
    <i class="fa-solid fa-mug-saucer"></i> Aneka Minuman
@endsection

@section('card-appearance')
    <div class="product-container">
        @foreach ($data as $item)
            @if ($item->category === 1)
                @include('components.card', [
                    'id' => $item->id,
                    'title' => $item->name,
                    'desc' => $item->description,
                    'price' => $item->price
                ])
            @endif
        @endforeach
    </div>
@endsection
