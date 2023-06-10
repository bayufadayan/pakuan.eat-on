<div class="login-container">
    <form action="/signup" method="post">
        @csrf
        <div class="input-container is-invalid" style="text-align:right">
            <label for="email-input">Email</label>
            <input type="email" id="email-input" name="email" class="form-control @error('email')is-invalid @enderror"
                required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-container">
            <label for="username-input">Username</label>
            <input type="text" id="username-input" name="username"
                class="form-control @error('username')is-invalid @enderror" required value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-container">
            <label for="pw-input">Password</label>
            <input type="password" id="pw-input" name="password"
                class="form-control @error('password')is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="input-container">
            <label for="pw-conf-input">Confirm Password</label>
            <input type="password" id="pw-conf-input" name="confirmpassword"
                class=" form-control @error('confirmpassword')is-invalid @enderror" required>
            @error('confirmpassword')
                <div class="invalid-feedback" style="text-align:right">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="signup-button">Sign Up</button>
    </form>

    <div class="havent-account">
        Already have account?
        <a href="/login">Log in</a>
    </div>
</div>
