<?php
include("../kontrol/config.php");
?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DSS-Rumah</title>
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
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Menu</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
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
                    <li class="menu-item-has-children active dropdown">
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

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Matrix Keputusan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Matrix Keputusan</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic</li>
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Matrix Keputusan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="../kontrol/aksi_matrix.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Alternatif</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="alternatif" id="select" required>
                                                <option>Please select</option>
                                                <?php $alternatif = mysqli_query($conn, "SELECT * FROM alternatif"); ?>
                                                <?php while ($data = mysqli_fetch_array($alternatif)) : ?>
                                                    <option value="<?= $data['id_alternatif'] ?>"><?= $data['nm_alternatif'] ?></option>
                                                <?php endwhile ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    $bobot = mysqli_query($conn, 'SELECT a.id_bobot, b.nm_kriteria, c.id_skala, c.keterangan 
                                FROM bobot a
                                JOIN kriteria b ON a.id_kriteria = b.id_kriteria
                                JOIN skala c ON b.id_kriteria = c.id_kriteria');
                                    $dataSkala = array();
                                    while ($data1 = mysqli_fetch_assoc($bobot)) {
                                        $idBobot = $data1['id_bobot'];
                                        if (!isset($dataSkala[$idBobot])) {
                                            $dataSkala[$idBobot] = array('nm_kriteria' => $data1['nm_kriteria'], 'keterangan' => array());
                                        }
                                        $dataSkala[$idBobot]['keterangan'][] = $data1['keterangan'];
                                    }
                                    foreach ($dataSkala as $idBobot => $data) {
                                    ?>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class="form-control-label"><?= $data['nm_kriteria'] ?></label></div>
                                            <div class="col col-md-9">
                                                <select name="skala[]" id="select" required>
                                                    <option>Please select</option>
                                                    <?php
                                                    foreach ($data['keterangan'] as $keterangan) {
                                                        echo "<option value='$keterangan'>$keterangan</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col"><input type="hidden" id="text-input" name="bobot[]" placeholder="Value" class="form-control" value="<?= $idBobot ?>"></div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-actions form-group"><button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>


</body>

</html>