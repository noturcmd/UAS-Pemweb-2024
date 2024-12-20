<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            background: linear-gradient(to bottom, #4facfe, #00f2fe);
            color: #333;
            font-family: 'Arial', sans-serif;
            scroll-behavior: smooth; /* Smooth scrolling */
        }

        /* Navbar Styles */
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 20px;
            color: white;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        .search-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 30px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
        }
        .search-container input {
            border: none;
            outline: none;
            background: transparent;
            width: 100%;
            font-size: 16px;
        }
        .search-container input::placeholder {
            color: #888;
        }
        .search-container i {
            color: #666;
            margin-right: 10px;
        }

        /* Section Styles */
        section {
            padding: 80px 20px;
        }
        .section-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            background: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
        }
            .service-card {
        background-size: cover;
        background-position: center;
        color: white;
        border-radius: 10px;
        height: 250px; /* Tinggi kartu */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
        
        .service-card .card-body {
            z-index: 2; /* Supaya teks di atas background */
        }

        /* Background untuk setiap layanan */
        .service-card.kereta {
            background-image: url('assets/kereta.jpg');
        }
        .service-card.pesawat {
            background-image: url('assets/pesawat.png');
        }
        .service-card.hotel {
            background-image: url('assets/hotel.jpg');
        }
        .service-card.mobil {
            background-image: url('assets/mobil.jpg');
        }

        /* Overlay untuk membuat teks lebih jelas */
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Overlay transparan */
            z-index: 1;
        }
    
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GoTravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Hei Kamu, Mau Kemana?</h1>
        <p>Cari tiket terbaik untuk perjalananmu sekarang!</p>
        <div class="search-container">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari tiket kereta, pesawat, atau hotel...">
        </div>
    </div>

    <!-- Services Section -->
    <section id="services">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Train -->
                <div class="col-md-3">
                    <div class="card service-card train text-center">
                        <div class="card-body">
                            <i class="fas fa-train fa-3x mb-3"></i>
                            <h5 class="card-title">Kereta</h5>
                            <p class="card-text">Pesan tiket kereta untuk perjalanan Anda</p>
                            <a href="Kereta.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Plane -->
                <div class="col-md-3">
                    <div class="card service-card plane text-center">
                        <div class="card-body">
                            <i class="fas fa-plane fa-3x mb-3"></i>
                            <h5 class="card-title">Pesawat</h5>
                            <p class="card-text">Cari tiket pesawat dengan harga terbaik</p>
                            <a href="Pesawat.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Hotel -->
                <div class="col-md-3">
                    <div class="card service-card hotel text-center">
                        <div class="card-body">
                            <i class="fas fa-hotel fa-3x mb-3"></i>
                            <h5 class="card-title">Hotel</h5>
                            <p class="card-text">Temukan hotel nyaman untuk perjalanan Anda</p>
                            <a href="Hotel.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Car Rental -->
                <div class="col-md-3">
                    <div class="card service-card car text-center">
                        <div class="card-body">
                            <i class="fas fa-car fa-3x mb-3"></i>
                            <h5 class="card-title">Mobil Travel</h5>
                            <p class="card-text">Sewa mobil Travel untuk liburan dan perjalanan Anda</p>
                            <a href="Travel.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" style="background-color: #f8f9fa;">
        <h2 class="section-title">Tentang Kami</h2>
        <div class="container">
            <p class="text-center">Kami adalah penyedia layanan perjalanan terpercaya untuk berbagai kebutuhan perjalanan Anda.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="section-title">Kontak Kami</h2>
        <div class="container text-center">
            <p>Email: support@gotravel.com</p>
            <p>Telepon: +62 812 3456 7890</p>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 GoTravel. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
