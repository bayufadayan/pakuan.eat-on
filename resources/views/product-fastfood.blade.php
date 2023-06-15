@extends('layouts.mainlayout')
<?php 
$title = "Fast Food"
?>
@section('title-mainpage')
    <i class="fa-solid fa-burger"></i> Fast Food
@endsection

@section('card-appearance')
    <div class="product-container">
        @foreach ($data as $item)
            @if ($item->category === 3)
                @include('components.card', [
                    'id' => $item->id,
                    'title' => $item->name,
                    'desc' => $item->description,
                    'price' => $item->price,
                ])
            @endif
        @endforeach
    </div>
@endsection
