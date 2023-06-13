@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center align-self-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-center fw-bold border border-0 fs-4"
                        style="background: #C7def9;">
                        Features
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item py-2 fs-5"><a href="/admin/user-settings"
                                    class="text-decoration-none text-black">User Settings</a></li>
                            <li class="list-group-item py-2 fs-5"><a href="/admin/resto-settings"
                                    class="text-decoration-none text-black">Resto Settings</a></li>
                            <li class="list-group-item py-2 fs-5"><a href="/admin/item-settings"
                                    class="text-decoration-none text-black">Item Settings</a></li>
                            <li class="list-group-item py-2 fs-5"><a href="#"
                                    class="text-decoration-none text-black">Transaction</a></li>
                            <li class="list-group-item badge text-bg-danger mt-4">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item py-1 fs-6"><i
                                            class="fa-solid fa-right-from-bracket"></i> Log
                                        Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
