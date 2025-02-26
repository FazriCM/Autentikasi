<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero-section {
            background: #111;
            color: #fff;
            padding: 60px 0;
            text-align: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-content {
            max-width: 800px;
            text-align: center;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 30px;
        }

        .card-custom {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-section">
        <div class="container hero-content">
            <h1>Authentication App</h1>
            <p>Di era digital, keamanan adalah prioritas utama. Sistem autentikasi kami dirancang untuk memberikan
                perlindungan terbaik tanpa mengorbankan kenyamanan. Dengan teknologi enkripsi canggih, multi-factor
                authentication (MFA), dan integrasi yang fleksibel, kami memastikan hanya pengguna yang berwenang yang
                dapat mengakses akun mereka.</p>
            <a href="#" class="btn btn-custom btn-lg">Get the App</a>
        </div>
    </section>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm">
                    <h4>Keamanan yang Terjamin
                    </h4>
                    <p>Gunakan metode autentikasi modern seperti biometrik, OTP, dan autentikasi berbasis token untuk
                        perlindungan maksimal terhadap data Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm">
                    <h4>Cepat & Mudah Digunakan</h4>
                    <p>Proses login yang instan dan seamless, tanpa mengorbankan keamanan. Akses akun Anda dengan satu
                        klik, kapan saja dan di mana saja.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm">
                    <h4>Integrasi Tanpa Hambatan</h4>
                    <p>Dapat dihubungkan dengan berbagai platform dan sistem, mendukung Single Sign-On (SSO) untuk
                        pengalaman pengguna yang lebih efisien.</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center py-4 bg-light">
        <p>&copy; 2025 , Fazri Czar M - Dev</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
    