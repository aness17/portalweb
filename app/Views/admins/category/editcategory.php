<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>

            <form method="POST" action="<?= base_url('editkategori/' . $kategori['id']) ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="nama" class="form-label">Name Category</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $kategori['name_kategori'] ?>" required>
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