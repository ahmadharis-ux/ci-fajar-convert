<?= $this->include('layouts/header_satu'); ?>
<div class="page-content" style="padding:0; margin:0; width:100%; background-color:transparent !important;">
    <div class="container-withdraw">
        <div class="background-withdraw">
            <div class="overflow-withdraw">
                <div class="d-flex justify-content-between">
                    <div><i class="bi bi-chevron-left"></i></div>
                    <div><i class="bi bi-bell"></i></div>
                </div>
                <h1 class="text-center mt-2">Convert pulsa</h1>
                <div class="card mt-4">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="">Provider</label>
                            <select name="" class="form-select form-control-sm" id="">
                                <option value="">Pilih  Provider</option>
                                <option value="">Pilih  Provider 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="">Nomor pengirim</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="" class="">Jumlah convert</label>
                            <div class="d-flex justify-content-start">
                                <div class="p-1 rp text-center">Rp</div>
                                <input type="text" class="form-control form-control-sm input-jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="jumlah me-1">
                                    <label for="" class="">Saldo diterima</label>
                                    <div class="d-flex justify-content-start">
                                        <div class="p-1 rp text-center">Rp</div>
                                        <input type="text" class="form-control form-control-sm input-jumlah w-75">
                                    </div>
                                </div>
                                <div class="saldo ms-1">
                                    <label for="" class="">Rate</label>
                                    <input type="text" class="form-control form-control-sm readonly" value="0" readonly>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-withdraw btn-sm mt-3">Submit</button>
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
                                    <li>Pilih <b>Sistem</b> Withdraw yang ingin digunakan, ada 2 Opsi:</li>
                                    <ul>
                                        <li><b>Otomatis</b> : Uang Akan Ditransfer Sistem Dengan Cepat (INSTAN)</li>
                                        <li><b>Manual</b> : Uang Akan Diproses Manual 1x24 Oleh Staff Kami (SLOW)</li>
                                    </ul>
                                    <li>Pilih <b>Type</b> Withdraw yang ingin digunakan, ada 2 Opsi:</li>
                                    <ul>
                                        <li><b>Bank</b> :Menampilkan bank yang support</li>
                                        <li><b>E-Wallet</b> :Menampilkan List Ewallet</li>
                                    </ul>
                                    <li>Pilih <b>Metode</b> Withdraw yang ingin digunakan untuk pencairan dana</li>
                                    <li>Masukan <b>Nomer Rekening</b> untuk pencairan dana</li>
                                    <li>Klik <b>Check</b> Untuk validasi nomer rekening</li>
                                    <li>Masukan <b>Jumlah</b> Withdraw yang akan dicairkan</li>
                                    <li>Klik <b>Withdraw</b> untuk melakukan pencairan</li>
                                    <li><b>Selesai.</b></li>
                                </ol>
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