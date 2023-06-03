<div class="confirm-left-container">
    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Opsi Pesanan</h3>
        </div>
    
        <div class="confirm-sub-content">
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt1">
                <label for="order-opt1" class="label-confirm">Antar ke Meja</label>
            </div>
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt2">
                <label for="order-opt2">Tunggu dikasir</label>
            </div>
        </div>
    </div>
    
    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Pesanan Kamu</h3>
        </div>
    
        @for ($i = 0; $i < 3; $i++)
            <div class="confirm-sub-content" id="conf-order">
                <div class="fixed-order-detail">
                    <div class="fixed-order-detail-name">
                        Paket 15
                    </div>
                    <div class="fixed-order-detail-price">
                        Rp. 93.000
                    </div>
                    <div class="fixed-order-detail-notes">
                        notes: yang pedes
                    </div>
                </div>
                <div class="fixed-order-image">
                    <div id="img-layout"><img src="assets/confirm-order1.png" alt=""></div>
                    <div>Jumlah : 4</div>
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="confirm-right-container">
    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Opsi Pembayaran</h3>
        </div>

        <div class="confirm-sub-content">
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt3">
                <label for="order-opt3">Tunai</label>
            </div>
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt4">
                <label for="order-opt4">Debit/Kartu Kredit</label>
            </div>
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt5">
                <label for="order-opt5">Transfer Bank</label>
            </div>
            <div class="confirm-input-choice">
                <input type="radio" name="order-opt" id="order-opt6">
                <label for="order-opt6">Dana/OVO/GoPay/ShopeePay</label>
            </div>
        </div>
    </div>

    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Ringkasan Pembayaran</h3>
        </div>

        <div class="confirm-sub-content">
            <div class="order-journal">
                sds
            </div>
            <hr>
            <div class="subtotal-journal">
                10000
            </div>
            <div class="tax-journal">
                2000
            </div>
            <hr>
            <div class="total-journal">
                10sasa000
            </div>
        </div>
    </div>

    <div class="confirm-sub-container">
        <button type="submit" class="button-order-now">Pesan Sekarang</button>
    </div>
</div>
