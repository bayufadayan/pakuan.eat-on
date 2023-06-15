<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Pakuan Eat On</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="shortcut icon" href="/assets/3135715.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('components.headerfirst')

    <div class="login-text">
        @yield('login-text')
    </div>

    <section class="login-mainsection">
        @yield('login-mainsection')
    </section>

    {{-- <section class="login-aboutus">
        <a href="#"><button>About Us!</button></a>
    </section> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>