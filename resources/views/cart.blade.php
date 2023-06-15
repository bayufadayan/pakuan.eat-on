@extends('layouts.onlynavbar')
<?php 
$title = "Cart"
?>
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
            <h3>Hoki Hoki Bento</h3>
        </div>
        <div class="cart-content">
            <?php
            $judul_menu = [
                'Paket 1 - Ayam Teriyaki dengan Nasi Garlic',
                'Paket 15 - Onigiri isi oncom pedas',
                'Paket Premium - Sushi saus padang'];
            
            $harga = [
                '16.000',
                '10.000',
                '40.000'];
            ?>
            @for ($i = 0; $i < 3; $i++)
                <div class="resto-menu-container">
                    <div class="resto-menu-left">
                        <div class="resto-menu-name">
                            <input type="checkbox">
                            {{ $judul_menu[$i] }}
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
                        <div class="total-price">{{ $harga[$i] }}</div>
                    </div>
                </div>
            @endfor
        </div>
        {{-- --------------------------------------- --}}
        <div class="resto-name">
            <h3>Nasi Bakar Mom Dira</h3>
        </div>
        <div class="cart-content">
            <?php
            $judul_menu = ['Nasi Bakar Ayam',
            'Nasi Bakar Ikan Teri',
            'Nasi Bakar Cumi',
            'Nasi Bakar Bumbu Somay'];
            
            $harga = ['20.000', '15.000', '15.000', '12.000'];
            ?>
            @for ($i = 0; $i < 4; $i++)
                <div class="resto-menu-container">
                    <div class="resto-menu-left">
                        <div class="resto-menu-name">
                            <input type="checkbox">
                            {{ $judul_menu[$i] }}
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
                        <div class="total-price">{{ $harga[$i] }}</div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <section>
        <br><br><br><br><br>
    </section>
    <div class="cart-order-button">
        <a href="/cart">
            <button>Pesan</button>
        </a>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Fitur masih dalam tahap pengembangan!",
            text: "Klik Lanjut untuk melihat contoh UI",
            icon: "info",
            button: "Lanjut"
        });
    </script>
@endsection
