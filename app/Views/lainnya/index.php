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
            <img src="<?= base_url(); ?>assets/img/icon/bx_money-withdraw.png" alt="" class="bg-image">
            <a href="<?= base_url('store_withdraw') ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                Baru
            </a>
            <a href="" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                Riwayat
            </a>
        </div>
    </div>
    <div class="card card-main mt-4">
        <label class="mx-auto" for="">Setor</label>
        <div class="line-lainnya mx-auto"></div>
        <div class="d-flex justify-content-around">
            <img src="<?= base_url(); ?>assets/img/icon/bx_transaction.png" alt="" class="bg-image mt-2">

            <a href="<?= base_url('store_setor'); ?>" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/ri_chat-new-fill.png" alt=""> <br>
                Baru
            </a>
            <a href="" class="btn" style="z-index: 9999;">
                <img src="<?= base_url(); ?>assets/img/icon/material-symbols_history.png" alt=""> <br>
                Riwayat
            </a>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer_after_login'); ?>