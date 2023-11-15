<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>

            <form method="POST" action="<?= base_url('edituser/' . $user->id) ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="nama" class="form-label">Name Employee</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $user->name_user ?>">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">E-mail Employee</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $user->email_user ?>">
                </div>
                <div class="col-12">
                    <label for="divisi" class="form-label">Division Employee</label>
                    <input type="text" name="divisi" class="form-control" id="divisi" value="<?= $user->divisi_user ?>">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password Employee</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="col-12">
                    <div class="col-md-2 mb-8pt mb-md-0">
                        <div class="media align-items-left">
                            <div class="d-flex flex-column media-body media-middle">
                                <label for="foto" class="form-label"><span class="card-title">Picture</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-8pt mb-md-0">
                        <div class="row">
                            <div class="col-6">
                                <br>
                                <input type="file" multiple="true" name="foto" class="form-control" id="foto" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                                <input type="hidden" name="oldFile" value="<?= $user->fotouser ?>" />
                            </div>
                            <div class="col-6">
                                <br>
                                <img class="img-responsive img-portfolio img-hover" id="blah" src="<?= base_url() ?>foto/<?= $user->fotouser ?>" alt="your image" width="150px" height="auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control" id="exampleFormControlSelect1" name="role" value="<?= $user->role_user ?>">
                        <option value="1" <?= ('1' == $user->role_user) ? "selected" : "" ?>>Superadmin</option>
                        <option value="2" <?= ('2' == $user->role_user) ? "selected" : "" ?>>Admin</option>
                        <option value="3" <?= ('3' == $user->role_user) ? "selected" : "" ?>>User</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" onclick="history.go(-1);" class="btn btn-success">Kembali</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main><!-- End #main -->