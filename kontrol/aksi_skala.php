<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $kriteria = $_POST["kriteria"];
    $value = $_POST["value"];
    $keterangan = $_POST["keterangan"];

    // input data ke database
    $query = mysqli_query($conn, "INSERT INTO skala
                    VALUES
                (NULL,$kriteria,'$value','$keterangan')");
    if ($query == true) {
        # code...
        header("location:../tabel/tabel_skala.php");
    }
}
