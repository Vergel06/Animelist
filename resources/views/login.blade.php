<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white d-flex flex-column min-vh-100" style="font-family:sans-serif; background-color: #000; overflow-y: scroll;">

<nav class="navbar border-bottom" style="background:rgba(0,0,0,0.9); border-color:#1a1a1a !important;">
    <div class="container d-flex justify-content-center py-3">
        <a class="navbar-brand m-0" href="{{ url('/') }}">
            <img src="{{ asset('pics/yumi.png') }}" height="45">
        </a>
    </div>
</nav>

<div class="container d-flex flex-column align-items-center justify-content-center flex-grow-1" style="max-width:400px; padding:40px 20px;">
    <h1 class="fw-bold text-uppercase mb-4" style="font-size:32px; letter-spacing:1px;">Log In</h1>

    <form class="w-100" action="{{ route('login.post') }}" method="POST">
        @csrf @if($errors->has('loginError'))
            <div class="alert alert-danger py-2 text-center" style="font-size: 13px; background: #c93434; color: #fff; border: none; border-radius: 8px;">
                {{ $errors->first('loginError') }}
            </div>
        @endif

        <div class="mb-4">
            <label class="form-label fw-bold text-uppercase" style="font-size:12px; color:#aaa; letter-spacing:.5px;">Email Address</label>
            <input type="email" name="email" class="form-control shadow-none" placeholder="Enter your email" value="{{ old('email') }}" required
                   style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px; font-size:15px;">
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold text-uppercase" style="font-size:12px; color:#aaa; letter-spacing:.5px;">Password</label>
            <input type="password" name="password" class="form-control shadow-none" placeholder="Enter your password" required
                   style="background:#111; border:1px solid #333; border-radius:8px; color:#fff; padding:12px; font-size:15px;">
        </div>

        <div class="text-end mb-4">
            <a href="#" class="text-decoration-none fw-semibold" style="color: #8a1117; font-size:13px;">Forgot Password?</a>
        </div>

        <button type="submit" class="btn w-100 fw-bold text-uppercase mb-4 shadow-none"
                style="background: #e50914cd; color:#fff; border-radius:50px; padding:14px; font-size:14px; letter-spacing:1px; border:none;">
            Log In
        </button>

        <div class="text-center" style="font-size:14px; color:#888;">
            No account?
            <a href="{{ route('register') }}" class="fw-bold text-white text-decoration-none" style="border-bottom:1px solid #e50914;">Create One</a>
        </div>
    </form>
</div>

<footer class="mt-auto text-center py-4 border-top" style="background:#050505; border-color:#1a1a1a !important;">
    <div class="container">
        <div class="mb-3" style="color:#666; font-size:13px;">
            <a href="#" class="text-decoration-none" style="color:#888;">Terms of Use</a> |
            <a href="#" class="text-decoration-none" style="color:#888;">Privacy Policy</a> |
            <a href="#" class="text-decoration-none" style="color:#888;">Cookie Tool</a>
        </div>
        <div class="text-uppercase" style="color:#444; font-size:11px; letter-spacing:1px;">
            <span class="fw-bold" style="color:#666;">SONY PICTURES</span> | © YumiNet, LLC
        </div>
    </div>
</footer>

</body>
</html>