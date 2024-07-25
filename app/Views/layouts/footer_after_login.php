<!-- start to footer  -->
<footer class="page-footer footer-after-login fixed-bottom d-flex align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
    <nav class="navbar navbar-expand p-0 flex-grow-1">
        <div class="navbar-nav align-items-center justify-content-between w-100">
            <a class="nav-link" href="<?= base_url('home') ?>">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon <?php echo ($active === "dashboard") ? "active" : ""; ?>"><i class="bi bi-house-fill "></i></div>
                    <div class="name <?php echo ($active === "dashboard") ? "active" : ""; ?>">Dashboard</div>
                </div>
            </a>
            <a class="nav-link" href="<?= base_url('lainnya') ?>">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon <?php echo ($active === "lainnya") ? "active" : ""; ?>"><i class="bi bi-grid"></i></div>
                    <div class="name <?php echo ($active === "lainnya") ? "active" : ""; ?>">Lainnya</div>
                </div>
            </a>
            <a class="nav-link" href="contact-us.html">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon <?php echo ($active === "profile") ? "active" : ""; ?>"><i class="bi bi-person-fill"></i></div>
                    <div class="name <?php echo ($active === "profile") ? "active" : ""; ?>">Profile</div>
                </div>
            </a>

        </div>
    </nav>
</footer>
<!--end to footer-->


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