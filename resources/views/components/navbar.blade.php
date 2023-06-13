<nav class="mynav">
    <div class="nav-logo">
        <span>
            <img src="assets/Logobar.png" alt="logo-pakuan-eaton" class="logo-image">
        </span>
        <i class="fa-solid fa-angles-right" id="btn"></i>
    </div>

    <div class="nav-menu">
        <ul class="list-navbar">
            @if (auth()->user()->role == 'ADMIN')
                <li><a href="/admin">
                        <span class="nav-icon" style="color: brown">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <span class="nav-text" style="color: brown">
                            Admin Area
                        </span>
                    </a></li>
            @endif
            <li><a href="/searchpage">
                    <span class="nav-icon">
                        <i class="fa-solid fa-magnifying-glass" id="navsrch"></i>
                    </span>
                    <span class="nav-text">
                        Search
                    </span>
                </a></li>
            <li><a href="/">
                    <span class="nav-icon">
                        <i class="fa-solid fa-house"></i>
                    </span>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a></li>
            <li><a href="/favorite">
                    <span class="nav-icon">
                        <i class="fa-solid fa-heart"></i>
                    </span>
                    <span class="nav-text">
                        Favorit
                    </span>
                </a></li>
            <li><a href="/cart">
                    <span class="nav-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </span>
                    <span class="nav-text">
                        Cart
                    </span>
                </a></li>

        </ul>
    </div>

    <div class="nav-bottom">
        <ul class="list-navbar">
            @if (auth()->user()->role == 'USER')
                <li><a href="/confirm">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-text">
                            My Account
                        </span>
                    </a></li>
            @endif

            <li><a href="#">
                    <span class="nav-icon">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                    </span>
                    <span class="nav-text">
                        About Us
                    </span>
                </a></li>
            <li class="mylogout">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-icon mylogout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <div class="nav-text text-logout">
                            Log Out
                        </div>
                    </button>
                </form>

                {{-- <a href="/login">
                    <span class="nav-icon">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </span>
                    <span class="nav-text">
                        Log Out
                    </span>
                </a> --}}
            </li>

        </ul>
    </div>
</nav>
