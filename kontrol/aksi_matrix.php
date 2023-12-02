<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alternatif = $_POST['alternatif'];
    $bobotArray = $_POST['bobot'];
    $skalaArray = $_POST['skala'];

    $query1 = mysqli_query($conn, "SELECT COUNT(*) as jumlah FROM matrixkeputusan WHERE id_alternatif = '$alternatif'");
    $cek = mysqli_fetch_assoc($query1);

    if ($cek['jumlah'] > 0) {
        echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
                <span class='badge badge-pill badge-danger'>Warning !</span>
                    Can't Add Data
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        return false;
    } else {
        $count = count($bobotArray);

        for ($i = 0; $i < $count; $i++) {
            $bobot = $bobotArray[$i];
            $skalaString = $skalaArray[$i];

            $fetchSkalaQuery = mysqli_query($conn, "SELECT id_skala FROM skala WHERE keterangan = '$skalaString'");
            $skalaResult = mysqli_fetch_assoc($fetchSkalaQuery);

            if ($skalaResult) {
                $skala = $skalaResult['id_skala'];

                $tambah = mysqli_query($conn, "INSERT INTO matrixkeputusan (id_alternatif, id_bobot, id_skala) 
                                                VALUES ('$alternatif', '$bobot', '$skala')");

                if ($tambah === false) {
                    echo "Error: " . mysqli_error($conn);
                    exit; 
                }
            } else {
                echo "Error: Skala value not found for '$skalaString'";
                exit;
            }
        }

        header("location:../tabel/tabel_matrix_keputusan.php");
        exit;
    }
}
