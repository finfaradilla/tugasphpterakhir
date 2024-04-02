<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form method="post" action="">
        <div class="form-group row">
            <label for="NIM" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="NIM" name="NIM" placeholder="NIM" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="Nama" name="Nama" placeholder="Nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="Universitas" class="col-4 col-form-label">Universitas</label>
            <div class="col-8">
                <input id="Universitas" name="Universitas" placeholder="Universitas" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="Nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="Nilai" name="Nilai" placeholder="Nilai" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php

require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['NIM'];
    $nama = $_POST['Nama'];
    $universitas = $_POST['Universitas'];
    $nilai = $_POST['Nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $nilai);

    echo '<div class="container mt-5">';
    echo '<table class="table table-bordered">';
    echo '<tr><th>NIM</th><th>Nama</th><th>Universitas</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>';
    echo '<tr>';
    echo '<td>'. $mahasiswa->nim .'</td>';
    echo '<td>'. $mahasiswa->nama .'</td>';
    echo '<td>'. $mahasiswa->universitas .'</td>';
    echo '<td>'. $mahasiswa->nilai .'</td>';
    echo '<td>'. $mahasiswa->calculateGrade() .'</td>';
    echo '<td>'. $mahasiswa->determinePredikat() .'</td>';
    echo '<td>'. $mahasiswa->determineStatus() .'</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
}

?>

</body>
</html>
