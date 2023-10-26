<main id="main" class="main">

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">News Data</h5>
            <a href="<?= base_url('addnews') ?>" type="button" class="btn" style="font-size:25px;">
              <i class="bi bi-plus-circle"></i>
            </a>
          </div>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Nama Authors</th>
                <th scope="col">Doc.</th>
                <th scope="col">News Title</th>
                <th scope="col">News</th>
                <th scope="col">Broadcast Schedule</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="list">
              <?php $no = 1;
              foreach ($new as $u) : ?>
                <tr style="text-align: center;">
                  <td><?= $no; ?></td>
                  <td><?= $u['name_user'] ?></td>
                  <td><img class="img-fluid" src="<?= base_url('foto/') . $u['doc'] ?>" alt="" style="width:75px ;"></td>
                  <td><span class="d-inline-block text-truncate" style="max-width: 200px;max-height: 100px;"><?= $u['title_berita'] ?></span></td>
                  <td>
                    <span class="d-inline-block text-truncate" style="max-width: 250px;"><?= $u['isi_berita'] ?></span>
                  </td>
                  <td><?= $u['jadwal_tayang'] ?></td>
                  <td><?= $u['name_kategori'] ?></td>
                  <td><?php if ($u['status'] == 'Published') { ?>
                      <span class="badge bg-success"><?= $u['status'] ?></span>
                    <?php } else { ?>
                      <span class="badge bg-danger"><?= $u['status'] ?></span>
                    <?php } ?>
                  </td>
                  <td class="text-center" style="max-width: 300px;">
                    <a href="<?= base_url('editnews/' . $u['berita']) ?>" type="button" class="bi bi-pencil-square" style="color:limegreen">
                    </a>
                    <a href="<?= base_url('deletenews/' . $u['berita']) ?>" type="button" class="bi bi-trash-fill" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
                    </a>
                    <a onclick="detailnews(<?= $u['berita'] ?>)" type="button" class="bi bi-newspaper" style="color:black" data-bs-toggle="modal" data-bs-target="#detailnews">
                    </a>
                  </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>

    <div id="detailnews" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detail News</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="result_detailnews">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </section>

</main><!-- End #main -->