<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fajar Convert</title>

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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Aos Effect -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<!-- <body class="mx-auto" style="width: 500px;"> -->

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