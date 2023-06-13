@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="container">
        <div class="mt-3 ms-5 pe-2">
            <a href="/admin/resto-settings"><button type="button" class="btn btn-secondary"><i
                        class="fa-solid fa-arrow-left pe-2"></i>Back</button></a>
        </div>
        <div class="admin-page-title px-5 pt-3 pb-4">
            <p class="h3">&lbrack;<i class="fa-solid fa-plus"></i>&rbrack; Add New resto</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/resto-settings/add-resto" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name-input">Name</label>
                                <input type="text" id="name-input" name="name"
                                    class="form-control @error('name')is-invalid @enderror" required
                                    value="{{ old('name') }}">
                                @error('username')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
