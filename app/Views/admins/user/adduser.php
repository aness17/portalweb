<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>

            <form method="POST" action="<?= base_url('adduser') ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="nama" class="form-label"><span class="card-title">Name Employee</span></label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label"><span class="card-title">E-mail Employee</span></label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="col-12">
                    <label for="divisi" class="form-label"><span class="card-title">Division Employee</span></label>
                    <input type="text" name="divisi" class="form-control" id="divisi">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label"><span class="card-title">Password Employee</span></label>
                    <input type="password" name="password" class="form-control" id="password" min="0">
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
                        <input type="file" multiple="true" name="foto" class="form-control" id="foto" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                    </div>
                    <!-- <label for="fotouser" class="form-label">Profile Employee</label>
                    <input type="file" name="fotouser" class="form-control" id="fotouser" min="0"> -->
                </div>
                <div class="col-12">
                    <label for="role" class="form-label"><span class="card-title">Role</span></label>
                    <select name="role" class="form-control" id="exampleFormControlSelect1" name="role">
                        <option value="1">Superadmin</option>
                        <option value="2">Admin</option>
                        <option value="3">User</option>
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