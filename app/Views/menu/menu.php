<?= $this->include('layouts/header'); ?>
<div class="page-content">
    <div class="mb-3 border p-3 rounded-3">
        <div class="features-section">
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-primary">
                                    <i class="bi bi-cart4"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Riwayat Transaksi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-purple">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Secure Payment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-red">
                                    <i class="bi bi-minecart-loaded"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Free Returns</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-green">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>