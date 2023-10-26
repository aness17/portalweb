<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>

            <form method="POST" action="<?= base_url('edituser/' . $user->id_user) ?>" class="row g-3" enctype="multipart/form-data">
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
                <!-- <div class="col-12">
                    <label for="inputPassword4" class="form-label">Foto Karyawan</label>
                    <input type="file" name="fotouser" class="form-control" id="fotouser" required>
                </div> -->
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
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main><!-- End #main -->