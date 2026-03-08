<style>
    /* Demo Modal Overlay */
    .demo-modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 1050;
        background: rgba(0, 0, 0, 0.55);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        align-items: center;
        justify-content: center;
    }
    .demo-modal-overlay.show {
        display: flex;
    }
    .demo-modal-box {
        background: #fff;
        border-radius: 16px;
        padding: 32px 28px 24px;
        width: 100%;
        max-width: 380px;
        box-shadow: 0 8px 40px rgba(0,0,0,0.22);
        position: relative;
        animation: demoModalIn 0.22s ease;
    }
    @keyframes demoModalIn {
        from { opacity: 0; transform: translateY(-18px) scale(0.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .demo-modal-close {
        position: absolute;
        top: 14px;
        right: 16px;
        background: none;
        border: none;
        font-size: 1.2rem;
        color: #888;
        cursor: pointer;
        line-height: 1;
        padding: 4px 6px;
        border-radius: 6px;
        transition: background 0.15s, color 0.15s;
    }
    .demo-modal-close:hover { background: #f0f0f0; color: #333; }
    .demo-modal-title {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 6px;
        color: #222;
    }
    .demo-modal-subtitle {
        font-size: 0.83rem;
        color: #888;
        margin-bottom: 20px;
    }
    .demo-modal-field-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 4px;
    }
    .demo-modal-field {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #f7f7f8;
        border: 1px solid #e8e8e8;
        border-radius: 8px;
        padding: 9px 12px;
        margin-bottom: 14px;
    }
    .demo-modal-field-value {
        flex: 1;
        font-size: 0.92rem;
        color: #333;
        font-family: 'Courier New', monospace;
        word-break: break-all;
    }
    .demo-copy-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: #aaa;
        font-size: 0.95rem;
        padding: 2px 4px;
        border-radius: 5px;
        transition: color 0.15s, background 0.15s;
        flex-shrink: 0;
    }
    .demo-copy-btn:hover { color: #555; background: #ececec; }
    .demo-copy-btn.copied { color: #28a745; }
    .demo-modal-trigger {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: none;
        border: 1.5px dashed #ccc;
        border-radius: 8px;
        color: #888;
        font-size: 0.82rem;
        padding: 6px 14px;
        cursor: pointer;
        margin-top: 6px;
        transition: border-color 0.15s, color 0.15s, background 0.15s;
        width: 100%;
        justify-content: center;
    }
    .demo-modal-trigger:hover {
        border-color: #aaa;
        color: #555;
        background: #fafafa;
    }
</style>

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

    <button class="demo-modal-trigger" id="openDemoModal" type="button">
        <i class="fa-regular fa-id-card"></i>
        Lihat Akun Demo
    </button>

    <div class="havent-account">
        Don't have account?
        <a href="/signup">Sign Up</a>
    </div>
</div>

<!-- Demo Account Modal -->
<div class="demo-modal-overlay" id="demoModalOverlay">
    <div class="demo-modal-box">
        <button class="demo-modal-close" id="closeDemoModal" title="Tutup">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="demo-modal-title">Akun Demo</div>
        <div class="demo-modal-subtitle">Gunakan kredensial di bawah untuk mencoba aplikasi</div>

        <div class="demo-modal-field-label">Email</div>
        <div class="demo-modal-field">
            <span class="demo-modal-field-value" id="demoEmail">admin@gmail.com</span>
            <button class="demo-copy-btn" type="button" onclick="demoCopy('demoEmail', this)" title="Salin email">
                <i class="fa-regular fa-copy"></i>
            </button>
        </div>

        <div class="demo-modal-field-label">Password</div>
        <div class="demo-modal-field">
            <span class="demo-modal-field-value" id="demoPassword">@admin01</span>
            <button class="demo-copy-btn" type="button" onclick="demoCopy('demoPassword', this)" title="Salin password">
                <i class="fa-regular fa-copy"></i>
            </button>
        </div>
    </div>
</div>

<script>
    (function () {
        const overlay = document.getElementById('demoModalOverlay');
        const openBtn = document.getElementById('openDemoModal');
        const closeBtn = document.getElementById('closeDemoModal');

        openBtn.addEventListener('click', function () {
            overlay.classList.add('show');
        });

        closeBtn.addEventListener('click', function () {
            overlay.classList.remove('show');
        });

        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) overlay.classList.remove('show');
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') overlay.classList.remove('show');
        });
    })();

    function demoCopy(targetId, btn) {
        const text = document.getElementById(targetId).textContent.trim();
        navigator.clipboard.writeText(text).then(function () {
            const icon = btn.querySelector('i');
            icon.className = 'fa-solid fa-check';
            btn.classList.add('copied');
            setTimeout(function () {
                icon.className = 'fa-regular fa-copy';
                btn.classList.remove('copied');
            }, 1800);
        });
    }
</script>
