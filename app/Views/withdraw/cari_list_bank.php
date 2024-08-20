<div class="overflow-content-metode p-3">
    <div class="row">
        <?php foreach ($results as $data) : ?>
            <div class="col-12 my-1 ">
                <button type="button" class="wrapper-content-metode btn-metode" data-id="<?= $data['code_bank'] ?>">
                    <div class="row d-flex justify-content-rounded">
                        <div class="col-3">
                            <div class="content-metode">
                                <img src="<?= base_url() . 'assets/img/icon/bca.png' ?>" alt="">
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center ">
                            <span class="name_bank text-left" id="name_bank"> <?= $data['name_bank']; ?> </span>
                        </div>
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <div class="admin-bank py-1 px-2" style="">
                                <span class="name_bank" id="">Rp. <?= str_replace('.', ',', number_format($data['admin_bank'])) ?> </span>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        <?php endforeach ?>
    </div>
</div>