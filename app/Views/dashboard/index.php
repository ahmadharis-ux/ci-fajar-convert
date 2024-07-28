<?= $this->include('layouts/header_satu'); ?>
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
    <a>
        <div class="card mt-4">
            <div class="row d-flex justify-content-center mb-1">
                <span class="tag-special-rate">
                    Special Rate
                </span>
            </div>
            <div class="scroll-container">
                <div class="row mx-auto">
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="col card-special-rate">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="card mt-4">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button class="btn  btn-sm">XL/Axis</button>
                    <div class="datetime">
                        17/Aug/2024 <br>
                        <div class="date">05:30</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex product justify-content-center">
                    <div class="card-special" style="margin-right: 20px;">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="persen">85%</div>
                    <div class="line p-0 mx-4 my-2"></div>
                    <div class="price ">
                        Rp. 20.000 <br>
                        s/d <br>
                        Rp. 2.000.000
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="card mt-4">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button class="btn  btn-sm">XL/Axis</button>
                    <div class="datetime">
                        17/Aug/2024 <br>
                        <div class="date">05:30</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex product justify-content-center">
                    <div class="card-special" style="margin-right: 20px;">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="persen">85%</div>
                    <div class="line p-0 mx-4 my-2"></div>
                    <div class="price ">
                        Rp. 20.000 <br>
                        s/d <br>
                        Rp. 2.000.000
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="card mt-4">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button class="btn  btn-sm">XL/Axis</button>
                    <div class="datetime">
                        17/Aug/2024 <br>
                        <div class="date">05:30</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex product justify-content-center">
                    <div class="card-special" style="margin-right: 20px;">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="persen">85%</div>
                    <div class="line p-0 mx-4 my-2"></div>
                    <div class="price ">
                        Rp. 20.000 <br>
                        s/d <br>
                        Rp. 2.000.000
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="card mt-4">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button class="btn  btn-sm">XL/Axis</button>
                    <div class="datetime">
                        17/Aug/2024 <br>
                        <div class="date">05:30</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex product justify-content-center">
                    <div class="card-special" style="margin-right: 20px;">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="persen">85%</div>
                    <div class="line p-0 mx-4 my-2"></div>
                    <div class="price ">
                        Rp. 20.000 <br>
                        s/d <br>
                        Rp. 2.000.000
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="card mt-4">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button class="btn  btn-sm">XL/Axis</button>
                    <div class="datetime">
                        17/Aug/2024 <br>
                        <div class="date">05:30</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex product justify-content-center">
                    <div class="card-special" style="margin-right: 20px;">
                        <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
                    </div>
                    <div class="persen">85%</div>
                    <div class="line p-0 mx-4 my-2"></div>
                    <div class="price ">
                        Rp. 20.000 <br>
                        s/d <br>
                        Rp. 2.000.000
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<?= $this->include('layouts/footer_after_login'); ?>