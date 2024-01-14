<!-- start to footer  -->
<footer class="page-footer fixed-bottom border-top d-flex align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
    <nav class="navbar navbar-expand p-0 flex-grow-1">
        <div class="navbar-nav align-items-center justify-content-between w-100">
            <a class="nav-link" href="<?= base_url('home') ?>">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi <?php echo ($title === "home") ? "bi-house-fill" : "bi-house"; ?> "></i></div>
                    <div class="name">Home</div>
                </div>
            </a>
            <a class="nav-link" href="<?= base_url('menu') ?>">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi <?php echo ($title === "menu") ? "bi-grid-fill" : "bi-grid"; ?>"></i></div>
                    <div class="name">Menu</div>
                </div>
            </a>
            <a class="nav-link" href="/account">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi bi-person"></i></div>
                    <div class="name">Account</div>
                </div>
            </a>
            <a class="nav-link" href="contact-us.html">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi bi-question-circle"></i></div>
                    <div class="name">Contact</div>
                </div>
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