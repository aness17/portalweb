<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>

            <form method="POST" action="<?= base_url('adduser') ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="nama" class="form-label">Name Employee</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">E-mail Employee</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="col-12">
                    <label for="divisi" class="form-label">Division Employee</label>
                    <input type="text" name="divisi" class="form-control" id="divisi">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password Employee</label>
                    <input type="password" name="password" class="form-control" id="password" min="0">
                </div>

                <div class="col-12">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control" id="exampleFormControlSelect1" name="role">
                        <option value="1">Superadmin</option>
                        <option value="2">Admin</option>
                        <option value="3">User</option>
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