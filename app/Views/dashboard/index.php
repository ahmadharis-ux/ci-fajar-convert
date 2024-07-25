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
        <header class="top-header header-dashboard-login align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
                <div class="mx-auto text-center mt-3">
                    <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
                    <h1><?= $username; ?></h1>
                    <div class="d-flex justify-content-around">
                        <div class="card me-2">
                            <div class="d-flex align-items-center">
                                <div class="icon mx-2 mt-2"><i class="bi bi-wallet heading"></i></div>
                                <div class="label text-start">
                                    <label for="" class="title">Saldo</label><br>
                                    <?php
                                    function format_saldo($saldo)
                                    {
                                        if ($saldo >= 1000000000) {
                                            return number_format($saldo / 1000000000, 1) . 'B';
                                        } elseif ($saldo >= 1000000) {
                                            return number_format($saldo / 1000000, 1) . 'M';
                                        } elseif ($saldo >= 1000) {
                                            return number_format($saldo / 1000, 1) . 'K';
                                        } else {
                                            return number_format($saldo);
                                        }
                                    }
                                    ?>
                                    <label for="" class="saldo"><b>Rp. <?= format_saldo($saldo); ?></b></label>
                                </div>
                            </div>
                        </div>
                        <div class="card ms-2">
                            <div class="d-flex align-items-center">
                                <div class="icon mx-2 mt-2"><i class="bi bi-receipt heading"></i></div>
                                <div class="label text-start">
                                    <label for="" class="title">Transaksi</label> <br>
                                    <?php
                                    function format_transaksi($transaksi)
                                    {
                                        if ($transaksi >= 1000000000) {
                                            return number_format($transaksi / 1000000000, 1) . 'B';
                                        } elseif ($transaksi >= 1000000) {
                                            return number_format($transaksi / 1000000, 1) . 'M';
                                        } elseif ($transaksi >= 1000) {
                                            return number_format($transaksi / 1000, 1) . 'K';
                                        } else {
                                            return number_format($transaksi);
                                        }
                                    }
                                    ?>
                                    <label for="" class="saldo"><b>Rp. <?= format_transaksi($transaksi); ?></b></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>
        <!-- end of header -->

        <div class="page-content content-dashboard mt-0">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url(); ?>assets/img/example-image/banner-baru.png" class="d-block w-100" alt="<?= base_url(); ?>assets/img/example-image/banner-baru.png">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url(); ?>assets/img/example-image/banner-baru.png" class="d-block w-100" alt="<?= base_url(); ?>assets/img/example-image/banner-baru.png">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url(); ?>assets/img/example-image/banner-baru.png" class="d-block w-100" alt="<?= base_url(); ?>assets/img/example-image/banner-baru.png">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="">
                    <div class="card mt-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn  btn-sm">XL/Axis</button>
                            <div class="datetime">
                                17/Aug/2024 <br>
                                <div class="date">05:30</div>
                            </div>
                        </div>
                        <div class="d-flex product justify-content-center">
                            <div class="persen">85%</div>
                            <div class="line p-0 mx-4 my-2"></div>
                            <div class="price ">
                                Rp. 20.000 <br>
                                s/d <br>
                                Rp. 2.000.000 
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mt-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn  btn-sm">Indosat</button>
                            <div class="datetime">
                                17/Aug/2024 <br>
                                <div class="date">05:30</div>
                            </div>
                        </div>
                        <div class="d-flex product justify-content-center">
                            <div class="persen">85%</div>
                            <div class="line p-0 mx-4 my-2"></div>
                            <div class="price ">
                                Rp. 20.000 <br>
                                s/d <br>
                                Rp. 2.000.000 
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mt-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn  btn-sm">Telkomsel</button>
                            <div class="datetime">
                                17/Aug/2024 <br>
                                <div class="date">05:30</div>
                            </div>
                        </div>
                        <div class="d-flex product justify-content-center">
                            <div class="persen">85%</div>
                            <div class="line p-0 mx-4 my-2"></div>
                            <div class="price ">
                                Rp. 20.000 <br>
                                s/d <br>
                                Rp. 2.000.000 
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mt-4">
                        <div class="d-flex justify-content-between">
                            <button class="btn  btn-sm">Three</button>
                            <div class="datetime">
                                17/Aug/2024 <br>
                                <div class="date">05:30</div>
                            </div>
                        </div>
                        <div class="d-flex product justify-content-center">
                            <div class="persen">85%</div>
                            <div class="line p-0 mx-4 my-2"></div>
                            <div class="price ">
                                Rp. 20.000 <br>
                                s/d <br>
                                Rp. 2.000.000 
                            </div>
                        </div>
                    </div>
                </a>
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