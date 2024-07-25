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

        <!-- <div id="navbar" class="d-flex justify-content-between align-items-center">
            <div>
                <a href="#home">
                    <img width="50" src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
                </a>
            </div>
            <div style="font-size: 20px; color:#FDFAE3">
            <i class="bi bi-person"></i> <?= $username; ?>
            </div>
        </div> -->
        <header class="top-header header-lainnya-login align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
                <div class="mx-auto text-center mt-3">
                    <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
                    <h1><?= $username; ?></h1>
                </div>
            </nav>

        </header>
        <!-- end of header -->

        <div class="page-content content-lainnya mt-0">
            <div class="card card-main mt-4">
                <label class="mx-auto" for="">Withdraw</label>
                <div class="line-lainnya mx-auto"></div>
                <div class="d-flex justify-content-around">
                    <img src="<?= base_url(); ?>assets/img/icon/bx_money-withdraw.png" alt="" class="bg-image">
                    <a href="<?= base_url('store_withdraw')?>" class="btn">
                        <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                        Baru
                    </a>
                    <a href="" class="btn">
                        <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                        Riwayat
                    </a>
                </div>
            </div>
            <div class="card card-main mt-4">
                <label class="mx-auto" for="">Setor</label>
                <div class="line-lainnya mx-auto"></div>
                <div class="d-flex justify-content-around">
                    <img src="<?= base_url(); ?>assets/img/icon/bx_transaction.png" alt="" class="bg-image mt-2">

                    <a href="<?= base_url('store_setor'); ?>" class="btn">
                        <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                        Baru
                    </a>
                    <a href="" class="btn">
                        <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                        Riwayat
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-100px";
            }
        }
    </script> -->

    <?= $this->include('layouts/footer_after_login'); ?>