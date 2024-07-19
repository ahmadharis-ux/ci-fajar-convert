<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Lexend+Deca:wght@100..900&family=Lexend+Giga:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dark-theme.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>

    <!--page loader-->
    <div class="loader-wrapper">
        <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!--end loader-->

    <!--start wrapper-->
    <div class="wrapper">
        <div class="container container-daftar d-flex justify-content-center mt-5">
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" alt="">
            <div class="ms-2">
                <h1>Daftar</h1>
                <label for="">Silahkan isi data berikut!</label>
            </div>
        </div>
        <form action="" class="form-login">
            <div class="form-group mb-4">
                <input type="text" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control" placeholder="Nomor whatsapp">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Konfirmasi Password">
            </div>
            <div class="form-group-bottom text-center">
                <button type="submit" class="btn btn-lg submit-login mb-2">Daftar</button> <br>
                <label for="">Sudah mempunyai akun?</label><br>
                <a href="<?= base_url('login') ?>"><b>Login</b></a>
            </div>
        </form>
    </div>
    <!--end wrapper-->


    <!--JS Files-->
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/cookies-theme-switcher.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/slick/slick.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="<?= base_url(); ?>assets/js/index.js"></script>
    <script src="<?= base_url(); ?>assets/js/loader.js"></script>


</body>

</html>