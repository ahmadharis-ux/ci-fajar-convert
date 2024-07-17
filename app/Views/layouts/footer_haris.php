<!-- start to footer  -->
<footer class="page-footer fixed-bottom footer-haris-before bg-transparent d-flex align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
    <nav class="navbar navbar-expand p-0 flex-grow-1">
        <div class="navbar-nav justify-content-between w-100">
            <a class="btn btn-circle bg-tele" href="<?= base_url('home') ?>">
                <div class="icon"><i class="bi bi-telegram"></i></div>
            </a>
            <a class="btn btn-blue" href="<?= base_url('home') ?>">
                Login
            </a>
            <a class="btn btn-circle bg-wa" href="contact-us.html">
                <div class="icon"><i class="bi bi-whatsapp"></i></div>
            </a>

        </div>
    </nav>
</footer>
<!--end to footer-->

<?= $this->include('layouts/sidenav'); ?>

</div>
<!--end wrapper-->


<!--JS Files-->
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/cookies-theme-switcher.js"></script>
<script src="<?= base_url(); ?>assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/slick/slick.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/index.js"></script>
<script src="<?= base_url(); ?>assets/js/loader.js"></script>


</body>

</html>