<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="<?= base_url('assets/') ?>css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/sweetalert2.min.css">
    <link href="<?= base_url('assets/') ?>css/demo.css " rel="stylesheet" />
    <title>Dashboard</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('dashboard/akun') ?>">
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
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fas fa-home iconfas"></i>
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Statistik Kegiatanmu</h4>
                                    <p class="card-category">Berdasarkan kegiatan terakhir</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Partisipasi
                                        <i class="fa fa-circle text-danger"></i> Tidak Hadir
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Kehadiran misi terakhir 2 hari lalu
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Misi Disekitarmu</h4>
                                    <p class="card-category">Daftar kegiatan yang ada</p>
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Sampah di sekitar malioboro semakin gila, mari gotong royong bersihkan."</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link" id="skip">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Agenda kegiatan sosialisasi reboisasi dan tata cara penanaman di sekolah dasar Se-DIY.</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Pengguna kendaraan di Jogja semakin masive, yuk ikut sebar lembaran untuk menggunakan kendaraan secukupnya!
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Mangrove Conservation Project di pantai Gunung Kidul</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Minggu Sebar (sepedahan bareng), Start lapangan UGM sampai Malioboro.</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <li class="fas fa-thumbtack"></li>
                                                    </td>
                                                    <td>Lomba ide kreatif pengurangan limbah emisi</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link" id="gas">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
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
    <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"> </script>
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
        const btn = document.getElementById('gas');
        btn.addEventListener('click', function() {
            Swal.fire({
                title: 'Yakin Ambil Misi?',
                text: "Pilih batal kalau gk jadi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, Gasken!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Partisipasi Berhasil',
                        'Mantap, kegiatanmu sudah ditambah dalam misi.',
                        'success'
                    )
                }
            })
        })
    </script>
    <script>
        const skip = document.getElementById('skip');
        skip.addEventListener('click', function() {

            Swal.fire({
                title: 'Yakin Lewati?',
                text: "Kamu tidak akan mendapatkan momen tersebut lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Lewati!',
                cancelButtonText: 'Jangan!',
                reverseButtons: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Dilewati!',
                        'Kamu melewati Kegiatan tersedia.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire(
                        'Hufff..',
                        'Untung gk jadi diskip',
                        'error'
                    )
                }
            })
        })
    </script>
</body>

</html>