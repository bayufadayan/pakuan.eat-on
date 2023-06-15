@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="admin-page-title px-5 pt-5 pb-4">
        <a href="/admin/user-settings" style="color: black; text-decoration:none">
            <p class="h3"><i class="fa-solid fa-user ps-5 pe-4"></i>Users Settings</p>
        </a>
    </div>
    <div class="container">
        <div class="row g-3 align-items-center mt-1">
            <div class="col-auto">
                <form action="/admin/transaction-history" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-labelledby="passwordHelpInline" placeholder="Search username or item name">
                </form>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Order Method</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Total</th>
                        <th scope="col">Created at</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $transaction)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $transaction->users->username }}</td>
                            <td>{{ $transaction->items->name }}</td>
                            <td>{{ $transaction->notes }}</td>
                            <td>{{ $transaction->order_option }}</td>
                            <td>{{ $transaction->payment_option }}</td>
                            <td>{{ $transaction->total }}</td>
                            <td>{{ $transaction->created_at->diffForHumans() }}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>
            @if (!empty($searchNotFound))
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    {{ $searchNotFound }}
                    <a href="/admin/history-transaction"><button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button></a>
                </div>
            @endif
            {{ $data->links() }}
        </div>
    </div>

@endsection
