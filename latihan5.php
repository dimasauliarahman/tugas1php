<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $status;
    public $grade;

    public function __construct($nim, $nama, $kuliah)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->calculateStatus();
        $this->calculateGrade();
    }

    private function calculateStatus()
    {
        if ($this->kuliah >= 65) {
            $this->status = 'Lulus';
        } else {
            $this->status = 'Tidak Lulus';
        }
    }

    private function calculateGrade()
    {
        if ($this->kuliah >= 85) {
            $this->grade = 'A/Sangat Memuaskan';
        } elseif ($this->kuliah >= 70) {
            $this->grade = 'B/Memuaskan';
        } elseif ($this->kuliah >= 69) {
            $this->grade = 'C/Cukup';
        } elseif ($this->kuliah >= 60) {
            $this->grade = 'D/Kurang';
        } else {
            $this->grade = 'E/Sangat Kurang';
        }
    }

    public function display()
    {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>NIM</th>';
        echo '<th>Nama</th>';
        echo '<th>Nilai</th>';
        echo '<th>Status</th>';
        echo '<th>Grade/Predikat</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>'. $this->nim .'</td>';
        echo '<td>'. $this->nama .'</td>';
        echo '<td>'. $this->kuliah .'</td>';
        echo '<td>'. $this->status .'</td>';
        echo '<td>'. $this->grade .'</td>';
        echo '</tr>';
        echo '</table>';
    }
}

class Universitas
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function display()
    {
        echo '<h1>'. $this->nama .'</h1>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];

    $ns1 = new Mahasiswa($nim, $nama, $kuliah);
    $universitas = new Universitas("Universitas Gunadarma"); 
    $universitas->display();
    $ns1->display();
}

?>

<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <form method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Nilai: <input type="text" name="kuliah"><br>
        <input type="submit">
    </form>
</body>
</html>
