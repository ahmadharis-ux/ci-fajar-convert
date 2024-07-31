<div class="overflow-content-metode p-3">
    <div class="row">
        <?php foreach ($results as $data) : ?>
            <div class="col-12 col-lg-6 my-1 ">
                <button type="button" class="wrapper-content-metode btn-metode-cari" data-id="<?= $data['code_bank'] ?>">
                    <div class="row d-flex justify-content-between">
                        <div class="col-5">
                            <div class="content-metode">
                                <img src="<?= base_url() . 'assets/img/icon/bca.png' ?>" alt="">
                            </div>
                        </div>
                        <div class="col-7 d-flex justify-content-center align-items-center">
                            <span id="name_bank" class="name_bank"> <?= $data['name_bank']; ?> </span>
                        </div>
                    </div>
                </button>
            </div>
        <?php endforeach ?>
    </div>
</div>