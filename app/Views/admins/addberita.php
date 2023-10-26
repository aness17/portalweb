<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <form method="POST" action="<?= base_url('admin/adduser') ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" id="nip">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">No. Hp</label>
                    <input type="text" name="nohp" class="form-control" id="nohp">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Alamat Karyawan</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" min="0">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Foto Karyawan</label>
                    <input type="file" name="fotouser" class="form-control" id="fotouser" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Role</label>
                    <select name="role" class="form-control" id="exampleFormControlSelect1" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Karyawan</option>
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