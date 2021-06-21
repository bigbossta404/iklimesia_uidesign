<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/daftar.css " type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome/css/all.min.css">
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/gif">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <title>login</title>
</head>

<body>
    <video muted autoplay loop muted class="videbg" src="<?= base_url('assets/') ?>video/formbg.mp4"></video>
    <div class="container" id="container">

        <div class="form">
            <div class="form-container sign-up-container">
                <form action="<?= base_url('dashboard') ?>">
                    <h1>Buat Akun</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <span>atau pakai emailmu</span>
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Let's Go</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="<?= base_url('dashboard') ?>">
                    <h1>Masuk</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <span>atau pakai akunmu</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Lupa akun yaa?</a>
                    <button>Masuk</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Sudah Gabung?</h1>
                        <p>Biar semakin terkoneksi dengan kami login yuk!</p>
                        <button class="ghost" id="signIn">Masuk</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Ayo Bergabung!</h1>
                        <p>Daftarkan data diri anda dan mulai gelorakan bumi sehat!</p>
                        <button class="ghost" id="signUp">Daftar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>fontawesome/js/all.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
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
</body>

</html>