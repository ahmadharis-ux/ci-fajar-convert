<?= $this->include('layouts/header_satu'); ?>
<div class="page-content" style="padding:0; margin:0; width:100%; background-color:transparent !important;">
    <div class="container-withdraw">
        <div class="background-withdraw">
            <div class="navbar-satu">
                <div class="d-flex justify-content-between">
                    <div><i class="bi bi-chevron-left"></i></div>
                    <div><i class="bi bi-bell"></i></div>
                </div>
                <h1 class="text-center mt-2">Permintaan Withdraw</h1>
            </div>
            <div class="overflow-withdraw">
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
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <?php foreach ($list_bank as $key => $data) : ?>
                                    <option value="<?= $data ?>">
                                    <?php endforeach ?>
                            </datalist>
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
                <div class="accordion mt-3" id="accordionExample" style="border-radius:15px !important;border:0 !important;background-color:#25D4B7;">
                    <div class="accordion-item" style="border-radius:15px !important;border:0 !important;background-color:#25D4B7;">
                        <h2 class="accordion-header" style="border:none !important;border-radius:15px !important;border:0 !important;background-color:#25D4B7;">
                            <button class="accordion-button" style="border-radius:15px !important;border:transparent !important;background-color:#25D4B7;color:#083A70" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Langkah - langkah Convert
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#083A70; font-size:9px; font-family:'Lexend Deca',sans serif;">
                                <ol type="1" style="padding-left: 10px;">
                                    <li>Pilih <b>Sistem</b> Withdraw yang ingin digunakan, ada 2 Opsi:</li>
                                    <ul>
                                        <li><b>Otomatis</b> : Uang Akan Ditransfer Sistem Dengan Cepat (INSTAN)</li>
                                        <li><b>Manual</b> : Uang Akan Diproses Manual 1x24 Oleh Staff Kami (SLOW)</li>
                                    </ul>
                                    <li>Pilih <b>Type</b> Withdraw yang ingin digunakan, ada 2 Opsi:</li>
                                    <ul>
                                        <li><b>Bank</b> :Menampilkan bank yang support</li>
                                        <li><b>E-Wallet</b> :Menampilkan List Ewallet</li>
                                    </ul>
                                    <li>Pilih <b>Metode</b> Withdraw yang ingin digunakan untuk pencairan dana</li>
                                    <li>Masukan <b>Nomer Rekening</b> untuk pencairan dana</li>
                                    <li>Klik <b>Check</b> Untuk validasi nomer rekening</li>
                                    <li>Masukan <b>Jumlah</b> Withdraw yang akan dicairkan</li>
                                    <li>Klik <b>Withdraw</b> untuk melakukan pencairan</li>
                                    <li><b>Selesai.</b></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.js-example-basic-single').select2({
        multiple: false
    });
</script>
<?= $this->include('layouts/footer_after_login'); ?>