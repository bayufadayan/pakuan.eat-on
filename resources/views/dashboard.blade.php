@extends('layouts.mainlayout')

<?php 
$title = "Dashboard"
?>

@section('card-appearance')
    <div class="dashboardcard-container">
        @include('components.dashboardcard')
    </div>

    @if (session('success'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK"
            });
        </script>
    @endif
@endsection