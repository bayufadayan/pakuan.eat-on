@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="container">
        <div class="mt-3 ms-5 pe-2">
            <a href="/admin/user-settings"><button type="button" class="btn btn-secondary"><i
                        class="fa-solid fa-arrow-left pe-2"></i>Back</button></a>
        </div>
        <div class="admin-page-title px-5 pt-3 pb-4">
            <p class="h3">&lbrack;<i class="fa-solid fa-plus"></i>&rbrack; Add New User</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/user-settings/add-user" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email-input">Email</label>
                                <input type="email" id="email-input" name="email"
                                    class="form-control @error('email')is-invalid @enderror" required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username-input">Username</label>
                                <input type="text" id="username-input" name="username"
                                    class="form-control @error('username')is-invalid @enderror" required
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select @error('role')is-invalid @enderror" name="role"
                                aria-label="Default select example">>
                                    <option>Pilih Role</option>
                                    <option value="ADMIN"{{ old('role') === 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                    <option value="USER"{{ old('role') === 'USER' ? 'selected' : '' }}>USER</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pw-input">Password</label>
                                <input type="password" id="pw-input" name="password"
                                    class="form-control @error('password')is-invalid @enderror">
                                @error('password')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pw-conf-input">Confirm Password</label>
                                <input type="password" id="pw-conf-input" name="confirmpassword"
                                    class=" form-control @error('confirmpassword')is-invalid @enderror" required>
                                @error('confirmpassword')
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
