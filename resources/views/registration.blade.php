<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body class="d-flex flex-column min-vh-100" style="background: #000; color: #fff; font-family: sans-serif;">

    <nav class="navbar border-bottom" style="background:rgba(0,0,0,0.9); border-color:#1a1a1a !important;">
        <div class="container d-flex justify-content-center py-3">
            <a class="navbar-brand m-0" href="{{ url('/') }}">
                <img src="{{ asset('pics/yumi.png') }}" height="45">
            </a>
        </div>
    </nav>

    <div class="container d-flex flex-column align-items-center justify-content-center flex-grow-1" style="max-width:420px; padding:40px 20px;">
        <div class="text-center mb-4">
            <h1 class="fw-bold text-uppercase mb-2" style="font-size:28px; letter-spacing:1px;">Create Account</h1>
            <p style="color:#888; font-size:14px;">Join the YumiNet community today!</p>
        </div>

        <form class="w-100" action="{{ route('register.post') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger py-2" style="font-size: 13px; background: #c93434; color: #fff; border: none; border-radius: 8px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label class="form-label text-uppercase fw-bold" style="font-size:12px; color:#aaa; letter-spacing:1px;">Full Name</label>
                <input type="text" name="fullname" class="form-control shadow-none" placeholder="Juan Dela Cruz" value="{{ old('fullname') }}" required style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px;">
            </div>

            <div class="mb-3">
                <label class="form-label text-uppercase fw-bold" style="font-size:12px; color:#aaa; letter-spacing:1px;">Email Address</label>
                <input type="email" name="email" class="form-control shadow-none" placeholder="example@email.com" value="{{ old('email') }}" required style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px;">
            </div>

            <div class="mb-3">
                <label class="form-label text-uppercase fw-bold" style="font-size:12px; color:#aaa; letter-spacing:1px;">Password</label>
                <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="At least 8 characters" required style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px;">
            </div>

            <div class="mb-4">
                <label class="form-label text-uppercase fw-bold" style="font-size:12px; color:#aaa; letter-spacing:1px;">Confirm Password</label>
                <input type="password" name="password_confirmation" id="confirm" class="form-control shadow-none" placeholder="Repeat your password" required style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px;">
                <div class="invalid-feedback">Passwords do not match!</div>
            </div>

            <button type="submit" class="btn w-100 fw-bold text-uppercase mb-4" 
                    style="background:#e50914cd; color:#fff; border-radius:50px; padding:14px; font-size:14px; border:none; letter-spacing:1px;">
                Sign Up
            </button>

            <div class="text-center" style="font-size:14px; color:#888;">
                Already have an account? 
                <a href="{{ route('login') }}" class="fw-bold text-white text-decoration-none" style="border-bottom:1px solid #e50914cd;">Log In</a>
            </div>
        </form>
    </div>

    <footer class="mt-auto py-4 text-center border-top" style="background:#050505; border-color:#1a1a1a !important;">
        <p style="color:#666; font-size:12px; margin:0;">© YumiNet, LLC. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>