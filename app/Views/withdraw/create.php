<?= $this->include('layouts/header_satu'); ?>
<div class="page-content" style="padding:0; margin:0; width:100%; background-color:transparent !important;">
    <div class="container-withdraw">
        <div class="background-withdraw">
            <div class="overflow-withdraw">
                <div class="d-flex justify-content-between">
                    <div><i class="bi bi-chevron-left"></i></div>
                    <div><i class="bi bi-bell"></i></div>
                </div>
                <h1 class="text-center mt-2">Permintaan Withdraw</h1>
                <div class="card mt-4">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="">Sistem Withdraw</label>
                            <select name="" class="form-select form-control-sm" id="">
                                <option value="">Pilih Sistem Withdraw</option>
                                <option value="">Pilih Sistem Withdraw 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Type</label>
                            <select name="" class="form-select form-control-sm" id="">
                                <option value="">Pilih Type</option>
                                <option value="">Type 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Metode</label>
                            <select name="" class="form-select form-control-sm" id="">
                                <option value="">Pilih Metode</option>
                                <option value="">Metode 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Nomor rekening</label>
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-validasi btn-sm">Validasi</button>
                                <input type="text" class="form-control form-control-sm validasi-rekening">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="jumlah me-1">
                                    <label for="" class="">Jumlah</label>
                                    <div class="d-flex justify-content-start">
                                        <div class="p-1 rp text-center">Rp</div>
                                        <input type="text" class="form-control form-control-sm input-jumlah w-75">
                                    </div>
                                    <label for="" class="">Admin Fee</label>
                                    <div class="d-flex justify-content-start">
                                        <div class="" style="color: #CF286E; font-weight:700">Rp 0</div>
                                    </div>
                                </div>
                                <div class="saldo ms-1">
                                    <label for="" class="">Saldo Saat ini</label>
                                    <input type="text" class="form-control form-control-sm readonly" value="0" readonly>
                                    <label for="" class="">Dapat saldo</label>
                                    <div class="d-flex justify-content-start">
                                        <div class="" style="color: #CF286E; font-weight:700">Rp 0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-withdraw btn-sm mt-3">Withdraw</button>
                    </form>
                </div>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Langkah - langkah Withdraw
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 5rem;"></div>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer_after_login'); ?>