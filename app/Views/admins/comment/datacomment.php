<main id="main" class="main">

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Comment Data</h5>
            <!-- <a href="<?= base_url('addcomment') ?>" type="button" class="btn" style="font-size:25px;">
              <i class="bi bi-plus-circle"></i>
            </a> -->
          </div>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">News Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Comment</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
              <?php $no = 1;
              // $user = $this->db->query("SELECT * FROM user where fk_role = '2'");
              foreach ($cmt as $u) : ?>
                <tr style="text-align: center;">
                  <td><?= $no; ?></td>
                  <td><?= $u['title_berita'] ?></td>
                  <td><?= $u['name_user'] ?></td>
                  <td><?= $u['comment_content'] ?></td>
                  <td><?= $u['created_at'] ?></td>
                  <td><?php if ($u['status_content'] == '1') { ?>
                      <span class="badge bg-success">Publish</span>
                    <?php } else { ?>
                      <span class="badge bg-danger">Unpublish</span>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?= base_url('delete_comment/' . $u['id']) ?>" type="button" class="bi bi-trash-fill" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
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
    <!-- </div> -->
  </section>

</main><!-- End #main -->