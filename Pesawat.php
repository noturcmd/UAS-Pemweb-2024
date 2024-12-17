<html>
<head>
    <title>Flight Ticket Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
        }
        nav ul {
            list-style-type: none; /* Menghilangkan bullet point */
            padding: 0;
            margin: 0;
            display: flex; /* Menyusun item secara horizontal */
        }

        nav ul li {
            margin-right: 20px; /* Memberikan jarak antar item */
        }

        nav ul li a {
            text-decoration: none; /* Menghilangkan garis bawah pada link */
            color: black; /* Warna teks */
            font-size: 16px; /* Ukuran font */
            padding: 10px 15px; /* Padding untuk membuat link lebih besar */
            border-radius: 5px; /* Membuat sudut link lebih melengkung */
        }

        nav ul li a:hover {
            background-color: #f0f0f0; /* Warna latar saat hover */
        }

        nav ul li a.active {
            background-color: #007bff; /* Warna latar untuk link aktif */
            color: white; /* Warna teks untuk link aktif */
        }
        .main {
            position: relative;
            text-align: center;
            color: white;
        }
        .main img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
        .main .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: left;
            max-width: 500px;
            width: 100%;
        }
        .main .overlay h1 {
            font-size: 36px;
            margin: 0;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .main .overlay .search-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            color: #333;
        }
        .main .overlay .search-box .form-group {
            margin-bottom: 15px;
        }
        .main .overlay .search-box .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .main .overlay .search-box .form-group input,
        .main .overlay .search-box .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .main .overlay .search-box .form-group .toggle {
            display: flex;
            align-items: center;
        }
        .main .overlay .search-box .form-group .toggle input {
            margin-left: 10px;
        }
        .main .overlay .search-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .main .overlay .search-box button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <input type="text" placeholder="Cari Tiket Pesawat">
        <nav>
            <ul>
                <li><a href="Hotel.php">Hotel</a></li>
                <li><a href="Travel.php">Travel</a></li>
                <li><a href="Kereta.php">Kereta</a></li>
                <li><a href="Pesawat.php" class="active">Pesawat</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <img src="https://storage.googleapis.com/a1aa/image/fbnIYbaX8uR2cqfDxxxyE7xDM4Exdd84ynIV9a5ycQrm3a4TA.jpg" alt="Airplane flying over clouds">
        <div class="overlay">
            <h1>Cek Harga Tiket Pesawat Online Murah dan Promo Hari Ini</h1>
            <div class="search-box">
                <div class="form-group">
                    <label for="from">Dari</label>
                    <input type="text" id="from" value="Jakarta JKTC">
                </div>
                <div class="form-group">
                    <label for="to">Ke</label>
                    <input type="text" id="to" placeholder="Mau ke mana?">
                </div>
                <div class="form-group">
                    <label for="departure">Pergi</label>
                    <div class="toggle">
                        <input type="text" id="departure" value="Sab, 7 Des">
                        <label for="roundtrip">Pulang-pergi?</label>
                        <input type="checkbox" id="roundtrip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="passengers">1 Penumpang, Ekonomi</label>
                    <input type="text" id="passengers" value="1 Penumpang, Ekonomi">
                </div>
                <button>Ayo Cari</button>
            </div>
        </div>
    </div>
</body>
</html>
