<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
</head>
<body>

    <nav class="navbar fixed-top d-lg-none" style="background: #000; border-bottom: 1px solid #222;">
        <div class="container-fluid">
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                <i class="bi bi-list text-white fs-2"></i>
            </button>
            <a class="navbar-brand mx-auto">
                <img src="{{ asset('pics/yumi.png') }}" height="30">
            </a>
            <div style="width: 45px;"></div> 
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
        <div class="offcanvas-header p-4">
            <img src="{{ asset('pics/yumi.png') }}" style="max-height: 35px;">
            <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column p-4">
            <nav class="nav flex-column mb-auto">
                <a href="{{ route('dashboard') }}" class="nav-link active p-3 d-flex align-items-center"><i class="fa-solid fa-house me-3"></i>Home</a>
                <a href="#" class="nav-link p-3 d-flex align-items-center"><i class="fa-solid fa-bolt me-3"></i>New Release</a>
                <a href="#" class="nav-link p-3 d-flex align-items-center"><i class="fa-solid fa-bookmark me-3"></i>Library</a>
                @if(Auth::user()->role === 'Admin')
                    <a href="{{ route('users.index') }}" class="nav-link p-3 d-flex align-items-center">
                        <i class="fa-solid fa-users-gear me-3"></i>Manage Users
                    </a>
                @else
                    <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link py-2 px-3">
                    <i class="bi bi-person-circle me-3"></i>My Profile
                </a>
            </li>
                @endif
            </nav>
            <div class="mt-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-logout w-100 py-2 text-center">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <aside class="sidebar p-4 d-none d-lg-flex flex-column">
        <div class="mb-5 px-3">
            <img src="{{ asset('pics/yumi.png') }}" class="img-fluid" style="max-height: 40px;">
        </div>
        <nav class="nav flex-column mb-auto">
            <a href="{{ route('dashboard') }}" class="nav-link active p-3 d-flex align-items-center"><i class="fa-solid fa-house me-3"></i>Home</a>
            <a href="#" class="nav-link p-3 d-flex align-items-center"><i class="fa-solid fa-bolt me-3"></i>New Release</a>
            <a href="#" class="nav-link p-3 d-flex align-items-center"><i class="fa-solid fa-bookmark me-3"></i>Library</a>
            @if(Auth::user()->role === 'Admin')
                <a href="{{ route('users.index') }}" class="nav-link p-3 d-flex align-items-center">
                    <i class="fa-solid fa-users-gear me-3"></i>Manage Users
                </a>
            @else
                <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link py-2 px-3">
                    <i class="bi bi-person-circle me-3"></i>My Profile
                </a>
            </li>
            @endif
        </nav>
        <div class="mt-auto">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout w-100 py-2 text-center">Logout</button>
            </form>
        </div>
    </aside>

    <div class="main-content">
        <div class="banner p-3 p-md-4 mb-5 shadow-lg rounded-4">
            <div class="row align-items-center g-3 justify-content-center justify-content-md-between">
                
                <div class="col-12 col-md-auto d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                    @if (Auth::user()->profile_pic && file_exists(public_path('uploads/' . Auth::user()->profile_pic)))
                        <img src="{{ asset('uploads/' . Auth::user()->profile_pic) }}" 
                             class="rounded-circle shadow-lg" 
                             style="width:55px; height:55px; object-fit: cover; border: 2px solid #e50914;">
                    @else
                        <div class="avatar bg-danger rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0" 
                             style="width:55px; height:55px;">
                            {{ strtoupper(substr(Auth::user()->fullname, 0, 1)) }}
                        </div>
                    @endif
                    
                    <div class="text-center text-md-start">
                        <h1 class="h5 fw-bold m-0 text-white">Hello, {{ Auth::user()->fullname }}!</h1>
                        <p class="small text-secondary m-0">Welcome back to YumiNet.</p>
                    </div>
                </div>

                <div class="col-12 col-md-auto">
                    <div class="search-wrapper d-flex align-items-center mx-auto mx-md-0">
                        <i class="fa fa-search text-secondary me-2"></i>
                        <input type="text" class="bg-transparent border-0 text-white w-100 shadow-none" placeholder="Search anime..." style="outline:none;">
                    </div>
                </div>

            </div>
        </div>

        <h2 class="h5 fw-bold mb-4 px-2"><i class="fa fa-play text-danger me-2"></i>Continue Watching</h2>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 px-2 mb-5">
            <div class="col">
                <div class="anime-card">
                    <div class="poster" style="background-image: url('{{ asset('pics/11.jpg') }}');"></div>
                    <div class="p-3 text-center">
                        <p class="fw-bold m-0 small text-truncate text-white">DAN DA DAN</p>
                        <p class="text-secondary small">S2 • Ep 12</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="anime-card">
                    <div class="poster" style="background-image: url('{{ asset('pics/22.jpg') }}');"></div>
                    <div class="p-3 text-center">
                        <p class="fw-bold m-0 small text-truncate text-white">Dress-Up Darling</p>
                        <p class="text-secondary small">S1 • Ep 05</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="anime-card">
                    <div class="poster" style="background-image: url('{{ asset('pics/33.jpg') }}');"></div>
                    <div class="p-3 text-center">
                        <p class="fw-bold m-0 small text-truncate text-white">Re:ZERO</p>
                        <p class="text-secondary small">S1 • Ep 1080</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="anime-card">
                    <div class="poster" style="background-image: url('{{ asset('pics/44.jpg') }}');"></div>
                    <div class="p-3 text-center">
                        <p class="fw-bold m-0 small text-truncate text-white">7th Prince</p>
                        <p class="text-secondary small">Season 1</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="anime-card">
                    <div class="poster" style="background-image: url('{{ asset('pics/55.jpg') }}');"></div>
                    <div class="p-3 text-center">
                        <p class="fw-bold m-0 small text-truncate text-white">Rent-a-Girlfriend</p>
                        <p class="text-secondary small">S1 Ep 1</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="h5 fw-bold mb-4 px-2"><i class="fa fa-star text-danger me-2"></i>Recommended</h2>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 px-2">
            <div class="col"><div class="anime-card"><div class="poster" style="background-image: url('{{ asset('pics/66.jpg') }}');"></div><div class="p-3 text-center small fw-bold text-white text-truncate">WATER MAGICIAN</div></div></div>
            <div class="col"><div class="anime-card"><div class="poster" style="background-image: url('{{ asset('pics/77.jpg') }}');"></div><div class="p-3 text-center small fw-bold text-white text-truncate">SEIREI GENSOUKI</div></div></div>
            <div class="col"><div class="anime-card"><div class="poster" style="background-image: url('{{ asset('pics/88.jpg') }}');"></div><div class="p-3 text-center small fw-bold text-white text-truncate">100 GIRLFRIENDS</div></div></div>
            <div class="col"><div class="anime-card"><div class="poster" style="background-image: url('{{ asset('pics/99.jpg') }}');"></div><div class="p-3 text-center small fw-bold text-white text-truncate">SUPER CHEAT</div></div></div>
            <div class="col"><div class="anime-card"><div class="poster" style="background-image: url('{{ asset('pics/00.jpg') }}');"></div><div class="p-3 text-center small fw-bold text-white text-truncate">BRILLIANT HEALER</div></div></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>