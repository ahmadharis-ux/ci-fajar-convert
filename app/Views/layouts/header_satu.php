<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Lexend+Deca:wght@100..900&family=Lexend+Giga:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dark-theme.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     <!-- Aos Effect -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>

    <!--page loader-->
    <div class="loader-wrapper">
        <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!--end loader-->

    <!--start wrapper-->
    <div class="wrapper">

        <!--start to header-->
        <!-- <header class="top-header fixed-top border-bottom d-flex align-items-center mx-auto" <?php echo ((\Config\Services::request()->getUserAgent()->isMobile() == false) ? 'style="width: 500px;"' : ""); ?>>
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
                <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div>
                <div class="brand-logo"><a href="javascript:;"><img src="assets/images/logo.webp" width="95" alt=""></a></div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon start-0"><i class="bi bi-search"></i></div>
                    <input class="form-control px-5" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon"><i class="bi bi-x-lg"></i></div>
                </form>
                <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
                    <li class="nav-item mobile-search-button">
                        <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wishlist.html"><i class="bi bi-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="cart.html">
                            <div class="cart-badge">8</div>
                            <i class="bi bi-bag"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </header> -->

        <!-- <header class="p-4 header-before-login">
           
        </header> -->
        <!-- end of header -->