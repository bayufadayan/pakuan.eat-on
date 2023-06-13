@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="admin-page-title px-5 pt-5 pb-4">
        <a href="/admin/resto-settings" style="color: black; text-decoration:none">
            <p class="h3"><i class="fa-solid fa-utensils ps-5 pe-4"></i>Resto Settings</p>
        </a>
    </div>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/admin/resto-settings/add-resto"><button type="button" class="btn btn-success">
                + Add New Resto</button></a>
        <div class="row g-3 align-items-center mt-1">
            <div class="col-auto">
                <form action="/admin/resto-settings" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-labelledby="passwordHelpInline">
                </form>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $resto)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>

                            <td>{{ $resto->name }}</td>
                            <td>{{ $resto->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="/admin/resto-settings/edit-resto/{{ $resto->id }}"><button type="button"
                                        class="btn btn-warning"><i class="fa-solid fa-pen pe-2"></i>Edit</button></a>
                                <a href="#"><button type="button" class="btn btn-danger delete-btn"
                                        data-id="{{ $resto->id }}" data-name="{{ $resto->name }}"><i
                                            class="fa-solid fa-trash pe-2"></i>Delete</button></a>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
            @if (!empty($searchNotFound))
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    {{ $searchNotFound }}
                    <a href="/admin/resto-settings"><button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button></a>
                </div>
            @endif
            {{ $data->links() }}
        </div>
    </div>

    <script>
        let delete_btns = document.querySelectorAll('.delete-btn');
        delete_btns.forEach(function(btn) {
            btn.onclick = function(event) {
                event.preventDefault();
                let dataId = btn.getAttribute('data-id');
                let dataRestoname = btn.getAttribute('data-name');
                swal({
                        title: "Konfirmasi",
                        text: "Data dengan id " + dataId + " dan Nama Resto " + dataRestoname +
                            " akan dihapus secara permanen.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "resto-settings/delete-resto/" + dataId + ""
                            swal("Berhasil!", "Data dengan ID " + dataId + " dan Nama Resto " + dataRestoname +
                                " telah berhasil dihapus.", {
                                    icon: "success",
                                });
                        } else {
                            swal("Dibatalkan", "Penghapusan data dengan ID " + dataId + " dan Nama Resto " +
                            dataRestoname + " telah dibatalkan.", {
                                    icon: "info",
                                });
                        }
                    });
            };
        });
    </script>
@endsection
