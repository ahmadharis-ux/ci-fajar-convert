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
            <h1>Catatan Aktifitas</h1>
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
        <div class="tag-mutasi-transaksi d-flex justify-content-center align-items-center">
            <span style="margin-right: 5px;">Catatan Aktifitas</span>
            <svg viewBox="0 0 24 24" width="20px" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M12 16.99V17M12 7V14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </div>
    </div>

    <div class="row mt-3 fw-bold" style="width:100%; height:40px;">
        <div class="col-2 d-flex justify-content-end" style="padding:0 5px !important;">
            <div class="icon-search-wrapper-activity d-flex justify-content-center align-items-center">
                <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="col" style="padding: 0 !important;">
            <div class="input-cari-activity">
                <input type="text" placeholder="Cari aktifitas...">
            </div>
        </div>
    </div>

    <div class="row mt-3 row-content-activity fw-bold py-1 d-flex justify-content-center">
        <div class="row d-flex justify-content-between" style="border:none; border-bottom: 2px solid white !important;">
            <div class="col">
                <label for="text-left">ID 111211</label>
            </div>
            <div class="col d-flex justify-content-end">
                <label for="text-right" style="margin-right: -10px !important;">21-Juli-2024 23:00:09</label>
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <label for="">Konten</label>
                <br>
                <label for="">User Login</label>
            </div>
            <div class="col text-right" style="text-align: right !important;">
                <label for="">IP Status</label>
                <br>
                <label for="">127.9.9.0</label>
            </div>
        </div>
    </div>

    <div class="row mt-3 row-content-activity fw-bold py-1 d-flex justify-content-center">
        <div class="row d-flex justify-content-between" style="border:none; border-bottom: 2px solid white !important;">
            <div class="col">
                <label for="text-left">ID 111211</label>
            </div>
            <div class="col d-flex justify-content-end">
                <label for="text-right" style="margin-right: -10px !important;">21-Juli-2024 23:00:09</label>
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <label for="">Konten</label>
                <br>
                <label for="">User Login</label>
            </div>
            <div class="col text-right" style="text-align: right !important;">
                <label for="">IP Status</label>
                <br>
                <label for="">127.9.9.0</label>
            </div>
        </div>
    </div>

    <div class="row mt-3 row-content-activity fw-bold py-1 d-flex justify-content-center">
        <div class="row d-flex justify-content-between" style="border:none; border-bottom: 2px solid white !important;">
            <div class="col">
                <label for="text-left">ID 111211</label>
            </div>
            <div class="col d-flex justify-content-end">
                <label for="text-right" style="margin-right: -10px !important;">21-Juli-2024 23:00:09</label>
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <label for="">Konten</label>
                <br>
                <label for="">User Login</label>
            </div>
            <div class="col text-right" style="text-align: right !important;">
                <label for="">IP Status</label>
                <br>
                <label for="">127.9.9.0</label>
            </div>
        </div>
    </div>

    <div class="row mt-3 row-content-activity fw-bold py-1 d-flex justify-content-center">
        <div class="row d-flex justify-content-between" style="border:none; border-bottom: 2px solid white !important;">
            <div class="col">
                <label for="text-left">ID 111211</label>
            </div>
            <div class="col d-flex justify-content-end">
                <label for="text-right" style="margin-right: -10px !important;">21-Juli-2024 23:00:09</label>
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <label for="">Konten</label>
                <br>
                <label for="">User Login</label>
            </div>
            <div class="col text-right" style="text-align: right !important;">
                <label for="">IP Status</label>
                <br>
                <label for="">127.9.9.0</label>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer_after_login'); ?>