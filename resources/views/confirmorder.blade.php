@extends('layouts.onlynavbar')

@section('content')
    <section class="cart-head">
        <div class="cart-header-text">
            <h1>Konfirmasi Pesanan</h1>
        </div>
    </section>

    <section class="confirm-box">
        @include('components.confirm-components')
    </section>
@endsection
