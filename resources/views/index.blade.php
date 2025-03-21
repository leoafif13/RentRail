<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background: #fcf5e5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .navbar {
            background: #ECB53D;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar .logo {
            text-decoration: none;
            display: flex;
            color: #20492F;
            font-weight: bold;
            align-items: center;
        }

        .logo img {
            width: 50px;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-top: 10px;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin-right: 20px;
        }

        .navbar .nav-links li {
            margin-left: 20px;
        }

        .navbar .nav-links a {
            color: #20492F;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .navbar .nav-links a:hover {
            color: white;
        }

        .content {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
            max-width: 90%; /* Responsif dengan lebar maksimum */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .content img {
            max-width: 300px;
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .content .text {
            font-size: 18px;
            color: #333;
            max-width: 500px;
        }

        .content .text h2 {
            margin-bottom: 20px;
        }

        .btn {
            background: black;
            color: #fcf5e5;
            text-decoration: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: white;
            color: black;
        }


        @media (max-width: 700px) {
            .navbar .nav-links a {
            font-size: 0.7rem;
            }
            .logo img {
            width: 40px;
            }
            .content {
                padding: 10px;
            }

            .content img {
                max-width: 150px;
            }

            .content .text {
                font-size: 16px;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
        }

    </style>
</head>
<body>
  
    <nav class="navbar">
        <div class="container">
            <div class="logo"><img src="customer/Gambar/RentRail.png" alt="Logo"><h3>RentRail</h3></div>
            <ul class="nav-links">
                <li><a href="customer/kontak.php">Kontak</a></li>
                <li><a href="customer/tentangkami.php">Tentang Kami</a></li>
                <li><a href="customer/masuk.php">Masuk</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
    <img src="customer/Gambar/rentrail1.png" alt="logo">
    <div class="text">
      <h1>Halo, This is RentRail</h1>
      <h2>Exciting Adventures Start Here!</h2>
      <p>Get your best experience by a good 
        <br> tools from us. We are serve with love 
        <br> and care </p>
      <a class="btn" href="customer/masuk.php">Lihat Selengkapnya</a>
    </div>
  </div>
</body>
</html>
</div>
