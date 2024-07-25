<?= $this->include('auth/layouts/header'); ?>
<!--start wrapper-->
<div class="wrapper">
    <!--start to header-->
    <header class="top-header header-lupa-password align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
            <div class="mx-auto text-center mt-3">
                <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" class="mx-auto mt-3 mb-2" alt="">
                <h1>Lupa Password</h1>
                <label for="">Silahkan isi data berikut untuk reset password anda!</label>
            </div>
        </nav>
    </header>
    <!-- end of header -->
    <form action="" class="form-reset">
        <div class="form-group mb-4">
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group-bottom text-center">
            <button type="submit" class="btn btn-lg submit-reset mb-2">Reset Password</button> <br>
            <label for="">Sudah mempunyai akun?</label><br>
            <a href="<?= base_url('login') ?>"><b>Login</b></a>
        </div>
    </form>
</div>
<!--end wrapper-->


<?= $this->include('auth/layouts/footer'); ?>