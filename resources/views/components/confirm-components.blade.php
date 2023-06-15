<div class="confirm-left-container">
    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Opsi Pesanan</h3>
            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
        </div>

        <div class="confirm-sub-content">
            <div class="confirm-input-choice @error('order_option') is-invalid @enderror">
                <input type="radio" name="order_option" id="order-opt1" value="Antar ke Meja"
                    @if (old('order_option') === 'Antar ke Meja') checked @endif>
                <label for="order-opt1" class="label-confirm">Antar ke Meja</label>
            </div>
            <div class="confirm-input-choice @error('order_option') is-invalid @enderror">
                <input type="radio" name="order_option" id="order-opt2" value="Tunggu dikasir"
                    @if (old('order_option') === 'Tunggu dikasir') checked @endif>
                <label for="order-opt2">Tunggu dikasir</label>
            </div>
            @error('order_option')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror

        </div>
    </div>

    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Pesanan Kamu</h3>
        </div>
        <div class="confirm-sub-content" id="conf-order">
            <div class="fixed-order-detail">
                <div class="fixed-order-detail-name">
                    {{ $item->name }}
                </div>
                <div class="fixed-order-detail-price">
                    Rp. {{ $item->price }}
                </div>
                <input type="hidden" name="id_item" value="{{ $item->id }}">
                <input type="text" id="notes" class="fixed-order-detail-notes form-control" name="notes"
                    placeholder="notes: ">
                {{-- <div class="fixed-order-detail-notes">
                    notes: yang pedes
                </div> --}}
            </div>
            <div class="fixed-order-image">
                <div id="img-layout"><img src="/assets/confirm-order1.png" alt=""></div>
                <div>Jumlah : 1</div>
            </div>
        </div>
    </div>
</div>

<div class="confirm-right-container">
    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Opsi Pembayaran</h3>
        </div>

        <div class="confirm-sub-content">
            <div class="confirm-input-choice @error('payment_option') is-invalid @enderror">
                <input type="radio" name="payment_option" id="order-opt3" value="Tunai"
                    @if (old('payment_option') === 'Tunai') checked @endif>
                <label for="order-opt3">Tunai</label>
            </div>
            <div class="confirm-input-choice @error('payment_option') is-invalid @enderror">
                <input type="radio" name="payment_option" id="order-opt4" value="Debit/Kartu Kredit"
                    @if (old('payment_option') === 'Debit/Kartu Kredit') checked @endif>
                <label for="order-opt4">Debit/Kartu Kredit</label>
            </div>
            <div class="confirm-input-choice @error('payment_option') is-invalid @enderror">
                <input type="radio" name="payment_option" id="order-opt5" value="Transfer Bank"
                    @if (old('payment_option') === 'Transfer Bank') checked @endif>
                <label for="order-opt5">Transfer Bank</label>
            </div>
            <div class="confirm-input-choice @error('payment_option') is-invalid @enderror">
                <input type="radio" name="payment_option" id="order-opt6" value="Dana/OVO/GoPay/ShopeePay"
                    @if (old('payment_option') === 'Dana/OVO/GoPay/ShopeePay') checked @endif>
                <label for="order-opt6">Dana/OVO/GoPay/ShopeePay</label>
            </div>
            @error('payment_option')
            <div class="invalid-feedback" style="text-align:right">
                {{ $message }}
            </div>
        @enderror
        </div>
    </div>

    <div class="confirm-sub-container">
        <div class="confirm-sub-header">
            <h3>Ringkasan Pembayaran</h3>
        </div>

        <div class="confirm-sub-content">
            <div class="order-journal">
                <strong>A.N {{ auth()->user()->username }}</strong>
            </div>
            <hr>
            <div class="subtotal-journal">
                {{ $item->name }} <b>x1</b>
            </div>
            <div class="tax-journal">
                <?php $tax = 100; ?>
                Tax : Rp. {{ $tax }}
            </div>
            <hr>
            <div class="total-journal text-end fs-4">
                <?php $total = $item->price + $tax; ?>
                <strong>Total: Rp {{ number_format($total, 0, ',', '.') }}</strong>
                <input type="hidden" name="total" value="{{ $total }}">
            </div>
        </div>
    </div>

    <div class="confirm-sub-container">
        <button type="submit" class="button-order-now">Pesan Sekarang</button>
    </div>
</div>
