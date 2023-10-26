<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>
            <form method="POST" action="<?= base_url('editnews/' . $new['id']) ?>" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="title" class="form-label">Title News</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= $new['title_berita'] ?>">
                </div>
                <div class="col-12">
                    <label for="cat" class="form-label">Category News</label>
                    <select name="cat" class="form-control" class="selectpicker" data-live-search="true" name="cat">
                        <?php
                        foreach ($cat as $a) : ?>
                            <option value="<?= $a['id'] ?>" <?= ($new['id_kategori'] == $a['id']) ? "selected" : "" ?>><?= $a['name_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="news">News</label>
                    <textarea class="form-control" name="news" id="news" rows="3"><?= $new['isi_berita'] ?></textarea>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <br>
                            <label for="inputPassword4" class="form-label"><span class="text-danger">*</span>Documentation</label>
                            <input type="file" multiple="true" name="foto" class="form-control" id="foto" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                            <input type="hidden" name="oldFile" value="<?= $new['doc'] ?>" />
                        </div>
                        <div class="col-6">
                            <br>
                            <img class="img-responsive img-portfolio img-hover" id="blah" src="<?= base_url() ?>foto/<?= $new['doc'] ?>" alt="your image" width="150px" height="auto" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="brosche" class="form-label">Broadcast Schedule</label>
                    <input type="date" name="brosche" class="form-control" id="brosche" placeholder="00/00/0000" value="<?php echo date('Y-m-d', strtotime($new['jadwal_tayang'])) ?>">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" onclick="history.go(-1);" class="btn btn-success">Kembali</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
    <script src="<?= base_url('ckeditor5-build-classic/ckeditor.js') ?>" type="text/javascript"></script>

    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
    <script>
        ClassicEditor
            .create(document.querySelector('#news'))
            .then(news => {
                console.log(news);
            })
            .catch(error => {
                console.error(error);
            });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</main><!-- End #main -->