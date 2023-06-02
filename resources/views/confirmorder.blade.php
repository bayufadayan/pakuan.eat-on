@extends('layouts.onlynavbar')

@section('content')
    <section class="cart-head">
        <div class="cart-header-text">
            <h1>Konfirmasi Pesanan</h1>
        </div>
    </section>

    <section>
        <div class="confirm-container">
            <div class="confirm-left-container">
                <div class="order-option">
                    <div class="order-option-sub1">
                        <h3>Opsi Pesanan</h3>
                    </div>
                    <div class="order-option-sub2">
                        <input type="radio" name="order-opt" id="order-opt1">
                        <label for="order-opt1">Antar ke Meja</label>
                        <input type="radio" name="order-opt" id="order-opt2">
                        <label for="order-opt2">Tunggudikasir</label>
                    </div>
                </div>

                <div class="fixed-order">
                    <div class="fixed-order-sub1">
                        <h3>Pesanan Kamu</h3>
                    </div>
                    <div class="fixed-order-sub2">
                        <div class="fixed-order-detail">
                            <div class="fixed-order-detail-name">
                                Paket 15
                            </div>
                            <div class="fixed-order-detail-price">
                                Rp. 93.000
                            </div>
                        </div>
                        <div class="fixed-order-image">
                            <img src="assets/confirm-order1.png" alt="">
                            <span>Qty : 4</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="confirm-right-container">

                <div class="pay-option">
                    <div class="pay-option-sub1">
                        <h3>Opsi Pembayaran</h3>
                    </div>
                    <div class="pay-option-sub2">
                        <input type="radio" name="pay-opt" id="pay-opt1">
                        <label for="pay-opt1">Tunai</label>
                        <input type="radio" name="pay-opt" id="pay-opt2">
                        <label for="pay-opt2">Debit/Kartu Kredit</label>
                        <input type="radio" name="pay-opt" id="pay-opt3">
                        <label for="pay-opt3">Transfer Bank</label>
                        <input type="radio" name="pay-opt" id="pay-opt4">
                        <label for="pay-opt4">Dana/OVO/GoPay/ShopeePay/QRIS</label>
                    </div>
                </div>

                <div class="transaction-journal">
                    <div class="transaction-journal-header">
                        <h3>Ringkasan Pembayaran</h3>
                    </div>
                    <div class="transaction-journal-content">
                        
                    </div>
                </div>

                <a href="#">
                    <button>
                        Pesan Sekarang
                    </button>
                </a>
            </div>
        </div>
    </section>
@endsection
