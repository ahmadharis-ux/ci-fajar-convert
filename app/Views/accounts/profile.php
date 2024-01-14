<?= $this->include('layouts/header'); ?>
<!--start to page content-->
<div class="page-content">

    <div class="profile-img mb-3 border p-3 text-center rounded-3 bg-light">
        <img src="https://via.placeholder.com/110X110" width="90" height="90" class="rounded-circle" alt="">
    </div>

    <div class="card rounded-3 border-0 bg-transparent">
        <div class="card-body p-0">
            <form action="/account/updateprofile" method="POST">
                <?= csrf_field() ?>
                <div class="row row-cols-1 g-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" name="name" id="floatingInputName" placeholder="Name" value="Ujang">
                            <label for="floatingInputName">Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" name="username" id="floatingInputUserName" placeholder="Username" value="Ujang Tea" disabled>
                            <label for="floatingInputUserName">Username</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" name="phone" id="floatingInputNumber" placeholder="Phone" value="+62812345678" disabled>
                            <label for="floatingInputNumber">Mobile Number / W.A</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" name="email" id="floatingInputEmail" placeholder="Email" value="ujangtea@gmail.com" disabled>
                            <label for="floatingInputEmail">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" id="floatingInputRole" placeholder="Level" value="Admin" disabled>
                            <label for="floatingInputRole">Level</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="date" class="form-control rounded-3" id="floatingInputDOB" value="">
                            <label for="floatingInputDOB">Date of Birth</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-3" id="floatingInputLocation" placeholder="Location" value="United Kingdom">
                            <label for="floatingInputLocation">Location</label>
                        </div>
                    </div>
                </div>
                <div class="col mt-3 justify-content-center">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning btn-ecomm rounded-3">Update Name</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!--end to page content-->
<?= $this->include('layouts/footer'); ?>