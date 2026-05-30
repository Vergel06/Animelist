<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-dark text-white">

    <nav class="navbar position-absolute w-100 py-3" style="background-color: rgba(0, 0, 0, 0.2); z-index: 1000;">
        <div class="container-fluid px-md-5 d-flex align-items-center">
            <a class="navbar-brand me-auto" href="#"><img src="{{ asset('pics/yumi.png') }}" height="40"></a>
            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn border-white text-white fw-bold rounded-pill-custom px-3 py-2 text-uppercase" style="font-size: 11px;">Log In</a>
                <a href="{{ route('register') }}" class="btn btn-red rounded-pill-custom px-3 py-2 text-uppercase shadow-sm" style="font-size: 11px;">Start Free Trial</a>
            </div>
        </div>
    </nav>

    <section class="hero d-flex flex-column justify-content-center">
        <div class="container pt-5 mt-5 px-md-5">
            <h1 class="display-1 fw-bold mb-4" style="line-height: 1.1;">Discover the ultimate Anime<br>collection thousands of titles<br>streamed on demand</h1>
            <p class="fs-4 fw-medium mb-4">Join YumiNet and discover the world of Anime</p>
            <a href="{{ route('register') }}" class="btn btn-red rounded-pill-custom text-uppercase shadow-lg px-4 py-3 fw-bold">Start Free Trial</a>
        </div>

        <div class="container mt-5 pt-5 text-center" style="max-width: 600px;">
            <form class="d-flex bg-white bg-opacity-10 p-1 border border-white border-opacity-25 rounded-pill">
                <input type="text" placeholder="Search for your favorite anime..." class="form-control border-0 bg-transparent rounded-pill px-4 text-white shadow-none px-4">
                <button type="submit" class="btn btn-red rounded-pill px-4 fw-bold">SEARCH</button>
            </form>
            <p class="text-white-50 small mt-3">Example: Naruto, Solo Leveling, One Piece...</p>
        </div>
    </section>


    <section class="black-section py-5 border-top border-dark">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-3">Choose Your <span style="color:#e50914cd">Power-Up</span></h2>
                    <p class="text-secondary mb-4">Unlock the full YumiNet experience. No ads, just pure anime bliss.</p>
                    <div class="btn-group p-1 bg-white bg-opacity-10 rounded-3">
                        <button class="btn btn-sm btn-red rounded-3 px-4">Monthly</button>
                        <button class="btn btn-sm text-white-50 border-0 px-4">Yearly (-41%)</button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 shadow-lg h-100 bg-white bg-opacity-10 border border-white border-opacity-10">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="fw-bold m-0 text-white">Fan</h4>
                                    <span class="badge rounded-pill bg-dark border border-secondary px-3 py-2">Essential</span>
                                </div>
                                <h2 class="fw-bold text-white">₱99.00</h2>
                                <p class="text-secondary small mb-4">Per month, billed monthly</p>
                                <ul class="list-unstyled small mb-4 lh-lg text-white-50">
                                    <li>⚡ No Advertisements</li>
                                    <li>⚡ 1,000+ Titles on Demand</li>
                                    <li>⚡ HD Streaming</li>
                                </ul>
                                <a href="#" class="btn w-100 rounded-pill fw-bold" 
                                    style="color: #e50914cd; border: 2px solid #e50914cd; background: transparent;">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 shadow-lg h-100 border border-danger position-relative" style="background: linear-gradient(145deg, rgba(201, 52, 52, 0.15), transparent);">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="fw-bold m-0 text-danger">Mega Fan</h4>
                                    <span class="badge rounded-pill px-3 py-2 text-black" 
                                        style="background-color: #e50914cd !important;">
                                        Ultimate
                                    </span>
                                </div>
                                <h2 class="fw-bold text-white">₱119.00</h2>
                                <p class="text-secondary small mb-4">Per month, billed monthly</p>
                                <ul class="list-unstyled small mb-4 lh-lg text-white-50">
                                    <li>💎 Everything in Fan</li>
                                    <li>💎 Offline Viewing (Downloads)</li>
                                    <li>💎 Stream on 4 devices</li>
                                    <li>💎 Exclusive Game Access</li>
                                </ul>
                                <a href="#" class="btn btn-red w-100 rounded-pill fw-bold shadow-lg">Go Mega Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-4 border-top border-secondary text-center text-secondary small">
                <p>Prices include VAT. Cancel any time. Subject to YumiNet Terms of Use.</p>
            </div>
        </div>
    </section>

    <section class="py-5 bg-black">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="fw-bold m-0">Be the First to Watch</h2>
                    <p class="text-secondary m-0">Stream the latest simulcasts straight from Japan.</p>
                </div>
                <a href="#" class="btn btn-sm rounded-pill px-4 fw-bold" 
                    style="color: #e50914cd; border: 1px solid #e50914cd; background: transparent;">
                    View All
                </a>
            </div>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/1111.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate">One Piece</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/2222.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate">One Piece</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/3333.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate">F Froce</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/4444.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate">MF GHOST</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/5555.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate text-wrap">Mushoku Tensei</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 h-100">
                        <div class="overflow-hidden rounded-3 mb-2 shadow" style="aspect-ratio: 2/3;">
                            <img src="{{ asset('pics/6666.jpg') }}" class="w-100 h-100 object-fit-cover transition-transform" style="transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h6 class="fw-bold mb-0 text-truncate">Dr. Stone</h6>
                        <p class="text-secondary small">Sub | Dub</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-black border-top border-dark text-center">
        <div class="container py-5">
            <h2 class="display-6 fw-bold mb-3 text-uppercase">Level Up with <span style="color: #e50914 ">Premium</span></h2>
            <p class="text-secondary mb-5 mx-auto" style="max-width: 700px;">Enjoy YumiNet's entire library ad-free, including new episodes shortly after Japan release.</p>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-2">
                    <div class="fs-1 mb-2">🚫</div>
                    <h6 class="small fw-bold">Ad-free streaming</h6>
                </div>
                <div class="col-6 col-md-2">
                    <div class="fs-1 mb-2">📺</div>
                    <h6 class="small fw-bold">Complete library</h6>
                </div>
                <div class="col-6 col-md-2">
                    <div class="fs-1 mb-2">⚡</div>
                    <h6 class="small fw-bold">Fast Updates</h6>
                </div>
                <div class="col-6 col-md-2">
                    <div class="fs-1 mb-2">🎮</div>
                    <h6 class="small fw-bold">Game Vault</h6>
                </div>
                <div class="col-6 col-md-2">
                    <div class="fs-1 mb-2">📥</div>
                    <h6 class="small fw-bold">Offline HD</h6>
                </div>
            </div>
            <div class="mt-5">
                <a href="#" class="btn btn-red px-5 py-3 fw-bold text-uppercase">Compare All Plans</a>
            </div>
        </div>
    </section>

    <footer class="bg-black py-5 border-top border-dark">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-3 mb-4">
                    <h6 class="text-danger fw-bold text-uppercase mb-3 small " style="color: #e50914cd !important;">Navigation</h6>
                    <ul class="list-unstyled small lh-lg">
                        <li><a href="#" class="text-secondary text-decoration-none">Browse Popular</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">Simulcasts</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">Release Calendar</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-danger fw-bold text-uppercase mb-3 small" style="color: #e50914cd !important;">Connect</h6>
                    <ul class="list-unstyled small lh-lg">
                        <li><a href="#" class="text-secondary text-decoration-none">Discord</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">Facebook</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">Twitter (X)</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="text-danger fw-bold text-uppercase mb-3 small" style="color: #e50914cd !important;">YumiNet</h6>
                    <ul class="list-unstyled small lh-lg">
                        <li><a href="about" class="text-secondary text-decoration-none">About Us</a></li>
                        <li><a href="contact" class="text-secondary text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-md-end">
                    <button class="btn btn-dark btn-sm border-secondary px-3">ENGLISH (US)</button>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-secondary">
                <p class="m-0"><span class="fw-bold text-light">SONY PICTURES</span> | © YumiNet, LLC</p>
                <div class="d-flex gap-3 mt-3 mt-md-0">
                    <span>Privacy Policy</span><span>AdChoices</span><span>Cookie Tool</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>