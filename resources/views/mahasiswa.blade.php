<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa - UNPAM</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --navy-primary: #0a192f;
            --navy-secondary: #1e293b;
            --navy-light: #f8fafc;
            --accent-blue: #2563eb;
        }

        body {
            background-color: var(--navy-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .bg-navy {
            background-color: var(--navy-primary) !important;
        }

        .card-profile {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-profile:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(10, 25, 47, 0.12) !important;
        }

        .profile-header {
            background: linear-gradient(135deg, #0a192f 0%, #1e293b 100%);
            color: #ffffff;
            padding: 2.5rem 1rem 1.5rem;
            position: relative;
        }

        .profile-img-container {
            position: relative;
            display: inline-block;
        }

        .profile-img {
            width: 125px;
            height: 125px;
            object-fit: cover;
            border: 4px solid #ffffff;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
        }

        .info-item {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #f1f5f9;
            text-align: left;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            color: #0f172a;
            font-weight: 600;
            font-size: 1rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-navy shadow-sm py-3">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard-fill text-primary-light"></i>
                <span>UNPAM - Profile Mahasiswa</span>
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container flex-grow-1 my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <div class="card card-profile shadow">
                    <!-- Header Profile -->
                    <div class="profile-header text-center">
                        <div class="profile-img-container mb-3">
                            <img src="{{ asset('img/rika.jpg') }}" 
                            alt="Foto Profile" 
                            class="rounded-circle profile-img">
                        </div>
                        <h4 class="fw-bold mb-1">{{ $mahasiswa['nama'] }}</h4>
                        <span class="badge bg-primary px-3 py-2 rounded-pill fw-normal">
                            <i class="bi bi-person-badge me-1"></i> Mahasiswa Aktif
                        </span>
                    </div>

                    <!-- Body Profile Detail -->
                    <div class="card-body p-4">
                        <div class="info-item d-flex align-items-center gap-3">
                            <i class="bi bi-card-heading text-primary fs-4"></i>
                            <div>
                                <div class="info-label">NIM</div>
                                <div class="info-value">{{ $mahasiswa['nim'] }}</div>
                            </div>
                        </div>

                        <div class="info-item d-flex align-items-center gap-3">
                            <i class="bi bi-book text-primary fs-4"></i>
                            <div>
                                <div class="info-label">Jurusan</div>
                                <div class="info-value">{{ $mahasiswa['jurusan'] }}</div>
                            </div>
                        </div>

                        <div class="info-item d-flex align-items-center gap-3">
                            <i class="bi bi-building text-primary fs-4"></i>
                            <div>
                                <div class="info-label">Kampus</div>
                                <div class="info-value">{{ $mahasiswa['kampus'] }}</div>
                            </div>
                        </div>

                        <div class="info-item d-flex align-items-center gap-3">
                            <i class="bi bi-building text-primary fs-4"></i>
                            <div>
                                <div class="info-label">Email</div>
                                <div class="info-value">{{ $mahasiswa['email'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container text-center">
            <p class="text-muted small mb-0">&copy; {{ date('Y') }} Universitas Pamulang. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>