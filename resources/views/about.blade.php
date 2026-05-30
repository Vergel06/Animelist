<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100" style="background: #000; color: #fff; font-family: sans-serif; overflow-y: scroll;">

    <nav class="navbar border-bottom" style="background:rgba(0,0,0,0.9); border-color:#1a1a1a !important;">
        <div class="container d-flex justify-content-center py-3">
            <a class="navbar-brand m-0" href="{{ url('/') }}">
                <img src="{{ asset('pics/yumi.png') }}" height="45">
            </a>
        </div>
    </nav>

    <div class="container py-5 flex-grow-1">
        
        <div class="text-center mb-5 mt-4">
            <h1 class="display-4 fw-bold mb-3">
                Reimagining the <span style="color: #c93434;">Anime</span> Experience
            </h1>
            <p class="text-secondary mx-auto fs-5" style="max-width: 800px;">
                YumiNet is more than just a streaming platform. We are a community-driven hub dedicated to bringing the finest Japanese animation to fans across the globe.
            </p>
        </div>

        <div class="row g-4 justify-content-center mt-2">
            <div class="col-md-4">
                <div class="h-100 p-4 rounded-4" style="background: #111; border: 1px solid #222;">
                    <div class="d-inline-block p-3 rounded-3 mb-3" style="background: rgba(201, 52, 52, 0.1); color: #c93434;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3 text-uppercase" style="font-size: 16px;">Instant Streaming</h5>
                    <p class="text-secondary small">
                        No more waiting. Watch your favorite anime in high resolution with zero buffering, optimized for any connection speed.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4 rounded-4" style="background: #111; border: 1px solid #222;">
                    <div class="d-inline-block p-3 rounded-3 mb-3" style="background: rgba(201, 52, 52, 0.1); color: #c93434;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0.5c-.6 0-1.8.3-2.9.6-1.1.3-2.2.6-2.9.8-.4.1-.7.4-1 1.2-.6 4.5.8 7.8 2.5 10 1.2 1.6 2.5 2.5 2.5 2.5s1.3-.9 2.5-2.5c1.7-2.2 3.1-5.5 2.5-10-.3-.8-.6-1.1-1-1.2-.7-.2-1.8-.5-2.9-.8-1.1-.3-2.3-.6-2.9-.6zM8 5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 5zm0 6a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3 text-uppercase" style="font-size: 16px;">Safe & Secure</h5>
                    <p class="text-secondary small">
                        Your privacy is our priority. YumiNet is built with the latest security protocols to ensure a safe viewing environment.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 p-4 rounded-4" style="background: #111; border: 1px solid #222;">
                    <div class="d-inline-block p-3 rounded-3 mb-3" style="background: rgba(201, 52, 52, 0.1); color: #c93434;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1.475 9C2.702 10.84 4.751 12.84 8 14.98c3.249-2.14 5.298-4.14 6.525-5.98C15.59 7.332 16 5.667 16 4c0-2.21-1.79-4-4-4-1.176 0-2.226.504-3 1.307C8.226.504 7.176 0 6 0 3.79 0 2 1.79 2 4c0 1.667.41 3.332 1.475 5z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3 text-uppercase" style="font-size: 16px;">Fan-Centric</h5>
                    <p class="text-secondary small">
                        Created by enthusiasts, for enthusiasts. We listen to community feedback to constantly evolve the features anime fans want.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-5 mb-4">
            <h3 class="fw-bold mb-4">Ready to start your journey?</h3>
            <a href="{{ route('register') }}" 
               class="btn px-5 py-3 fw-bold text-uppercase" 
               style="background: #c93434; color: #fff; border-radius: 50px; font-size: 14px;">
                Join YumiNet Now
            </a>
        </div>
    </div>
</body>
</html>