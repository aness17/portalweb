<main id="main" class="main">

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">User Data</h5>
            <a href="<?= base_url('form_adduser') ?>" type="button" class="btn" style="font-size:25px;">
              <i class="bi bi-plus-circle"></i>
            </a>
          </div>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Profile</th>
                <th scope="col">Name Employee</th>
                <th scope="col">Division</th>
                <th scope="col">E-mail</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="list">
              <?php $no = 1;
              // $user = $this->db->query("SELECT * FROM user where fk_role = '2'");
              foreach ($user as $u) : ?>
                <tr style="text-align: center;">
                  <td><?= $no; ?></td>
                  <td><img class="img-fluid" src="<?= base_url('foto/') . $u['fotouser'] ?>" alt="" style="width:75px ;"></td>
                  <td><?= $u['name_user'] ?></td>
                  <td><?= $u['divisi_user'] ?></td>
                  <td><?= $u['email_user'] ?></td>
                  <td><?php if ($u['role_user'] == 1) {
                        echo "Superadmin";
                      } elseif ($u['role_user'] == 2) {
                        echo "Admin";
                      } else {
                        echo "User";
                      } ?></td>
                  <td class="text-center">
                    <a href="<?= base_url('form_edituser/' . $u['id']) ?>" type="button" class="bi bi-pencil-square" style="color:limegreen">
                    </a>
                    <a href="<?= base_url('deleteuser/' . $u['id']) ?>" type="button" class="bi bi-trash-fill" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
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