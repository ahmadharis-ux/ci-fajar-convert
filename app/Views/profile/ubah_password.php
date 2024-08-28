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
            <h1>Ubah Password</h1>
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" style="width: 100px !important; height: 100px !important; margin-top: -5px !important;" class="mx-auto mt-3 mb-2" alt="">
            <!-- <a href="" class="d-flex justify-content-center">
                <div class="edit-profile-pengaturan d-flex align-items-center justify-content-center">
                    <span>
                        Edit Profile
                    </span>
                </div>
            </a> -->
        </div>
    </nav>
</header>
<!-- end of header -->

<div class="page-content content-dashboard mt-0">
    <div class="d-flex justify-content-center">
        <div class="edit-page-pengaturan mx-3 px-2 mx-auto pt-1">
            <!-- email  -->
            <div class="row-edit-pengaturan">
                <div class="label-edit-pengaturan" style="width:150px !important;">
                    <label for="">Password Lama</label>
                </div>
                <input class="input-edit-pengaturan" type="password" value="ahmadHaris@gmail.com">
            </div>
            <!-- nama -->
            <div class="row-edit-pengaturan">
                <div class="label-edit-pengaturan" style="width:150px !important;">
                    <label for="">Password Baru</label>
                </div>
                <input class="input-edit-pengaturan" type="password" value="Ahmad Haris">
            </div>
            <!-- no hp -->
            <div class="row-edit-pengaturan">
                <div class="label-edit-pengaturan" style="width:150px !important;">
                    <label for="">Konfirmasi</label>
                </div>
                <input class="input-edit-pengaturan" type="password" value="085156511121">
            </div>
        </div>
    </div>

    <div class="row btn-edit-page-pengaturan mt-3">
        <button type="submit"> Simpan </button>
    </div>
</div>
<?= $this->include('layouts/footer_after_login'); ?>