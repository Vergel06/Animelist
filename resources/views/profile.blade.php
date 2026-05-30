<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Profile Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
</head>
<body class="py-5 bg-dark text-white">

<div class="container">
    <div class="mb-5">
        @if(Auth::user()->role === 'Admin')
            
            <a href="{{ route('users.index') }}" class="btn btn-outline-light d-inline-flex align-items-center mb-2 text-decoration-none">
                <i class="bi bi-arrow-left me-2"></i> RETURN TO MANAGE USERS
            </a>
        @else
            
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light d-inline-flex align-items-center mb-2 text-decoration-none">
                <i class="bi bi-arrow-left me-2"></i> GO BACK TO DASHBOARD
            </a>
        @endif
        
        <h1 class="fw-bold display-6">Account Settings</h1>
        <p class="text-secondary">Manage your profile information and how others see you.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger border-0 shadow-sm mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            
            <div class="col-lg-3 col-md-4">
                <div class="glass-card p-4 text-center shadow">
                    <div class="position-relative d-inline-block mb-4">
                        @if($user->profile_pic && file_exists(public_path('uploads/' . $user->profile_pic)))
                            <img src="{{ asset('uploads/' . $user->profile_pic) }}" 
                                 class="profile-img rounded-circle shadow-lg" 
                                 alt="Avatar" 
                                 style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #e50914;">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->fullname) }}&background=e50914&color=fff&size=150" 
                                 class="profile-img rounded-circle shadow-lg" 
                                 alt="Avatar"
                                 style="width: 150px; height: 150px; object-fit: cover;">
                        @endif
                    </div>
                    
                    <div class="mb-3 text-start">
                        <label class="small text-secondary fw-bold mb-2 d-block">UPDATE PHOTO</label>
                        <input type="file" name="profile_image" class="form-control form-control-sm mb-3 bg-dark text-white border-secondary shadow-none" accept="image/*">
                    </div>
                    <hr class="border-secondary opacity-25">
                    <p class="text-secondary" style="font-size: 0.7rem;">Allowed JPG, GIF or PNG. Max size 2MB</p>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="glass-card p-4 p-md-5 shadow">
                    <h5 class="fw-bold mb-4 text-danger">
                        <i class="bi bi-person-badge me-2"></i>Personal Information
                    </h5>
                    
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="small text-secondary fw-bold mb-2">FULL NAME</label>
                            <input type="text" name="fullname" class="form-control bg-dark text-white border-secondary shadow-none" value="{{ old('fullname', $user->fullname) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small text-secondary fw-bold mb-2">EMAIL ADDRESS</label>
                            <input type="email" name="email" class="form-control bg-dark text-white border-secondary shadow-none" value="{{ old('email', $user->email) }}" required>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="small text-secondary fw-bold mb-2">PHONE NUMBER</label>
                            <div class="input-group">
                                <span class="input-group-text bg-black border-secondary text-secondary">+63</span>
                                <input type="text" name="phone" class="form-control bg-dark text-white border-secondary shadow-none" value="{{ old('phone', $user->phone) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="small text-secondary fw-bold mb-2">LOCATION</label>
                            <input type="text" name="location" class="form-control bg-dark text-white border-secondary shadow-none" value="{{ old('location', $user->location) }}">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="small text-secondary fw-bold mb-2">BIO / DESCRIPTION</label>
                        <textarea name="bio" class="form-control bg-dark text-white border-secondary shadow-none" rows="4">{{ old('bio', $user->bio) }}</textarea>
                    </div>

                    <div class="text-end pt-3">
                        <button type="submit" class="btn btn-danger px-5 py-3 shadow-lg fw-bold border-0">
                            SAVE ALL CHANGES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="bi bi-check-circle-fill me-2"></i> <span id="toast-msg"></span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            const toastElement = document.getElementById('liveToast');
            document.getElementById('toast-msg').innerText = "{{ session('success') }}";
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        @endif
    });
</script>

</body>
</html>