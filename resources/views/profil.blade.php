<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Development Features</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="/assets/fav.ico" type="image/x-icon">
</head>

<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Hai {{ auth()->user()->username }}",
            text: "Fitur ini masih dalam tahap pengembangan. Jika terjadi kesalahan pada informasi pribadimu, silakan hubungi admin",
            icon: "info",
        }).then(function() {
            window.location.href = "/";
        });
    </script>
</body>

</html>
