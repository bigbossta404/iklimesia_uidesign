<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/semantic.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/styles.css " type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel='stylesheet' type='text/css'>
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/gif">
    <title>Iklimesia</title>
</head>

<body>
    <header>
        <div class="navigasi">
            <div class="iden">
                <div class="btndaftar">
                    <a href="<?= base_url('daftar') ?>" class="daftar">Daftar</a>
                    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                            <filter id="goo">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <a href="<?= base_url('login') ?>" class="custom-btn login"><span>Login</span></a>
            </div>
        </div>
    </header>
    <main>
        <div class="fixed-action-btn">
            <a id="menu" class="btn-floating btn-large red" onclick="next(0)">
                <i class="fa fa-question"></i>
            </a>
        </div>
        <div class="tap-target" data-target="menu">
            <div class="tap-target-content">
                <h5 class="white-text">Haii..</h5>
                <p class="white-text">Sudah kenalan?, yuk lihat tour sekarang!</p>
            </div>
        </div>
        <div class="main">
            <div class="swiper-container">

                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="main-container">
                                <div class="info">
                                    <div class="boxinfo">
                                        <p>Selamat Datang</p>
                                        <div class="title">
                                            <h1>IKLIMESIA</h1>
                                        </div>
                                        <p>Bersatu menjaga iklim nusantara <br>
                                            demi negeri yang sehat.
                                        </p>
                                        <div class="btn2">
                                            <div class="ui inverted button gabung"><span>Gabung</span></div>
                                            <a class="ui inverted animated button tour" id="tour" tabindex="0">
                                                <div class="visible content">Lihat Tour</div>
                                                <div class="hidden content">
                                                    <i class="fa fa-long-arrow-alt-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="vignette-box">
                                    <img class="vignette" src="<?= base_url('assets/') ?>img/parallax-layer/vignette.png" alt="">
                                </div>
                                <ul id="scene">
                                    <li class="layer" data-depth="0.3"><img class="layerimg" src="<?= base_url('assets/'); ?>img/parallax-layer/layerA.png" alt="image"></li>
                                    <li class="layer" data-depth="0.3"><img class="layerimg" src="<?= base_url('assets/'); ?>img/parallax-layer/layerB.png" alt="image"></li>
                                    <li class="layer" data-depth="0.06"><img class="rumput" src="<?= base_url('assets/'); ?>img/parallax-layer/layerC.png" alt="image"></li>
                                    <li class="layer" data-depth=""><img class="layerimg" src="<?= base_url('assets/'); ?>img/parallax-layer/layerD.png" alt="image"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-container2">
                                <div class="info2">
                                    <h1>Platform relawan kesehatan<br>
                                        lingkungan dan iklim Indonesia
                                    </h1>
                                    <div class="btnslide2">
                                        <div class="ui inverted button gabung2"><span><i class="fas fa-long-arrow-alt-left"></i></span></div>
                                        <a class="ui inverted animated button tour" id="tour" tabindex="0">
                                            <div class="visible content">Dokumentasi</div>
                                            <div class="hidden content">
                                                Kepo'in
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="vignette-box2">
                                    <img class="vignette2" src="<?= base_url('assets/') ?>img/parallax-layer/slide_2/vignetSlide2.png" alt="">
                                </div>
                                <ul id="scene2">
                                    <li class="layer" data-depth="0.10"><img class="layerimg2" src="<?= base_url('assets/'); ?>img/parallax-layer/slide_2/gedung_layer.png" alt="image"></li>
                                </ul>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-container3">
                                <div class="info3">
                                    <h1>Sosialisasi pada usia dini</h1>
                                    <p>Akan pentingnya membuang sampah <br>
                                        pada tempatnya
                                    </p>
                                </div>
                                <div class="vignette-box3">
                                    <img class="vignette3" src="<?= base_url('assets/') ?>img/parallax-layer/slide_3/vgslide3.png" alt="">
                                </div>
                                <ul id="scene3">
                                    <li class="layer" data-depth="0.20"><img class="layerimg3" src="<?= base_url('assets/'); ?>img/parallax-layer/slide_3/layerSlide3.png" alt="image"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            Slide 4
                        </div>

                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
    </main>
    <script src="<?= base_url('assets/'); ?>fontawesome/js/all.min.js"> </script>
    <script src="<?= base_url('assets/'); ?>js/semantic.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
    <script>
        var scene2 = document.getElementById('scene2');
        var parallax = new Parallax(scene2);
    </script>
    <script>
        var scene3 = document.getElementById('scene3');
        var parallax = new Parallax(scene3);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll(".tap-target");
            M.TapTarget.init(elems);
        });

        function next(n) {
            var inst;

            // Get each of the elements
            var elems = document.querySelectorAll(".tap-target");

            var current = n;
            var prev = --n;

            // If a previous target is open, close it.
            if (prev >= 0) {
                inst = M.TapTarget.getInstance(elems[prev]);
                inst.close();
                inst.destroy();
            }

            // Then, open the new target
            inst = M.TapTarget.getInstance(elems[current]);
            inst.open();
        }

        // Close any open targets at the end of the process.
        function closeAll() {
            $('.tap-target').tapTarget('close');
            $('.tap-target').tapTarget('destroy');
        }
    </script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            speed: 2000,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            paginationClickable: false,
            resistanceRatio: 0,
            touchRatio: 0,
            // Navigation arrows
            navigation: {
                nextEl: '.tour',
                prevEl: '.gabung2',

            },

        });
    </script>
</body>

</html>