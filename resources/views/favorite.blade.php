@extends('layouts.mainlayout')

@section('title-mainpage')
    <i class="fa-solid fa-heart"></i> Makanan yang disukai
@endsection

@section('card-appearance')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Fitur masih dalam tahap pengembangan!",
            text: "Klik OK untuk kembali ke Dashboard",
            icon: "info",
        }).then(function() {
            window.location.href = "/";
        });
    </script>
@endsection
