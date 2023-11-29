<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $alternatif = $_POST["nm_alternatif"];

    // input data ke database
    $query = mysqli_query($conn, "INSERT INTO alternatif
                    VALUES
                (NULL,'$alternatif')");
    if ($query == true) {
        # code...
        header("location:../tabel/tabel_alternatif.php");
    }
}
