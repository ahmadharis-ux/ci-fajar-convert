<?= $this->include('layouts/header_satu'); ?>

<header class="top-header header-lainnya-login align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
        <div class="mx-auto text-center mt-3">
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
            <h1><?= $username; ?></h1>
        </div>
    </nav>

</header>
<!-- end of header -->

<div class="page-content content-lainnya mt-0">
    <div class="card card-main mt-4">
        <label class="mx-auto" for="">Withdraw</label>
        <div class="line-lainnya mx-auto"></div>
        <div class="d-flex justify-content-around">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M60 75C50.8 75 50 70.7 50 70H40C40 74.6 43.3 82.75 55 84.6V90H65V84.6C75 82.9 80 76.45 80 70C80 64.4 77.4 55 60 55C50 55 50 51.85 50 50C50 48.15 53.5 45 60 45C66.5 45 66.95 48.2 67 50H77C76.9324 46.5938 75.7073 43.312 73.5263 40.6948C71.3452 38.0775 68.3382 36.2807 65 35.6V30H55V35.45C45 37.1 40 43.55 40 50C40 55.6 42.6 65 60 65C70 65 70 68.4 70 70C70 71.6 66.9 75 60 75Z" fill="#FDFCF2" fill-opacity="0.4" />
                <path d="M25 10H10V20H20V105C20 106.326 20.5268 107.598 21.4645 108.536C22.4021 109.473 23.6739 110 25 110H95C96.3261 110 97.5979 109.473 98.5355 108.536C99.4732 107.598 100 106.326 100 105V20H110V10H25ZM90 100H30V20H90V100Z" fill="#FDFCF2" fill-opacity="0.4" />
            </svg>
            <a href="<?= base_url('store_withdraw') ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                Baru
            </a>
            <a href="<?= base_url() . 'riwayat_withdraw' ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                Riwayat
            </a>
        </div>
    </div>
    <div class="card card-main mt-4">
        <label class="mx-auto" for="">Setor</label>
        <div class="line-lainnya mx-auto"></div>
        <div class="d-flex justify-content-around">
            <!-- <img src="<?= base_url(); ?>assets/img/icon/bx_transaction.png" alt="" class="bg-image mt-2"> -->
            <svg width="94" height="104" viewBox="0 0 94 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 32V102H77V32" stroke="#FDFCF2" stroke-opacity="0.4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M34.5 42L47 57M47 57L59.5 42M47 57V87M32 72H62M32 57H62M22 17H72M77 37H92V2H2V37H17" stroke="#FDFCF2" stroke-opacity="0.4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <a href="<?= base_url('store_setor'); ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                Baru
            </a>
            <a href="<?= base_url() . 'riwayat_setor' ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                Riwayat
            </a>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer_after_login'); ?>