@extends('layouts.onlynavbar')

@section('content')
    <section class="cart-head">
        <div class="cart-header-text">
            <h1>Pesanan Kamu</h1>
        </div>
        <div class="cart-header-button">
            <a href="/"><button class="tambah-pesanan"></button></a>
        </div>
    </section>

    <section>
        <div class="resto-name">
            <h3>Hoki Hoki Bentolani</h3>
        </div>
        <div class="cart-content">
            @for ($i = 0; $i < 5; $i++)
                <div class="resto-menu-container">
                    <div class="resto-menu-left">
                        <div class="resto-menu-name">
                            <input type="checkbox">
                            Paket 1 fdjeseahfjsdh fjsahdgfsjdghfvjsdag
                        </div>
                        <div class="cart-notes">
                            <div class="notes-icon">
                                <i class="fas fa-sticky-note"></i>
                                notes
                            </div>
                            <input type="text" placeholder="masukan note">
                        </div>
                    </div>

                    <div class="resto-menu-right">
                        <div class="item-count">
                            <i class="fa-solid fa-circle-minus"></i> 3 <i class="fa-solid fa-circle-plus"></i>
                        </div>
                        <div class="total-price">Rp. 93.000</div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    @for ($i = 0; $i < 10; $i++)
        <section>
            <div class="resto-name">
                <h3>Ramen Ubuyashiki</h3>
            </div>
            <div class="cart-content">
                <div class="resto-menu-container">
                    <div class="resto-menu-left">
                        <div class="resto-menu-name">
                            <input type="checkbox">
                            Paket Sosis
                        </div>
                        <div class="cart-notes">
                            <div class="notes-icon">
                                <i class="fas fa-sticky-note"></i>
                                notes
                            </div>
                            <input type="text" placeholder="masukan note">
                        </div>
                    </div>

                    <div class="resto-menu-right">
                        <div class="item-count">
                            <i class="fa-solid fa-circle-minus"></i> 3 <i class="fa-solid fa-circle-plus"></i>
                        </div>
                        <div class="total-price">Rp. 93.000</div>
                    </div>
                </div>
            </div>
        </section>
    @endfor

    <div class="cart-order-button">
        <a href="#">
            <button>Pesan</button>
        </a>
    </div>
@endsection
