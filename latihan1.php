<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Website Dimas</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Website Dimas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datatable.php">Datatables</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
        <p>
            <?php
            // Data diri Dimas
            $nama = "Dimas Aulia Rahman";
            $tempat_tanggal_lahir = "Jakarta, 10 April 2003";
            $domisili = "Bekasi";
            $makanan_favorit = "Martabak";
            $hobi = "Badminton";
            $telepon = "085880548723";
            $jurusan = "informatika";
            $warna_kesukaan = "Hitam";
            $kendaraan_impian = "bmw m4";

            echo "Saya $nama adalah Mahasiswa semester 6 di Universitas Gunadarma dengan jurusan Teknik Informatika. Saya mampu bekerja sama dengan tim dengan loyalitas dan tanggung jawab yang tinggi, aktif, kreatif, serta memiliki beberapa softskill salah satunya mampu menghafal dan memahami sesuatu yang baru dengan baik dan cepat.";

            echo "<br/><br/>";
            echo "<strong>Biodata</strong><br/>";
            echo "<ul type='square'>";
            echo "<li>Tempat, Tanggal lahir : $tempat_tanggal_lahir</li>";
            echo "<li>Domisili : $domisili</li>";
            echo "<li>Makanan Favorit : $makanan_favorit</li>";
            echo "<li>Hobi : $hobi</li>";
            echo "<li>telepon : $telepon</li>";
            echo "<li>jurusan : $jurusan</li>";
              echo "<li>warna kesukaan : $warna_kesukaan</li>";
                echo "<li>kendaraan impian : $kendaraan_impian</li>";
            echo "</ul>";
            ?>
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>&copy; Design by: Dimasaulia &copy; Kampus Merdeka 2024
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
