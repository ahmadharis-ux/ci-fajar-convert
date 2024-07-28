<?= $this->include('layouts/header_satu'); ?>

<header class="top-header header-profile" style="height: 14rem !important">
    <div class="navbar-satu">
        <div class="d-flex justify-content-between">
            <a href="<?= base_url() . 'profile' ?>" class="mt-2"><i class="bi bi-chevron-left"></i></a>
            <a href="" class="mt-2"><i class="bi bi-bell "></i></a>
        </div>
    </div>
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center" style="margin-top: -30px">
        <div class="row mx-auto text-center mt-3 ">
            <h1>Mutasi Saldo</h1>
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" style="width: 100px !important; height: 100px !important; margin-top: -5px !important;" class="mx-auto mt-3 mb-2" alt="">
            <a href="" class="d-flex justify-content-center">
                <div class="edit-profile-pengaturan d-flex align-items-center justify-content-center">
                    <span>
                        Edit Profile
                    </span>
                </div>
            </a>
        </div>
    </nav>
</header>
<!-- end of header -->

<div class="page-content content-dashboard mt-0 pb-4">
    <div class="row">
        <div class="tag-mutasi-transaksi d-flex justify-content-center align-items-center" style="width: 180px !important;">
            <span style="margin-right: 5px;">Catatan Withdraw</span>
            <svg viewBox="0 0 24 24" width="20px" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M12 16.99V17M12 7V14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </div>
    </div>

    <div class="row mt-3 ">
        <div class="cari-withdraw py-2 px-3 fw-bold">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <label for=""> Daterange </label>
                    <input type="text" name="datetimes">
                    <button class="btn-cari-catatan-withdraw fw-bold" type="button">
                        <span>
                            Cari
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 content-withdraw px-2 mx-auto d-flex justify-content-center">
        <div class="row d-flex justify-content-between py-2 px-2 d-flex justify-content-center align-items-center">
            <div class="col-3 status-withdraw withdraw-success">
                Success
            </div>
            <div class="col nominal-withdraw text-center">
                Rp. 6.000.000
            </div>
            <div class="col-3 tanggal-withdraw" style="text-align: right;">
                <label for="">12-12-2021</label>
                <br>
                <label for="">15:50:49</label>
            </div>
        </div>
    </div>
    <div class="row mt-3 content-withdraw px-2 mx-auto d-flex justify-content-center">
        <div class="row d-flex justify-content-between py-2 px-2 d-flex justify-content-center align-items-center">
            <div class="col-3 status-withdraw withdraw-pending">
                Pending
            </div>
            <div class="col nominal-withdraw text-center">
                Rp. 6.000.000
            </div>
            <div class="col-3 tanggal-withdraw" style="text-align: right;">
                <label for="">12-12-2021</label>
                <br>
                <label for="">15:50:49</label>
            </div>
        </div>
    </div>
    <div class="row mt-3 content-withdraw px-2 mx-auto d-flex justify-content-center">
        <div class="row d-flex justify-content-between py-2 px-2 d-flex justify-content-center align-items-center">
            <div class="col-3 status-withdraw withdraw-failed">
                Failed
            </div>
            <div class="col nominal-withdraw text-center">
                Rp. 6.000.000
            </div>
            <div class="col-3 tanggal-withdraw" style="text-align: right;">
                <label for="">12-12-2021</label>
                <br>
                <label for="">15:50:49</label>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
        });
    });
</script>

<?= $this->include('layouts/footer_after_login'); ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />