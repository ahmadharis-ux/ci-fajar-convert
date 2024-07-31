<?= $this->include('layouts/header_satu'); ?>



<style>
    /* Posisi modal di tengah layar */
    .modal .fade .modal-dialog {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 100%;
        max-width: auto;
        height: auto;
    }

    .modal {
        pointer-events: none !important;
    }

    .modal-content {
        /* height: 90vh; */
        height: auto;
        width: 100%;
    }

    /* HTML: <div class="loader"></div> */
    .loader {
        width: 50px;
        padding: 8px;
        aspect-ratio: 1;
        border-radius: 50%;
        background: #25b09b;
        --_m:
            conic-gradient(#0000 10%, #000),
            linear-gradient(#000 0 0) content-box;
        -webkit-mask: var(--_m);
        mask: var(--_m);
        -webkit-mask-composite: source-out;
        mask-composite: subtract;
        animation: l3 1s infinite linear;
    }

    @keyframes l3 {
        to {
            transform: rotate(1turn)
        }
    }
</style>

<div class="page-content" style="padding:0; margin:0; width:100%; background-color:transparent !important;">
    <div class="container-withdraw">
        <div class="background-withdraw">
            <div class="navbar-satu">
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url() . 'lainnya' ?>" class="mt-2"><i class="bi bi-chevron-left"></i></a>
                    <a href="" class="mt-2"><i class="bi bi-bell "></i></a>
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
                            <br>
                            <button type="button" class="btn btn-pilih-metode">Pilih Metode</button>
                            <!-- <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..."> -->
                            <!-- <datalist id="datalistOptions">
                                <?php foreach ($list_bank as $key => $data) : ?>
                                    <option value="<?= $data ?>">
                                    <?php endforeach ?>
                            </datalist> -->
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
                <div class="accordion mt-3 mb-5" id="accordionExample" style="border-radius:15px !important;border:0 !important;background-color:#25D4B7;">
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
                <input class="form-control input-metode" type="text" name="" id="" placeholder="Cari Bank">
                <button type="button" class="close" style="margin-left: 10px !important; border: none; background-color: transparent;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="">&times;</span>
                </button>
            </div>
            <div class="cari-errors fw-bold d-flex justify-content-center ">
            </div>
            <div class="loader m-auto d-none loader-metode"></div>
            <div class="modal-body modal-body-metode">
                <div class="overflow-content-metode p-3">
                    <div class="row row-content-metode">
                        <?php foreach ($list_bank as $key => $data) : ?>
                            <div class="col-12 col-lg-6 my-1 ">
                                <button type="button" class="wrapper-content-metode btn-metode" data-id="<?= $key ?>">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-5">
                                            <div class="content-metode">
                                                <img src="<?= base_url() . 'assets/img/icon/bca.png' ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex justify-content-center align-items-center">
                                            <span class="name_bank" id="name_bank"> <?= $data; ?> </span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="modal-body modal-hasil-cari">
            </div>
        </div>
    </div>
</div>


<script>
    $('.js-example-basic-single').select2({
        multiple: false
    });

    var timeoutId;
    $('.input-metode').on('input', function() {
        var cari_metode = $(this).val().toLowerCase();
        $('.cari-errors').html('');
        $('.modal-hasil-cari').html('');
        clearTimeout(timeoutId);
        if (cari_metode && cari_metode.trim() !== "") {
            $('.modal-body-metode').addClass('d-none');
            $('.loader-metode').removeClass('d-none');
            timeoutId = setTimeout(function() {
                $.ajax({
                    type: 'GET',
                    url: '<?= base_url() . 'cari_metode' ?>',
                    data: {
                        cari: cari_metode,
                    },
                    success: function(response) {
                        var data = response;
                        var data_bank = data.data;

                        if (data.status == 'errors') {
                            $('.cari-errors').html(`${data.message}`);
                            $('.loader-metode').addClass('d-none');
                        } else {
                            $('.loader-metode').addClass('d-none');
                            $('.modal-hasil-cari').html(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }, 1000);
        } else {
            $('.modal-body-metode').removeClass('d-none');
            $('.loader-metode').addClass('d-none');
            $('.modal-hasil-cari').html('');
        }
    });

    $('.btn-pilih-metode').on('click', function() {
        $('#exampleModal').modal('show');
    });

    // Use event delegation to handle clicks on dynamically added buttons
    $(document).on('click', '.btn-metode, .btn-metode-cari', function() {
        var bankName = $(this).find('.name_bank').text().trim();

        $('#exampleModal').modal('hide');
        $('.input-metode').val('');
        $('.modal-body-metode').removeClass('d-none');
        $('.loader-metode').addClass('d-none');
        $('.modal-hasil-cari').html('');
        $('.btn-pilih-metode').text(bankName);
    });

    $('.close').on('click', function() {
        $('#exampleModal').modal('hide');
        $('.input-metode').val('');
        $('.modal-body-metode').removeClass('d-none');
        $('.loader-metode').addClass('d-none');
        $('.modal-hasil-cari').html('');
    });
</script>
<?= $this->include('layouts/footer_after_login'); ?>