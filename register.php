<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GoTravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            padding: 2rem 0;
        }
        .auth-container {
            max-width: 1000px;
            margin: auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 40px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
        }
        .auth-inner {
            display: flex;
            min-height: 600px;
            position: relative;
        }
        .auth-image {
            flex: 1;
            background: url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80') center/cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .auth-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8));
        }
        .auth-image-content {
            position: relative;
            color: white;
            text-align: center;
            z-index: 1;
        }
        .auth-form {
            flex: 1;
            padding: 3rem;
        }
        .auth-tabs {
            background: rgba(102, 126, 234, 0.1);
            padding: 0.5rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            display: flex;
            position: relative;
        }
        .auth-tabs .nav-link {
            flex: 1;
            text-align: center;
            color: #764ba2;
            font-weight: 600;
            padding: 1rem;
            border-radius: 15px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }
        .auth-tabs .nav-link.active {
            color: white;
        }
        .slider {
            position: absolute;
            width: calc(50% - 10px);
            height: calc(100% - 10px);
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px;
            top: 5px;
            left: 5px;
            transition: transform 0.3s ease-in-out;
        }
        .slider.login {
            transform: translateX(calc(100% + 10px));
        }

        .form-container {
            position: relative;
            overflow: hidden;
            min-height: 400px;
        }
        
        .form-section {
            position: absolute;
            width: 100%;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
            padding: 1rem;
        }
        
        .register-form {
            transform: translateX(0);
            opacity: 1;
        }
        
        .login-form {
            transform: translateX(100%);
            opacity: 0;
        }
        
        .show-login .register-form {
            transform: translateX(-100%);
            opacity: 0;
        }
        
        .show-login .login-form {
            transform: translateX(0);
            opacity: 1;
        }

        .form-floating {
            margin-bottom: 1rem;
        }
        
        .form-floating > .form-control {
            padding: 1rem 0.75rem;
        }
        
        .form-floating > label {
            padding: 1rem 0.75rem;
        }

        .btn-auth {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        
        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .social-login {
            text-align: center;
            margin-top: 2rem;
        }
        
        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 0.5rem;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-container">
            <div class="auth-inner">
                <div class="auth-image">
                    <div class="auth-image-content">
                        <h3>Welcome to GoTravel</h3>
                        <p>Your journey begins with us. Discover amazing destinations and create unforgettable memories.</p>
                    </div>
                </div>
                <div class="auth-form">
                    <div class="auth-tabs">
                        <div class="slider"></div>
                        <button class="nav-link active" onclick="switchForm('register')">Register</button>
                        <button class="nav-link" onclick="switchForm('login')">Login</button>
                    </div>

                    <div class="form-container">
                        <div class="form-section register-form">
                            <form id="registerForm" novalidate>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                                    <label for="confirm_password">Confirm Password</label>
                                </div>
                                <button type="submit" class="btn btn-auth">Create Account</button>
                            </form>
                        </div>

                        <div class="form-section login-form">
                            <form id="loginForm" novalidate>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="login_email" placeholder="Email" required>
                                    <label for="login_email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="login_password" placeholder="Password" required>
                                    <label for="login_password">Password</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-auth">Sign In</button>
                            </form>
                        </div>
                    </div>

                    <div class="social-login">
                        <p class="text-muted">Or continue with</p>
                        <a href="#" class="social-btn"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function switchForm(type) {
            const formContainer = document.querySelector('.form-container');
            const slider = document.querySelector('.slider');
            const tabs = document.querySelectorAll('.nav-link');
            
            if (type === 'login') {
                formContainer.classList.add('show-login');
                slider.classList.add('login');
                tabs[1].classList.add('active');
                tabs[0].classList.remove('active');
            } else {
                formContainer.classList.remove('show-login');
                slider.classList.remove('login');
                tabs[0].classList.add('active');
                tabs[1].classList.remove('active');
            }
        }

        // Form validation
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', event => {
                event.preventDefault();
                if (!form.checkValidity()) {
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });

        // Password confirmation validation
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');
        if (confirmPassword) {
            confirmPassword.addEventListener('input', function() {
                if (this.value !== password.value) {
                    this.setCustomValidity('Passwords do not match');
                } else {
                    this.setCustomValidity('');
                }
            });
            password.addEventListener('input', function() {
                if (confirmPassword.value !== this.value) {
                    confirmPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmPassword.setCustomValidity('');
                }
            });
        }
    </script>
</body>
</html>






