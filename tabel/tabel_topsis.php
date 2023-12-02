<?php
include "../kontrol/config.php";

$query1 = mysqli_query($conn, "SELECT d.id_matrix, a.nm_alternatif, b.value, c.keterangan FROM alternatif a, bobot b, skala c, matrixkeputusan d 
WHERE a.id_alternatif = d.id_alternatif AND b.id_bobot = d.id_bobot AND c.id_skala = d.id_skala ORDER BY id_matrix");

$query2 = mysqli_query($conn, "SELECT * FROM topsis_pembagi");

$query3 = mysqli_query($conn, "SELECT * FROM topsis_normalisasi");

$query4 = mysqli_query($conn, "SELECT * FROM topsis_terbobot");

$query5 = mysqli_query($conn, "SELECT * FROM topsis_maxmin");

$query6 = mysqli_query($conn, "SELECT * FROM topsis_sipsin");

$query7 = mysqli_query($conn, "SELECT * FROM topsis_nilaiv");
?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DSS Rumah</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Menu</li><!-- /.menu-title -->
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_alternatif.php">Tabel Alternatif</a></li>
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_kriteria.php">Tabel Kriteria</a></li>
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_bobot.php">Tabel Bobot</a></li>
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_skala.php">Tabel Skala</a></li>
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_matrix_keputusan.php">Tabel Matrix Keputusan</a></li>
                            <li><i class="fa fa-table"></i><a href="../tabel/tabel_topsis.php">Metode Topsis</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="../form/form_alternatif.php">Form Alternatif</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="../form/form_kriteria.php">Form Kriteria</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="../form/form_skala.php">Form Skala</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="../form/form_bobot.php">Form Bobot</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="../form/form_matrix.php">Form Matriks Keputusan</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <!-- matrix keputusan -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Matrix Keputusan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Matrix Keputusan</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Matrix</th>
                                            <th>Nama Alternatif</th>
                                            <th>Value</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($matrix = mysqli_fetch_assoc($query1)) : ?>
                                            <tr>
                                                <td><?= $matrix['id_matrix'] ?></td>
                                                <td><?= $matrix['nm_alternatif'] ?></td>
                                                <td><?= $matrix['value'] ?></td>
                                                <td><?= $matrix['keterangan'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- pembagi -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Pembagi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pembagi</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Bagi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($bagi = mysqli_fetch_assoc($query2)) : ?>
                                            <tr>
                                                <td><?= $bagi['id_kriteria'] ?></td>
                                                <td><?= $bagi['nm_kriteria'] ?></td>
                                                <td><?= $bagi['bagi'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- Normalisasi -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Normalisasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Normalisasi</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Matrix</th>
                                            <th>ID Alternatif</th>
                                            <th>Nama Alternatif</th>
                                            <th>ID Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>ID Bobot</th>
                                            <th>Value</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                            <th>Normalisasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($normalisasi = mysqli_fetch_assoc($query3)) : ?>
                                            <tr>
                                                <td><?= $normalisasi['id_matrix'] ?></td>
                                                <td><?= $normalisasi['id_alternatif'] ?></td>
                                                <td><?= $normalisasi['nm_alternatif'] ?></td>
                                                <td><?= $normalisasi['id_kriteria'] ?></td>
                                                <td><?= $normalisasi['nm_kriteria'] ?></td>
                                                <td><?= $normalisasi['id_bobot'] ?></td>
                                                <td><?= $normalisasi['value'] ?></td>
                                                <td><?= $normalisasi['nilai'] ?></td>
                                                <td><?= $normalisasi['keterangan'] ?></td>
                                                <td><?= $normalisasi['normalisasi'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- Terbobot -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Terbobot</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Terbobot</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Matrix</th>
                                            <th>ID Alternatif</th>
                                            <th>Nama Alternatif</th>
                                            <th>ID Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>ID Bobot</th>
                                            <th>Value</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                            <th>Normalisasi</th>
                                            <th>Terbobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($terbobot = mysqli_fetch_assoc($query4)) : ?>
                                            <tr>
                                                <td><?= $terbobot['id_matrix'] ?></td>
                                                <td><?= $terbobot['id_alternatif'] ?></td>
                                                <td><?= $terbobot['nm_alternatif'] ?></td>
                                                <td><?= $terbobot['id_kriteria'] ?></td>
                                                <td><?= $terbobot['nm_kriteria'] ?></td>
                                                <td><?= $terbobot['id_bobot'] ?></td>
                                                <td><?= $terbobot['value'] ?></td>
                                                <td><?= $terbobot['nilai'] ?></td>
                                                <td><?= $terbobot['keterangan'] ?></td>
                                                <td><?= $terbobot['normalisasi'] ?></td>
                                                <td><?= $terbobot['terbobot'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!--  Maxmin -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Maximum & Minimum</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Maximum & Minimum</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Matrix</th>
                                            <th>ID Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Maximum</th>
                                            <th>Minimum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($maxmin = mysqli_fetch_assoc($query5)) : ?>
                                            <tr>
                                                <td><?= $maxmin['id_matrix'] ?></td>
                                                <td><?= $maxmin['id_kriteria'] ?></td>
                                                <td><?= $maxmin['nm_kriteria'] ?></td>
                                                <td><?= $maxmin['maximum'] ?></td>
                                                <td><?= $maxmin['minimum'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!--  Sip Sin -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Sip & Sin</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Sip & Sin</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Alternatif</th>
                                            <th>D Plus</th>
                                            <th>D Min</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($sipsin = mysqli_fetch_assoc($query6)) : ?>
                                            <tr>
                                                <td><?= $sipsin['id_alternatif'] ?></td>
                                                <td><?= $sipsin['dplus'] ?></td>
                                                <td><?= $sipsin['dmin'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!--  Nilai V -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tabel Preferensi Alternatif</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Preferensi Alternatif</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Alternatif</th>
                                            <th>D Plus</th>
                                            <th>D Min</th>
                                            <th>Nilai V</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($nilaiv = mysqli_fetch_assoc($query7)) : ?>
                                            <tr>
                                                <td><?= $nilaiv['id_alternatif'] ?></td>
                                                <td><?= $nilaiv['dplus'] ?></td>
                                                <td><?= $nilaiv['dmin'] ?></td>
                                                <td><?= $nilaiv['nilaiv'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>


</body>

</html>