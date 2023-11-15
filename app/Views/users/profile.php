    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Profile</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $user['fotouser']) ?>" width="150" height="220" alt="">
                            <hr>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3">
                                <!-- <i class=" fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i> -->
                                <span style="color: black;"><?= $user['name_user'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Detail Information</h4>
                        <a href="<?= base_url('edit_profile') ?>" style="font-size:15px;">
                            <i class="fa fa-edit text-primary mr-2"></i>
                        </a>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">E-mail</h6>
                                </div>
                                <p class="m-0"><?= $user['email_user'] ?></p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-layer-group text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Division</h6>
                                </div>
                                <p class="m-0"><?= $user['divisi_user'] ?></p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-lock text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Password</h6>
                                </div>
                                <p class="m-0">*****************</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-calendar text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Join</h6>
                                </div>
                                <p class="m-0"><?= date('d M Y', strtotime($user['create_date'])) ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->