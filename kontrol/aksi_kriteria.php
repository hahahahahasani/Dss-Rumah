<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $kriteria = $_POST["nm_kriteria"];

    // input data ke database
    $query = mysqli_query($conn, "INSERT INTO kriteria
                    VALUES
                (NULL,'$kriteria')");
    if ($query == true) {
        # code...
        header("location:../tabel/tabel_kriteria.php");
    }
}
