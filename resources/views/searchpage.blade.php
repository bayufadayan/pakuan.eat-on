@extends('layouts.onlynavbar')

<?php 
$title = "Search"
?>

@section('content')
    @include('components.searchbar')

    <div class="search-history">
        <div class="search-history-head">
            <h3>Hasil Pencarian Kamu</h3>
            <i class="fa-sharp fa-solid fa-trash"></i>
        </div>

        <div class="my-search-history">
            <div class="search-history-box">
                Fitur history searching belum tersedia
            </div>
        </div>
        <div>
            <hr>
            <p class="fw-bold fs-5 ps-2">All items:</p>
        </div>
        <div class="product-container">
            @foreach ($data as $item)
                @include('components.card', [
                    'id' => $item->id,
                    'title' => $item->name,
                    'desc' => $item->description,
                    'price' => $item->price,
                ])
            @endforeach
        </div>
        @if (!empty($searchNotFound))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                {{ $searchNotFound }}
                <a href="/searchpage"><button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button></a>
            </div>
        @endif
        {{ $data->links() }}
        <div>
            <hr>
        </div>
    </div>
@endsection
