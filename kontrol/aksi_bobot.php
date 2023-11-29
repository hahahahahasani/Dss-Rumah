<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $kriteria = $_POST["kriteria"];
    $value = $_POST["value"];

    // input data ke database
    $query = mysqli_query($conn, "INSERT INTO bobot
                    VALUES
                (NULL,'$kriteria','$value')");
    if ($query == true) {
        # code...
        header("location:../tabel/tabel_bobot.php");
    }
}
