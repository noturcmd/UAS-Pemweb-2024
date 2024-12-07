<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .service-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
        .auth-container {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>

    <style>
    body {
        background-image: url('bg2.png'); /* Ganti URL dengan link gambar Anda */
        background-size: cover; /* Gambar akan menyesuaikan ukuran layar */
        background-repeat: no-repeat; /* Hindari pengulangan gambar */
        background-attachment: fixed; /* Gambar tetap saat menggulir */
        background-position: center; /* Fokus gambar di tengah */
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed; top: 0; width: 100%; z-index: 1020;">
    <div class="container">
        <a class="navbar-brand" href="#">
            GoTravel
            <i class="bi bi-search" style="display: block; font-size: 1.2rem; margin-top: 5px;"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Cek Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                        <img src="bendera.png" alt="Flag" style="width: 80px; height: auto; margin-right: 5px;"> IDR
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


 
     

<!-- Tambahkan padding-top pada body -->
<style>
    body {
        padding-top: 56px; /* Sesuaikan nilai ini dengan tinggi navbar */
    }
</style>


    <!-- Main Content -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Hei Kamu, Mau Kemana?</h2>
        <div class="row g-4">
            <!-- Train -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-train fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Train</h5>
                        <p class="card-text">Book train tickets for your journey</p>
                    </div>
                </div>
            </div>
            
            <!-- Plane -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-plane fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Flight</h5>
                        <p class="card-text">Find the best flight deals</p>
                    </div>
                </div>
            </div>
            
            <!-- Car Rental -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-car fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Car Rental</h5>
                        <p class="card-text">Rent a car for your trip</p>
                    </div>
                </div>
            </div>
            
            <!-- Ship -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-ship fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Ship</h5>
                        <p class="card-text">Book ferry and cruise tickets</p>
                    </div>
                </div>
            </div>
            
            <!-- Hotel -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-hotel fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Hotel</h5>
                        <p class="card-text">Find comfortable hotels</p>
                    </div>
                </div>
            </div>
            
            <!-- Villa -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-home fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Villa</h5>
                        <p class="card-text">Luxury villa accommodations</p>
                    </div>
                </div>
            </div>
            
            <!-- Event -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-calendar-alt fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Book event tickets</p>
                    </div>
                </div>
            </div>
            
            <!-- Bus -->
            <div class="col-md-3">
                <div class="card service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-bus fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Bus</h5>
                        <p class="card-text">Book bus tickets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
