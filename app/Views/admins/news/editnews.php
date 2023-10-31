<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <br />
            <!-- Vertical Form -->
            <?php $validation = \Config\Services::validation(); ?>
            <form method="POST" action="<?= base_url('editnews/' . $new['id']) ?>" class="row g-3" enctype="multipart/form-data">
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
                        <div class="col-md-2 mb-8pt mb-md-0">
                            <div class="media align-items-left">
                                <div class="d-flex flex-column media-body media-middle">
                                    <label for="title" class="form-label"><span class="card-title">Title</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-8pt mb-md-0">
                            <input type="text" name="title" class="form-control" id="title" value="<?= $new['title_berita'] ?>">
                        </div>
                    </div>
                </div>
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
                        <div class="col-md-2 mb-8pt mb-md-0">
                            <div class="media align-items-left">
                                <div class="d-flex flex-column media-body media-middle">
                                    <label for="cat" class="form-label"><span class="card-title">Category</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-8pt mb-md-0">
                            <select name="cat" class="form-control" class="selectpicker" data-live-search="true" name="cat">
                                <?php
                                foreach ($cat as $a) : ?>
                                    <option value="<?= $a['id'] ?>" <?= ($new['id_kategori'] == $a['id']) ? "selected" : "" ?>><?= $a['name_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
                        <div class="col-md-2 mb-8pt mb-md-0">
                            <div class="media align-items-left">
                                <div class="d-flex flex-column media-body media-middle">
                                    <label for="brenews" class="form-label"><span class="card-title">Breaking News</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-8pt mb-md-0">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="brenews" id="status1" value="1" <?= ($new['breaking_news'] == '1') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="status1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="brenews" id="status2" value="0" <?= ($new['breaking_news'] == '0') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="status2">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
                        <div class="col-md-2 mb-8pt mb-md-0">
                            <div class="media align-items-left">
                                <div class="d-flex flex-column media-body media-middle">
                                    <span class="card-title">Content</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-8pt mb-md-0">
                            <textarea id="news" name="news"><?= $new['isi_berita'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
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
                                    <input type="hidden" name="oldFile" value="<?= $new['doc'] ?>" />
                                </div>
                                <div class="col-6">
                                    <br>
                                    <img class="img-responsive img-portfolio img-hover" id="blah" src="<?= base_url() ?>foto/<?= $new['doc'] ?>" alt="your image" width="150px" height="auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item p-3">
                    <div class="row align-items-start">
                        <div class="col-md-2 mb-8pt mb-md-0">
                            <div class="media align-items-left">
                                <div>
                                    <span class="card-title">Publish</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-8pt mb-md-0">
                            <input type="date" name="brosche" class="form-control" id="brosche" placeholder="00/00/0000" value="<?php echo date('Y-m-d', strtotime($new['jadwal_tayang'])) ?>">
                        </div>
                    </div>
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