<?= $this->include('auth/layouts/header'); ?>

<!--start wrapper-->
<div class="wrapper wrapper-login">
    <div class="container container-daftar d-flex justify-content-center mt-5">
        <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" alt="">
        <div class="ms-2">
            <h1>Daftar</h1>
            <label for="">Silahkan isi data berikut!</label>
        </div>
    </div>
    <form action="" class="form-daftar">
        <div class="form-group mb-4">
            <input type="text" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" placeholder="Nomor whatsapp">
        </div>
        <div class="form-group mb-4">
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Konfirmasi Password">
        </div>
        <div class="form-group-bottom-daftar text-center" data-aos="fade-up" data-aos-duration="2000">
            <button type="submit" class="btn submit-daftar ">Daftar</button> <br>
            <label for="">Sudah mempunyai akun?</label><br>
            <a href="<?= base_url('login') ?>"><b>Login</b></a>
        </div>
    </form>
</div>
<!--end wrapper-->

<?= $this->include('auth/layouts/footer'); ?>