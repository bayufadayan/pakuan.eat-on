<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand admin-logo" href="#">admin page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resto Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Item Settings</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        My Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="fa-solid fa-right-from-bracket"></i> Log
                                    Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex admin-search" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
