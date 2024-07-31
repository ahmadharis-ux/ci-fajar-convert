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
            <h1>Mutasi Saldo</h1>
            <img src="<?= base_url(); ?>assets/img/example-image/fix-logo.png" style="width: 100px !important; height: 100px !important; margin-top: -5px !important;" class="mx-auto mt-3 mb-2" alt="">
            <a href="" class="d-flex justify-content-center">
                <div class="edit-profile-pengaturan d-flex align-items-center justify-content-center">
                    <span>
                        Edit Profile
                    </span>
                </div>
            </a>
        </div>
    </nav>
</header>
<!-- end of header -->

<div class="page-content content-dashboard mt-0 pb-4">
    <div class="row">
        <div class="tag-mutasi-transaksi d-flex justify-content-center align-items-center">
            <span style="margin-right: 5px;">Mutasi Transaksi</span>
            <svg viewBox="0 0 24 24" width="20px" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M12 16.99V17M12 7V14M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </div>
    </div>

    <!-- download / select month-year  -->
    <div class="row mt-3">
        <a href="" class="col btn-download-mutasi d-flex justify-content-start">
            <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M12 16L12 8" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9 13L11.913 15.913V15.913C11.961 15.961 12.039 15.961 12.087 15.913V15.913L15 13" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M3 15L3 16L3 19C3 20.1046 3.89543 21 5 21L19 21C20.1046 21 21 20.1046 21 19L21 16L21 15" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            <span>Download</span>
        </a>
        <div class="col input-month-mutasi d-flex justify-content-end">
            <input type="month">
        </div>
    </div>

    <!-- mutasi  -->
    <div class="row mt-3">
        <div class="row mx-auto" style="background-color: #D9D9D9">
            <div class="tanggal-mutasi-transaksi">
                19-July-2023
            </div>
        </div>
        <div class="row d-flex justify-content-between fw-bold mx-auto p-2">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.5) !important; ">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z" fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col top-up-saldo-mutasi">
                        <label for=""> Top Up Saldo</label>
                        <br>
                        <label for=""> 19:00:00 </label>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <span>RP. 1000.000</span>
            </div>
        </div>
        <div class="row d-flex justify-content-between fw-bold mx-auto p-2">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.5) !important;">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z" fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col pembelian-saldo-mutasi">
                        <label for=""> Top Up Saldo</label>
                        <br>
                        <label for=""> 19:00:00 </label>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <span>RP. 1000.000</span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="row d-flex align-items-center">
            <div class="tanggal-mutasi-transaksi">
                19-July-2023
            </div>
        </div>
        <div class="row d-flex justify-content-between fw-bold mx-auto p-2">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.5) !important;">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z" fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col pembelian-saldo-mutasi">
                        <label for=""> Top Up Saldo</label>
                        <br>
                        <label for=""> 19:00:00 </label>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <span>RP. 1000.000</span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="row d-flex align-items-center">
            <div class="tanggal-mutasi-transaksi">
                19-July-2023
            </div>
        </div>
        <div class="row d-flex justify-content-between fw-bold mx-auto p-2">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="" style="background-color: #E2B30B; border-radius: 100%; height: 40px; width: 40px; display: flex; align-items: center; justify-content: center; box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.5) !important;">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="25px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z" fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col top-up-saldo-mutasi">
                        <label for=""> Top Up Saldo</label>
                        <br>
                        <label for=""> 19:00:00 </label>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <span>RP. 1000.000</span>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer_after_login'); ?>