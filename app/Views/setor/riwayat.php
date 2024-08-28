<?= $this->include('layouts/header_satu'); ?>
<header class="top-header header-profile" style="height: 8rem !important">
    <div class="navbar-satu">
        <div class="d-flex justify-content-between">
            <a href="<?= base_url() . 'profile' ?>" class="mt-2"><i class="bi bi-chevron-left"></i></a>
            <a href="" class="mt-2"><i class="bi bi-bell "></i></a>
        </div>
    </div>
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center" style="margin-top: -10px">
        <div class="row mx-auto text-center mt-3 ">
            <h1>Riwayat Setor</h1>
        </div>
    </nav>
</header>
<!-- end of header -->

<div class="page-content content-dashboard mt-0">
    <div class="row">
        <div class="align-items-center d-flex justify-content-between" style="height: 40px; font-size: 16px; font-weight: bold; color:black">
            <span style="">List Setor</span>
            <button class="px-5 pt-1" type="button" style="border-radius: 10px; background-color:#D9D9D9; border:none; font-weight: bold; font-size: 15px;">
                Filter
            </button>
        </div>
    </div>
    <div class="row mt-3 row-riwayat-lainnya py-1" style="font-weight: bold;">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <img src="<?= base_url() . 'assets/img/icon/icon-telkomsel.webp' ?>" alt="">
        </div>
        <div class="col-6" style="font-size: 12px; color:black">
            <span>
                Tujuan : 3453454353
            </span> <br>
            <span>
                jumlah : 10.000
            </span> <br>
            <span>
                Admin : 3.500
            </span> <br>
            <span>
                Saldo : 60.000
            </span> <br>
            <span>
                Sisa Saldo : 30.000
            </span> <br>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <div class="status-riwayat d-flex justify-content-center align-items-center px-1">
                    success
                </div>
            </div>
            <div class="tanggal-riwayat d-flex justify-content-center align-items-center">
                24-07-2025
            </div>
            <div class="tanggal-riwayat d-flex justify-content-center align-items-center" style="font-size: 15px !important">
                12:40
            </div>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer_after_login'); ?>