@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="admin-page-title px-5 pt-5 pb-4">
        <p class="h3"><i class="fa-solid fa-user ps-5 pe-4"></i>Users Settings</p>
    </div>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/admin/user-settings/add-user"><button type="button" class="btn btn-success">
                + Add New User</button></a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomer = 1;
                    @endphp
                    @foreach ($data as $user)
                        <tr>
                            <th scope="row">{{ $nomer++ }}</th>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="/admin/user-settings/edit-user/{{ $user->id }}"><button type="button"
                                        class="btn btn-warning"><i class="fa-solid fa-pen pe-2"></i>Edit</button></a>
                                <a href="#"><button type="button" class="btn btn-danger delete-btn"
                                        data-id="{{ $user->id }}" data-username="{{ $user->username }}"><i
                                            class="fa-solid fa-trash pe-2"></i>Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
@section('delete-alert')
    <script>
        let delete_btns = document.querySelectorAll('.delete-btn');
        delete_btns.forEach(function(btn) {
            btn.onclick = function(event) {
                event.preventDefault();
                let dataId = btn.getAttribute('data-id');
                let dataUsername = btn.getAttribute('data-username');
                swal({
                        title: "Konfirmasi",
                        text: "Data dengan id " + dataId + " dan username " + dataUsername +
                            " akan dihapus secara permanen.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "user-settings/delete-user/" + dataId + ""
                            swal("Berhasil!", "Data dengan ID " + dataId + " dan username " + dataUsername +
                                " telah berhasil dihapus.", {
                                    icon: "success",
                                });
                        } else {
                            swal("Dibatalkan", "Penghapusan data dengan ID " + dataId + " dan username " +
                                dataUsername + " telah dibatalkan.", {
                                    icon: "info",
                                });
                        }
                    });
            };
        });
    </script>
@endsection
