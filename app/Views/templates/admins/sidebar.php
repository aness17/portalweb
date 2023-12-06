<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php
        if (session('role') == '1' || session('role') == '2') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?= ($header != "dashboard") ? 'collapsed' : ''; ?>" href="<?= base_url('admins') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->
        <?php
        }
        if (session('role') == 1) {
        ?>
            <li class="nav-item ">
                <a class="nav-link <?= ($header != "user") ? 'collapsed' : ''; ?>" href="<?= base_url('datauser') ?>">
                    <i class="bi bi-person"></i>
                    <span>User Data</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php
        }
        if (session('role') == 1) {
        ?>
            <li class="nav-item ">
                <a class="nav-link <?= ($header != "cat") ? 'collapsed' : ''; ?>" href="<?= base_url('datakategori') ?>">
                    <i class="bi bi-person"></i>
                    <span>Category Data</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php
        }
        if (session('role') == '1' || session('role') == '2') {

        ?>
            <li class="nav-item ">
                <a class="nav-link <?= ($header != "newsp") ? 'collapsed' : ''; ?>" href="<?= base_url('datanews') ?>">
                    <i class="bi bi-person"></i>
                    <span>News Data</span>
                </a>
            </li><!-- End Profile Page Nav -->

        <?php
        }
        if (session('role') == '1' || session('role') == '2') {
        ?>
            <li class="nav-item ">
                <a class="nav-link <?= ($header != "comment") ? 'collapsed' : ''; ?>" href="<?= base_url('datacomment') ?>">
                    <i class="bi bi-person"></i>
                    <span>Comment Data</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php
        }
        if (session('role') == 1) {
        ?>
            <li class="nav-item ">
                <a class="nav-link <?= ($header != "info") ? 'collapsed' : ''; ?>" href="<?= base_url('datainformasi') ?>">
                    <i class="bi bi-person"></i>
                    <span>Information</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php
        }
        if (session('role') == '1' || session('role') == '2') {
        ?>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?= base_url('/') ?>">
                    <i class="bi bi-person"></i>
                    <span>News Page</span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php
        }
        if (session('role') == '1' || session('role') == '2') {
        ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('logout') ?>">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>Log out</span>
                </a>
            </li><!-- End Login Page Nav -->
        <?php } ?>
    </ul>

</aside><!-- End Sidebar-->