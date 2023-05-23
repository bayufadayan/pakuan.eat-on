<section class="productpage-container">
    <h2 class="title-productpage">
        <i>Icon</i> Aneka Makanan
    </h2>
    <!-- batas -->
    <div class="product-container">
        <!-- @include('components.card') -->
        @for($i = 0; $i < 10; $i++)
            @include('components.card')
        @endfor
    </div>
</section>