<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tfoot {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Hasil Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = array(
                array("Rahman", 80),
                array("Rizky", 40),
                array("Raihan", 90),
                array("Ifran", 95),
                array("Gilang", 55),
                array("Faiq", 85),
                array("Guinevere", 75),
                array("Arhan", 60),
                array("Jani", 87),
                array("Ayu", 65)
            );

            $totalNilai = 0;
            $jumlahMahasiswa = count($mahasiswa);
            $nilaiTertinggi = PHP_INT_MIN;
            $nilaiTerendah = PHP_INT_MAX;

            foreach ($mahasiswa as $key => $mhs) {
                $nama = $mhs[0];
                $nilai = $mhs[1];

                // Ternary minimal nilai 65 dinyatakan Lulus
                $keterangan = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";

                // Grade IF Multi Kondisi => A, B, C, D, E
                if ($nilai >= 85) {
                    $grade = "A";
                } elseif ($nilai >= 75) {
                    $grade = "B";
                } elseif ($nilai >= 65) {
                    $grade = "C";
                } elseif ($nilai >= 55) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }

                // Predikat Switch Case dari Grade => Memuaskan, Bagus, Cukup, Kurang, Buruk
                switch ($grade) {
                    case 'A':
                        $predikat = "Memuaskan";
                        break;
                    case 'B':
                        $predikat = "Bagus";
                        break;
                    case 'C':
                        $predikat = "Cukup";
                        break;
                    case 'D':
                        $predikat = "Kurang";
                        break;
                    default:
                        $predikat = "Buruk";
                        break;
                }

                // Agregat nilai
                $totalNilai += $nilai;
                if ($nilai > $nilaiTertinggi) {
                    $nilaiTertinggi = $nilai;
                }
                if ($nilai < $nilaiTerendah) {
                    $nilaiTerendah = $nilai;
                }

                echo "<tr>
                        <td>".($key + 1)."</td>
                        <td>$nama</td>
                        <td>$nilai</td>
                        <td>$grade</td>
                        <td>$predikat</td>
                    </tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total Mahasiswa: <?php echo $jumlahMahasiswa; ?></td>
                <td colspan="3">Total Nilai: <?php echo $totalNilai; ?></td>
            </tr>
            <tr>
                <td colspan="2">Nilai Tertinggi: <?php echo $nilaiTertinggi; ?></td>
                <td colspan="3">Nilai Terendah: <?php echo $nilaiTerendah; ?></td>
            </tr>
            <tr>
                <td colspan="5">&copy; Dibuat oleh Dimasaulia 2024 Kampus Merdeka</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
