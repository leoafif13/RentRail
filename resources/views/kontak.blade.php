<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
    padding-top: 70px;
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
    margin: 10px 10px 10px 0
}

@media (max-width: 700px ) {
    .logo img {
        width: 40px;
        margin-left: 10px;
    }
}

.navbar .nav-links {
    list-style: none;
    display: flex;
    margin-right: 20px;
}

.navbar .nav-links li {
    margin-left: 20px;
    test-align: center;
}

.navbar .nav-links a {
    color: #20492F;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s;
}

.navbar .nav-links a:hover {
    color: white;
}

@media (max-width: 700px) {
    .navbar .nav-links a {
        font-size: 0.7rem;
    }
    }

.contact-container {
    display: flex;
    width: 80%;
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-info,
.contact-form {
    flex: 1;
    padding: 30px;
}

.contact-info {
    border-radius: 10px 0  0 10px;
    background-color: #1b3b32;
    color: white;
}

.contact-info h2 {
    margin-top: 0;
}

.contact-info p,
.contact-info a {
    margin: 10px 0;
    color: white;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

.contact-info i {
    margin-right: 10px;
}

.contact-form h2 {
    margin-top: 0;
    color: #1b3b32;
}

.contact-form p {
    margin: 10px 0;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form button {
    background-color: #d4a017;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #b38e14;
}
@media (max-width: 700px) {
    .contact-container {
        flex-direction: column;
        width: 90%;
    }

    .contact-info,
    .contact-form {
        width: 100%;
        border-radius: 0;
        padding: 20px;
    }

    .contact-info {
        border-radius: 10px 10px 0 0;
    }

    .contact-form {
        border-radius: 0 0 10px 10px;
    }
}

    </style>
 </head>
 <body>
    <nav class="navbar">
        <div class="container">
            <div class="logo"><img src="Gambar/RentRail.png" alt="Logo"><h3>RentRail</h3></div>
            <ul class="nav-links">
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="masuk.php">Masuk</a></li>
            </ul>
        </div>
    </nav>
    <div class="contact-container">
        <div class="contact-info">
         <h2>HUBUNGI KAMI</h2>
         <p><i class="fas fa-map-marker-alt"></i>Politeknik Negeri Batam</p>
         <p><i class="fas fa-envelope"></i>rentrail@gmail.com</p>
         <p><i class="fas fa-phone"></i>+3367 8647 1794</p>
         <p><i class="fab fa-instagram"></i>@rentrailgo.ig</p>
         <p><i class="fab fa-facebook"></i>rentrailgo.fb</p>
         <p><i class="fab fa-twitter"></i>rentrailgo.twit</p>
        </div>
        <div class="contact-form">
        <h2>Hubungi Kami</h2>
        <p>Jangan ragu untuk menghubungi kami di bawah ini!</p>
        <form method="post">
            <input placeholder="Nama" type="text" name="nama" required>
            <input placeholder="Email" type="email"  name="email" required>
            <textarea placeholder="Pesan" type="text" name="isi_pesan" required></textarea>
            <button type="submit" name="kirim">Kirim</button>
            </form>
    </div>
 </body>
</html>