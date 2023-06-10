<div class="login-container">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <form action="/login" method="post">
        @csrf
        <div class="input-container">
            <label for="email-input">Email</label>
            <input type="email" id="email-input" class="form-control @error('email')is-invalid @enderror"
                name="email" autofocus value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-container">
            <label for="pw-input">Password</label>
            <input type="password" id="pw-input" class="form-control @error('password')is-invalid @enderror"
                name="password" required>
            @error('password')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="forgot-pw">
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="login-button">Log in</button>
    </form>

    <div class="havent-account">
        Don't have account?
        <a href="/signup">Sign Up</a>
    </div>
</div>
