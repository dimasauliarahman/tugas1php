<?php

// Array produk dan harga
$produk = array(
    "TV" => 1250000,
    "Kulkas" => 1500000,
    "Mesin Cuci" => 1000000,
    "AC" => 2000000
);

// Mendapatkan data dari form
$namaPelanggan = isset($_POST["namaPelanggan"]) ? $_POST["namaPelanggan"] : '';
$produkPilihan = isset($_POST["produkPilihan"]) ? $_POST["produkPilihan"] : '';
$jumlahBeli = isset($_POST["jumlahBeli"]) ? $_POST["jumlahBeli"] : '';

// Inisialisasi variabel
$totalBelanja = 0;
$diskon = 0;
$ppn = 0;
$hargaBersih = 0;

if (!empty($namaPelanggan) && !empty($produkPilihan) && !empty($jumlahBeli)) {
    // Menghitung total belanja jika produk pilihan tersedia dalam array produk
    if (isset($produk[$produkPilihan])) {
        // Menghitung total belanja
        $totalBelanja = $produk[$produkPilihan] * $jumlahBeli;

        // Menghitung diskon
        $diskon = 0.2 * $totalBelanja;

        // Menghitung PPN
        $ppn = 0.1 * ($totalBelanja - $diskon);

        // Menghitung harga bersih
        $hargaBersih = $totalBelanja - $diskon + $ppn;
    } else {
        // Produk pilihan tidak valid
        echo "Produk pilihan tidak valid.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>
<body>
    <h1>Form Belanja</h1>

    <form method="post">
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" id="namaPelanggan" name="namaPelanggan" value="<?php echo $namaPelanggan; ?>">

        <br>

        <label for="produkPilihan">Produk Pilihan:</label>
        <select id="produkPilihan" name="produkPilihan">
            <?php
            foreach ($produk as $nama => $harga) {
                echo "<option value=\"$nama\">$nama</option>";
            }
            ?>
        </select>

        <br>

        <label for="jumlahBeli">Jumlah Beli:</label>
        <input type="number" id="jumlahBeli" name="jumlahBeli" value="<?php echo $jumlahBeli; ?>">

        <br>

        <button type="submit">Hitung</button>
    </form>

    <br>

    <?php
    if (isset($namaPelanggan) && isset($produkPilihan) && isset($jumlahBeli)) {
        if (isset($produk[$produkPilihan])) {
            ?>
            <h2>Hasil Perhitungan</h2>

            <p>Nama Pelanggan: <?php echo $namaPelanggan; ?></p>
            <p>Produk Pilihan: <?php echo $produkPilihan; ?></p>
            <p>Jumlah Beli: <?php echo $jumlahBeli; ?></p>

            <br>

            <table border="1">
                <tr>
                    <th>Harga Satuan</th>
                    <th>Total Belanja</th>
                    <th>Diskon</th>
                    <th>PPN</th>
                    <th>Harga Bersih</th>
                </tr>
                <tr>
                    <td>Rp. <?php echo number_format($produk[$produkPilihan]); ?></td>
                    <td>Rp. <?php echo number_format($totalBelanja); ?></td>
                    <td>Rp. <?php echo number_format($diskon); ?></td>
                    <td>Rp. <?php echo number_format($ppn); ?></td>
                    <td>Rp. <?php echo number_format($hargaBersih); ?></td>
                </tr>
            </table>
            <?php
        } else {
            // Produk pilihan tidak valid
            echo "Produk pilihan belum tersedia.";
        }
    }
    ?>
</body>
</html>