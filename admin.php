<?php
    include 'koneksi.php';
    $branch_sukabumi = mysqli_query($koneksi,"Select *from tb_absen");
    $sukabumi = mysqli_num_rows($branch_sukabumi);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/splash.png" type="image/png">

    <!-- Title Page-->
    <title>By U Admin |Home</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }
 ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index.html">
                          
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="monitoring.php">
                                <i class="fas fa-desktop"></i>Sistem monitoring
                            </i>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <!-- END HEADER MOBILE-->
        <!-- Sidebar Toggle Button -->
        <button id="sidebar-toggle"></button>
        <!--End Sidebar Toogle Button -->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" id="sidebar">
        <div class="logo">
            <a href="admin.php">
        <h4>
            <img src="assets/employee.png" alt="splash.png" style="width: 50px; height: auto;">
            <span style="color: #0C0E0C;">by.U Admin</span>
            </h4>
        </a>
    </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                          
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="monitoring.php">
                                <i class="fas fa-desktop"></i>Sistem monitoring
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="fas fa-user-times"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h2>Selamat Datang di Dashboard "<?php echo $_SESSION['username'] ?>"</h2>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="row">
         <!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <br>
            <br>
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2">Branch Bogor</h6>
            </div>
            <div class="card-body">
                <?php
                $branch_bogor = mysqli_query($koneksi,"Select*from tb_absen where alamat='bogor'");
                while($bogor = mysqli_fetch_array($branch_bogor)){
                    $nama = $bogor['nama'];
                ?>
                <label><?php echo $nama ?></label>
                <?php
                }
                ?>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    
<!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <br>
            <br>
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2">Branch Sukabumi</h6>
            </div>
            <div class="card-body">
                <?php
                $branch_bogor = mysqli_query($koneksi,"Select*from tb_absen where alamat='sukabumi'");
                while($bogor = mysqli_fetch_array($branch_bogor)){
                    $nama = $bogor['nama'];
                ?>
                <label><?php echo $nama ?></label>
                <?php
                }
                ?>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
</div>    
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="copyright">
            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Cahya Christian Simamora | Universitas Pakuan Bogor</p>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
