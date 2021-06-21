<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="<?= base_url('assets/') ?>css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/akun.css">
    <link href="<?= base_url('assets/') ?>css/demo.css " rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel='stylesheet' type='text/css'>
    <title>Akun</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?= base_url('assets/') ?>img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        IKLIMESIA
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-alt"></i>
                            <p>Akun Saya</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('dashboard/misi') ?>">
                            <i class="fas fa-fist-raised"></i>
                            <p>Misi</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('dashboard/pengaturan') ?>">
                            <i class="fas fa-cog"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('dashboard/tentang') ?>">
                            <i class="fas fa-info-circle"></i>
                            <p>About</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Akun </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fas fa-user-alt iconfas"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fas fa-bell fasbell"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('dashboard/akun') ?>">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('utama') ?>">
                                    <span class="no-icon">Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tab active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Privasi</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-3 fotocontent">
                                        <div class="row">
                                            <div class="pp">
                                                <img class="mypp" src="<?= base_url('assets/') ?>img/pp1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form class="formupload">
                                                <div class="form-group upload">
                                                    <a href="#" class="uploadbutton" onclick="document.getElementById('getFile').click()">Unggah</a>
                                                    <input type='file' id="getFile" style="display:none">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <form>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Nama Depan</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Belakang</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Bio</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Emailmu@mail.co.id">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">No Telepon</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="cth. 082120xxxxxx">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3 alamat">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Provinsi</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Pilih Provinsi</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Kota / Kab</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Pilih Kota</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4 submit">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                <div class="col-sm-4 batal">
                                                    <button type="button" class="btn btn-secondary">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-5 passcontent">
                                        <form>
                                            <h2>Ganti Password</h2>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password Lama</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Lama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password Baru</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Baru">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ulangi Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ulangi Password">
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary btn-block">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Dokumentasi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Q & A
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <b>Kelompok 5</b>, Wonderful Indonesia
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url('assets/'); ?>fontawesome/js/all.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?= base_url('assets/') ?>js/plugins/bootstrap-switch.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="<?= base_url('assets/') ?>js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets/') ?>js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="<?= base_url('assets/') ?>js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url('assets/') ?>js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

        });
    </script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>

</html>