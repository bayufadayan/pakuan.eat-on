@extends('layouts.onlynavbar')

@section('content')
    <section class="cart-head">
        <div class="cart-header-text">
            <h1>Konfirmasi Pesanan</h1>
        </div>
    </section>

    <form action="{{ route('transaction.make', $item->id) }}" method="post" class="confirm-box">
        @csrf
        @include('components.confirm-components')
    </form>
@endsection
