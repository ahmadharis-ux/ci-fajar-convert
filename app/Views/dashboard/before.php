<?= $this->include('layouts/header_satu'); ?>
<div class="page-content before" style="padding:0; margin:0; width:100%; background-color:transparent !important;">
    <div class="cont">
        <div class="background">
            <div class="overflow">
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
            <div style="height: 5rem;"></div>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer_haris'); ?>