<div class="product-card">
    <img src="assets/product.png" alt="gtau ah">
    <div class="card-text">
        <h3>{{ $title }}</h3>
        <p>{{ $desc }}</p>
    </div>
    <div class="card-pricerate">
        <div class="price">
            {{ $price }}
        </div>
        <div class="rate">
            <i class="fa-solid fa-star"></i> 5
        </div>
    </div>
    <div class="card-transaction">
        <a href="/transaction/{{ $id }}"
            class="order text-decoration-none order d-flex justify-content-center hoverpesan">
            Pesan
        </a>
        <div class="card-wa">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="card-bag">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
</div>
