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

<body class="mx-auto bg-reset" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>

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
        <!--start to header-->
        <header class="top-header header-lupa-password align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
                <div class="mx-auto text-center mt-3">
                    <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
                    <h1>Buat Password</h1>
                    <label for="">Silahkan isi data berikut untuk buat password anda!</label>
                </div>
            </nav>
        </header>
        <!-- end of header -->
        <form action="" class="form-reset">
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Konfirmasi Password">
            </div>
            <div class="form-group-bottom text-center">
                <button type="submit" class="btn btn-lg submit-reset mb-2">Buat Password</button> <br>
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