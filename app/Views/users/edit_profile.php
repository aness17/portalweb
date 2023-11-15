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
                            <a href="" class="text-white text-decoration-none mb-3">
                                <!-- <i class=" fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i> -->
                                <span style="color: black;"><?= $user['name_user'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Edit Information</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <form method="post" action="<?= base_url('edit_profile') ?>">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-3" placeholder="Your Name" name="nama" value="<?= $user['name_user'] ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control p-3" placeholder="Your Email" name="email" value="<?= $user['email_user'] ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control p-3" placeholder="****************" name="password" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-3" placeholder="Your Division" name="divisi" value="<?= $user['divisi_user'] ?>" />
                            </div>
                            <div class="form-group">
                                <input type="file" multiple="true" name="foto" class="form-control" id="foto" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                                <input type="hidden" name="oldFile" value="<?= $user['fotouser'] ?>" />
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 45px;" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->