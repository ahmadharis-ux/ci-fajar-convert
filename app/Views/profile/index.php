<?= $this->include('layouts/header_satu'); ?>
<header class="top-header header-profile">
    <div class="navbar-satu">
        <div class="d-flex justify-content-between">
            <div class="mt-2"><i class="bi bi-chevron-left"></i></div>
            <div class="mt-2"><i class="bi bi-bell "></i></div>
        </div>
    </div>
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center" style="margin-top: -50px">
        <div class="row mx-auto text-center mt-3 ">
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" width="" class="mx-auto mt-3 mb-2" alt="">
            <h1><?= $username; ?></h1>
        </div>
    </nav>
    <div class="row my-1 mx-auto" style="margin-top: -30px !important;">
        <div class="col d-flex justify-content-between ">
            <div class="card me-2">
                <div class=" align-items-center">
                    <div class="label text-center">
                        <label for="" class="title fw-bold fs-6">Gabung</label><br>
                        <label for="" class="saldo fs-8"><b> <?= $gabung ?></b></label>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="align-items-center">
                    <div class="label text-center" style="max-width: 100%;">
                        <label for="" class="title fw-bold fs-6">E-mail</label> <br>
                        <label for="" class="saldo fs-8" style="display:block; overflow:hidden; text-overflow: ellipsis; white-space: nowrap; font-size: 0.875rem; max-width: 100%;">
                            <b><?= $email; ?></b>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-1 mx-auto">
        <div class="col d-flex justify-content-between ">
            <div class="card me-2">
                <div class=" align-items-center">
                    <div class="label text-center">
                        <label for="" class="title fw-bold fs-6">No HP</label><br>
                        <label for="" class="saldo fs-8"><b> <?= $nohp ?></b></label>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="align-items-center">
                    <div class="label text-center">
                        <label for="" class="title fw-bold fs-6">Saldo</label> <br>
                        <label for="" class="saldo fs-8"><b> <?= $saldo; ?></b></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end of header -->

<div class="page-content content-dashboard mt-0">
    <div class="row mx-2">
        <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 30px; width: 30px; display: flex; align-items: center; justify-content: center;">
            <div class="">
                <svg viewBox="0 0 24 24" width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12.9046 3.06005C12.6988 3 12.4659 3 12 3C11.5341 3 11.3012 3 11.0954 3.06005C10.7942 3.14794 10.5281 3.32808 10.3346 3.57511C10.2024 3.74388 10.1159 3.96016 9.94291 4.39272C9.69419 5.01452 9.00393 5.33471 8.36857 5.123L7.79779 4.93281C7.3929 4.79785 7.19045 4.73036 6.99196 4.7188C6.70039 4.70181 6.4102 4.77032 6.15701 4.9159C5.98465 5.01501 5.83376 5.16591 5.53197 5.4677C5.21122 5.78845 5.05084 5.94882 4.94896 6.13189C4.79927 6.40084 4.73595 6.70934 4.76759 7.01551C4.78912 7.2239 4.87335 7.43449 5.04182 7.85566C5.30565 8.51523 5.05184 9.26878 4.44272 9.63433L4.16521 9.80087C3.74031 10.0558 3.52786 10.1833 3.37354 10.3588C3.23698 10.5141 3.13401 10.696 3.07109 10.893C3 11.1156 3 11.3658 3 11.8663C3 12.4589 3 12.7551 3.09462 13.0088C3.17823 13.2329 3.31422 13.4337 3.49124 13.5946C3.69158 13.7766 3.96395 13.8856 4.50866 14.1035C5.06534 14.3261 5.35196 14.9441 5.16236 15.5129L4.94721 16.1584C4.79819 16.6054 4.72367 16.829 4.7169 17.0486C4.70875 17.3127 4.77049 17.5742 4.89587 17.8067C5.00015 18.0002 5.16678 18.1668 5.5 18.5C5.83323 18.8332 5.99985 18.9998 6.19325 19.1041C6.4258 19.2295 6.68733 19.2913 6.9514 19.2831C7.17102 19.2763 7.39456 19.2018 7.84164 19.0528L8.36862 18.8771C9.00393 18.6654 9.6942 18.9855 9.94291 19.6073C10.1159 20.0398 10.2024 20.2561 10.3346 20.4249C10.5281 20.6719 10.7942 20.8521 11.0954 20.94C11.3012 21 11.5341 21 12 21C12.4659 21 12.6988 21 12.9046 20.94C13.2058 20.8521 13.4719 20.6719 13.6654 20.4249C13.7976 20.2561 13.8841 20.0398 14.0571 19.6073C14.3058 18.9855 14.9961 18.6654 15.6313 18.8773L16.1579 19.0529C16.605 19.2019 16.8286 19.2764 17.0482 19.2832C17.3123 19.2913 17.5738 19.2296 17.8063 19.1042C17.9997 18.9999 18.1664 18.8333 18.4996 18.5001C18.8328 18.1669 18.9994 18.0002 19.1037 17.8068C19.2291 17.5743 19.2908 17.3127 19.2827 17.0487C19.2759 16.8291 19.2014 16.6055 19.0524 16.1584L18.8374 15.5134C18.6477 14.9444 18.9344 14.3262 19.4913 14.1035C20.036 13.8856 20.3084 13.7766 20.5088 13.5946C20.6858 13.4337 20.8218 13.2329 20.9054 13.0088C21 12.7551 21 12.4589 21 11.8663C21 11.3658 21 11.1156 20.9289 10.893C20.866 10.696 20.763 10.5141 20.6265 10.3588C20.4721 10.1833 20.2597 10.0558 19.8348 9.80087L19.5569 9.63416C18.9478 9.26867 18.6939 8.51514 18.9578 7.85558C19.1262 7.43443 19.2105 7.22383 19.232 7.01543C19.2636 6.70926 19.2003 6.40077 19.0506 6.13181C18.9487 5.94875 18.7884 5.78837 18.4676 5.46762C18.1658 5.16584 18.0149 5.01494 17.8426 4.91583C17.5894 4.77024 17.2992 4.70174 17.0076 4.71872C16.8091 4.73029 16.6067 4.79777 16.2018 4.93273L15.6314 5.12287C14.9961 5.33464 14.3058 5.0145 14.0571 4.39272C13.8841 3.96016 13.7976 3.74388 13.6654 3.57511C13.4719 3.32808 13.2058 3.14794 12.9046 3.06005Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="col-10 d-flex align-self-center">
            <span style="color:#E2B30B; font-size: 15px; font-weight: 700;">
                Preferences
            </span>
        </div>
    </div>
    <!-- Pengaturan profile  -->
    <a href="<?= base_url() . 'profile/pengaturan' ?>" class="row mt-3 mx-2">
        <div class="d-flex justify-content-center btn-section-profile">
            <div class="row my-auto mx-auto w-100 d-flex justify-content-between">
                <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center;">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 18px; color: white; font-weight: 600; height: 100%;">
                        <span>Pengaturan Profile</span>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="">
                        <svg viewBox="-4.5 0 20 20" version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_right [#ffffff]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#ffffff]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <!-- Ubah password  -->
    <a href="<?= base_url() . 'profile/ubah-password' ?>" class="row mt-3 mx-2">
        <div class="d-flex justify-content-center btn-section-profile">
            <div class="row my-auto mx-auto w-100 d-flex justify-content-between">
                <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center;">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12 14.5V16.5M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 18px; color: white; font-weight: 600; height: 100%;">
                        <span>Ubah Password</span>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="">
                        <svg viewBox="-4.5 0 20 20" version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_right [#ffffff]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#ffffff]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <hr style="border: 1px solid; border-radius: 100%; width:100%">
    <!-- Nutasi Saldo  -->
    <a href="<?= base_url() . 'profile/mutasi-saldo' ?>" class="row mt-3 mx-2">
        <div class="d-flex justify-content-center btn-section-profile">
            <div class="row my-auto mx-auto w-100 d-flex justify-content-between">
                <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center;">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12 7V12L9.5 13.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 18px; color: white; font-weight: 600; height: 100%;">
                        <span>Mutasi Saldo</span>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="">
                        <svg viewBox="-4.5 0 20 20" version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_right [#ffffff]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#ffffff]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <!-- Catatan Aktivitas -->
    <a href="<?= base_url() . 'profile/catatan_aktifitas' ?>" class="row mt-3 mx-2">
        <div class="d-flex justify-content-center btn-section-profile">
            <div class="row my-auto mx-auto w-100 d-flex justify-content-between">
                <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center;">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9965 4.00001C11.4368 3.99846 11.8263 4.28508 11.9558 4.70591L15.1231 14.9997L18.0715 7.62861C18.1964 7.31651 18.4697 7.08801 18.7989 7.02042C19.1282 6.95284 19.4694 7.0552 19.7071 7.29289L22.7071 10.2929C23.0976 10.6834 23.0976 11.3166 22.7071 11.7071C22.3166 12.0976 21.6834 12.0976 21.2929 11.7071L19.3652 9.77946L15.9285 18.3714C15.771 18.765 15.3826 19.0165 14.959 18.9992C14.5355 18.9818 14.1689 18.6992 14.0442 18.2941L11.0121 8.43973L8.95782 15.2873C8.84938 15.6488 8.54667 15.9185 8.17511 15.9845C7.80355 16.0506 7.42643 15.9019 7.2 15.6L5 12.6667L2.8 15.6C2.46863 16.0418 1.84183 16.1314 1.4 15.8C0.95817 15.4686 0.868627 14.8418 1.2 14.4L4.2 10.4C4.38885 10.1482 4.68524 10 5 10C5.31475 10 5.61114 10.1482 5.8 10.4L7.6114 12.8152L10.0422 4.71265C10.1687 4.29092 10.5562 4.00156 10.9965 4.00001Z" fill="#ffffff"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 18px; color: white; font-weight: 600; height: 100%;">
                        <span>Catatan Aktifitas</span>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="">
                        <svg viewBox="-4.5 0 20 20" version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_right [#ffffff]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#ffffff]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <hr style="border: 1px solid; border-radius: 100%; width:100%">
    <!-- log Out -->
    <a href="" class="row mt-3 mb-4 mx-2">
        <div class="d-flex justify-content-center btn-section-profile">
            <div class="row my-auto mx-auto w-100 d-flex justify-content-between">
                <div class="col-2" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center;">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16.9995 15.9995L20.9995 11.9995M20.9995 11.9995L16.9995 7.99951M20.9995 11.9995H8.99951M12.9995 20.9995H6.20029C5.08019 20.9995 4.52014 20.9995 4.09231 20.7815C3.71599 20.5898 3.41003 20.2838 3.21828 19.9075C3.00029 19.4797 3.00029 18.9196 3.00029 17.7995V6.19951C3.00029 5.07941 3.00029 4.51935 3.21828 4.09153C3.41003 3.71521 3.71599 3.40925 4.09231 3.2175C4.52014 2.99951 5.08019 2.99951 6.20029 2.99951L12.9995 2.99951" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-center align-items-center" style="font-size: 18px; color: white; font-weight: 600; height: 100%;">
                        <span>Log Out</span>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="">
                        <!-- <svg viewBox="-4.5 0 20 20" version="1.1" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_right [#ffffff]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#ffffff]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> -->
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<?= $this->include('layouts/footer_after_login'); ?>