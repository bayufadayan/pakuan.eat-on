@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="admin-page-title px-5 pt-5 pb-4">
        <a href="/admin/item-settings" style="color: black; text-decoration:none">
            <p class="h3"><i class="fa-solid fa-boxes-stacked ps-5 pe-4"></i>items Settings</p>
        </a>
    </div>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/admin/item-settings/add-item"><button type="button" class="btn btn-success">
                + Add New Item</button></a>
        <div class="row g-3 align-items-center mt-1">
            <div class="col-auto">
                <form action="/admin/item-settings" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-labelledby="passwordHelpInline">
                </form>
            </div>
        </div>
        {{-- <form class="d-flex" role="search">
            <input type="search" id="inputPassword6" name="search" class="form-control"
                    aria-labelledby="passwordHelpInline">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Resto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->categories->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ Str::limit($item->description, 20) }}</td>
                            <td>{{ $item->restos->name }}</td>
                            <td>
                                <a href="/admin/item-settings/edit-item/{{ $item->id }}"><button type="button"
                                        class="btn btn-warning"><i class="fa-solid fa-pen pe-2"></i>Edit</button></a>
                                <a href="#"><button type="button" class="btn btn-danger delete-btn"
                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                        data-resto="{{ $item->restos->name }}"><i
                                            class="fa-solid fa-trash pe-2"></i>Delete</button></a>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
            @if (!empty($searchNotFound))
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    {{ $searchNotFound }}
                    <a href="/admin/item-settings"><button type="button" class="btn-close" data-bs-dismiss="alert"
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
                let dataname = btn.getAttribute('data-name');
                let dataresto = btn.getAttribute('data-resto');
                swal({
                        title: "Konfirmasi",
                        text: "Data dengan id " + dataId + " bernama " + dataname +
                            " di Resto "+dataresto+ " akan dihapus secara permanen.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "item-settings/delete-item/"+ dataId +""
                            swal("Berhasil!", "Data dengan ID " + dataId + " bernama " + dataname +
                            " di Resto "+dataresto+" telah berhasil dihapus.", {
                                    icon: "success",
                                });
                        } else {
                            swal("Dibatalkan", "Penghapusan data dengan ID " + dataId + " bernama " + dataname +
                            " di Resto "+dataresto+ " telah dibatalkan.", {
                                    icon: "info",
                                });
                        }
                    });
            };
        });
    </script>
@endsection
