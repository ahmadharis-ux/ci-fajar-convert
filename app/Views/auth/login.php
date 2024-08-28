<?= $this->include('auth/layouts/header'); ?>


<!--start wrapper-->
<div class="wrapper wrapper-login">
    <div class="container container-login text-center mt-5">
        <img src="<?= base_url(); ?>assets/img/example-image/group-1.png" alt="">
    </div>
    <form action="" class="form-login">
        <div class="form-group mb-4">
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
            <div class="a-link">
                <a href="<?= base_url('lupa_password') ?>">Lupa Password</a>
            </div>
        </div>
        <div class="form-group-bottom text-center" data-aos="fade-up" data-aos-duration="2000">
            <a href="/home" class="btn btn-lg submit-login mb-2">Login</a> <br>
            <label for="">Belum mempunyai akun?</label><br>
            <a href="<?= base_url('daftar') ?>"><b>Daftar</b></a>
        </div>
    </form>
</div>
<!--end wrapper-->
<?= $this->include('auth/layouts/footer'); ?>