@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-cookie-bite"></i> SnackS
@endsection

@section('card-appearance')
    <div class="product-container">
        @foreach ($data as $item)
            @if ($item->category === 4)
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
