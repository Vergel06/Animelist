<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Contact Us</title>
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
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold mb-2">Get in <span style="color: #c93434;">Touch</span></h1>
            <p class="text-secondary">Have questions or feedback? We'd love to hear from you.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="p-4 rounded-4 h-100" style="background: #111; border: 1px solid #333;">
                    <h5 class="fw-bold mb-4" style="color: #c93434;">Contact Information</h5>
                    <div class="mb-3">
                        <p class="mb-0 small fw-bold text-secondary text-uppercase">Email</p>
                        <p>support@yuminet.com</p>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0 small fw-bold text-secondary text-uppercase">Location</p>
                        <p>Manila, Philippines</p>
                    </div>
                    <div class="mt-4">
                        <h5 class="fw-bold mb-3 small text-uppercase text-secondary">Our Location</h5>
                        <div style="width: 100%; height: 250px; overflow: hidden; border-radius: 12px; border: 1px solid #444;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.6789!2d120.9842!3d14.5995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDM1JzU4LjIiTiAxMjDCsDU5JzAzLjEiRQ!5e0!3m2!1sen!2sph!4v123456789" style="width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <form method="POST" action="{{ route('contact.send') }}" class="p-4 rounded-4 h-100" style="background: #111; border: 1px solid #333;">
                    @csrf <div class="mb-3">
                        <label class="small fw-bold text-secondary text-uppercase mb-2">Name</label>
                        <input type="text" name="u_name" class="form-control shadow-none border-secondary text-white" placeholder="Your Name" required style="background: #000; padding: 12px; border-radius: 8px;">
                    </div>

                    <div class="mb-3">
                        <label class="small fw-bold text-secondary text-uppercase mb-2">Email</label>
                        <input type="email" name="u_email" class="form-control shadow-none border-secondary text-white" placeholder="your@email.com" required style="background: #000; padding: 12px; border-radius: 8px;">
                    </div>

                    <div class="mb-4">
                        <label class="small fw-bold text-secondary text-uppercase mb-2">Message</label>
                        <textarea name="u_message" class="form-control shadow-none border-secondary text-white" rows="6" placeholder="How can we help?" required style="background: #000; padding: 12px; border-radius: 8px;"></textarea>
                    </div>

                    <button type="submit" class="btn w-100 fw-bold text-uppercase py-3 mt-2" style="background: #c93434; color: #fff; border-radius: 50px; border: none;">
                        Send Message
                    </button>

                    @if(session('success'))
                        <div class="mt-3 text-center">
                            <div class="alert alert-success d-inline-block py-2 px-4 shadow-sm" style="border-radius: 12px; font-size: 14px; background: rgba(25, 135, 84, 0.1); border: 1px solid rgba(25, 135, 84, 0.2); color: #75b798;">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-auto py-4 text-center border-top" style="background: #050505; border-color: #1a1a1a !important;">
        <div class="container">
            <div class="mb-3" style="color:#666; font-size:13px;">
                <a href="#" class="text-decoration-none" style="color:#888;">Terms of Use</a> |
                <a href="#" class="text-decoration-none" style="color:#888;">Privacy Policy</a> |
                <a href="#" class="text-decoration-none" style="color:#888;">Cookie Tool</a>
            </div>
            <div style="font-size: 11px; color: #444; letter-spacing: 1px;" class="text-uppercase">
                <span class="fw-bold" style="color:#666;">Sony Pictures</span> | © YumiNet, LLC
            </div>
        </div>
    </footer>
</body>
</html>