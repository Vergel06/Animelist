<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumiNet | Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ManageUser.css') }}">
</head>
<body>

    <div class="sidebar p-4 d-none d-lg-flex flex-column">
        <div class="mb-5 px-3">
            <img src="{{ asset('pics/yumi.png') }}" class="img-fluid" style="max-height: 40px;">
        </div>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link py-2 px-3">
                    <i class="bi bi-grid-1x2-fill me-3"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link active py-2 px-3 fw-bold">
                    <i class="bi bi-people-fill me-3"></i>Manage Users
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link py-2 px-3">
                    <i class="bi bi-person-circle me-3"></i>My Profile
                </a>
            </li>
        </ul>
        <div class="mt-auto">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger w-100 fw-bold border-0 py-2" style="background: rgba(229, 9, 20, 0.1);">
                    <i class="bi bi-box-arrow-left me-2"></i>Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main-content">
        <div class="welcome-banner p-4 rounded-4 mb-5 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="position-relative me-3">
                    @if(Auth::user()->profile_pic && file_exists(public_path('uploads/' . Auth::user()->profile_pic)))
                        <img src="{{ asset('uploads/' . Auth::user()->profile_pic) }}" class="rounded-circle shadow-lg" style="width: 55px; height: 55px; object-fit: cover; border: 2px solid white;">
                    @else
                        <div class="rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 55px; height: 55px; background-color: #c93434;">
                            <span class="fs-4 fw-bold text-white">{{ strtoupper(substr(Auth::user()->fullname, 0, 1)) }}</span>
                        </div>
                    @endif
                </div>
                <div>
                    <h3 class="mb-0 fw-bold text-white h5">Hello, Admin {{ Auth::user()->fullname }}!</h3>
                    <p class="text-secondary mb-0 small">Manage your system users effortlessly.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-6 col-md-3">
                <div class="stat-card h-100">
                    <p class="text-secondary small fw-bold text-uppercase mb-1">Total Users</p>
                    <h2 class="fw-bold mb-0 text-white">{{ $users->count() }}</h2>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card h-100 border-success border-opacity-25">
                    <p class="text-secondary small fw-bold text-uppercase mb-1">Total Online</p>
                    <h2 class="fw-bold mb-0 text-white">{{ $totalOnline ?? 0 }}</h2>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="stat-card text-center d-flex align-items-center justify-content-center h-100" style="border-style: dashed; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#addUserModal">
                    <div class="text-secondary fw-bold py-2"><i class="bi bi-plus-circle me-2 text-danger"></i>ADD NEW USER</div>
                </div>
            </div>
        </div>

        <div class="table-container shadow-lg">
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-secondary small text-uppercase">
                            <th class="ps-4">UID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="ps-4 text-secondary">#{{ str_pad($user->id, 3, "0", STR_PAD_LEFT) }}</td>
                            <td class="fw-bold">{{ $user->fullname }}</td>
                            <td class="text-secondary">{{ $user->email }}</td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-10 px-3 py-2">{{ $user->role }}</span></td>
                            <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">{{ $user->status ?? 'Offline' }}</span></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-dark border-secondary me-1 text-white" 
                                        onclick="openEditModal('{{ $user->id }}', '{{ addslashes($user->fullname) }}', '{{ $user->email }}', '{{ $user->role }}')">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-danger border-0" 
                                        onclick="confirmDelete('{{ $user->id }}')">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteConfirm" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-dark border-secondary">
                <div class="modal-body text-center p-4">
                    <form action="{{ route('users.delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="user_id" id="delete-id">
                        <div class="text-danger fs-1 mb-3"><i class="bi bi-exclamation-octagon"></i></div>
                        <h5 class="fw-bold text-white">Confirm Delete</h5>
                        <p class="text-secondary small">Are you sure you want to delete this user?</p>
                        <div class="d-flex gap-2 mt-4">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark border-secondary">
                <div class="modal-header border-secondary p-4 text-white">
                    <h5 class="modal-title fw-bold">Create New User</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4 text-white">
                    <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small text-secondary fw-bold">FULL NAME</label>
                            <input type="text" name="fullname" class="form-control bg-dark text-white border-secondary shadow-none" placeholder="Enter name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-secondary fw-bold">EMAIL ADDRESS</label>
                            
                            <input type="email" name="email" class="form-control bg-dark text-white border-secondary shadow-none" placeholder="Enter email" required autocomplete="new-password" value="">
                        </div>
                        <div class="mb-4">
                            <label class="form-label small text-secondary fw-bold">ROLE</label>
                            <select name="role" class="form-select bg-dark text-white border-secondary shadow-none">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div class="p-3 mb-4 rounded bg-info bg-opacity-10 border border-info border-opacity-25">
                            <small class="text-info d-block">
                                <i class="bi bi-info-circle-fill me-1"></i> 
                                <strong>Default Passwords:</strong><br>
                                • Admin role: <strong>admin1234</strong><br>
                                • User role: <strong>user1234</strong>
                            </small>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 py-3 fw-bold">SAVE USER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark border-secondary">
                <div class="modal-header border-secondary p-4">
                    <h5 class="modal-title fw-bold text-white">Update User Info</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('users.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_id" id="edit-id">
                        <div class="mb-3">
                            <label class="form-label small text-secondary fw-bold">NAME</label>
                            <input type="text" name="fullname" id="edit-name" class="form-control bg-dark text-white border-secondary" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-secondary fw-bold">EMAIL</label>
                            <input type="email" name="email" id="edit-email" class="form-control bg-dark text-white border-secondary" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small text-secondary fw-bold">ROLE</label>
                            <select name="role" id="edit-role" class="form-select bg-dark text-white border-secondary">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger w-100 py-3 fw-bold">Update Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-info-circle me-2"></i>
                    <span id="toast-message"></span>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                const toastLiveExample = document.getElementById('liveToast');
                document.getElementById('toast-message').innerText = "{{ session('success') }}";
                const toast = new bootstrap.Toast(toastLiveExample);
                toast.show();
            @endif
        });

        function openEditModal(id, name, email, role) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-role').value = role;
            new bootstrap.Modal(document.getElementById('editUserModal')).show();
        }

        function confirmDelete(id) {
            document.getElementById('delete-id').value = id;
            new bootstrap.Modal(document.getElementById('deleteConfirm')).show();
        }
    </script>
</body>
</html>