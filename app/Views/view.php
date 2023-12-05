<br />
<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('foto/' . $news[0]['doc']) ?>" style="width: 300px;height: 400px;">
                    <div class="bg-white border border-top-0 p-4">

                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold" style="font-size: 25pt;"><?= $news[0]['title_berita'] ?></h1>
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $news[0]['name_kategori'] ?></a>
                            <a class="text-body" href=""><?= date('M d, Y', strtotime($news[0]['jadwal_tayang'])) ?></a>
                        </div>
                        <?= $news[0]['isi_berita'] ?>

                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $news[0]['fotouser']) ?>" width="25" height="25" alt="">
                                <span><?= $news[0]['name_user'] ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i><?= $countview ?></span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i><?= $countcomment ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold"><?= $countcomment ?> Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <?php
                            $a = 0;
                            foreach ($comment as $c) : ?>
                                <div class="media mb-4">

                                    <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $c['fotouser']) ?>" width="45" height="45" alt="">
                                    <div class="media-body">
                                        <h6><span style="font-weight: bold;"><?= $c['name_user'] ?> </span><small><i><?= date('d M Y', strtotime($c['created_at'])) ?></i></small></h6>
                                        <p><?= $c['comment_content'] ?></p>
                                        <a <?php if (session('id') == null) {
                                                echo 'href="' . base_url('login') . '"';
                                            } else {
                                                echo 'href="#modalreply" onclick="comment_reply(' . $c['id_comment'] . ')" data-toggle="modal"';
                                            } ?>>Reply
                                        </a>
                                        <?php
                                        foreach ($balas as $b) :
                                            if ($c['id_comment'] == $b['id_parent']) {
                                        ?>
                                                <div class="media mt-4">
                                                    <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $b['fotouser']) ?>" width="45" height="45" alt="">
                                                    <div class="media-body">
                                                        <h6><span style="font-weight: bold;"><?= $b['name_user'] ?></span> <small><i><?= date('d M Y', strtotime($b['created_at'])) ?></i></small></h6>
                                                        <p><?= $b['comment_content'] ?></p>
                                                    </div>

                                                    <?php if (session('id') == null) {
                                                        echo '';
                                                    } else if (session('id') == $b['id_user'] || session('id') == $b['id_creator'] || session('role') == 1) { ?>
                                                        <a href="<?= base_url('delete_comment/' . $b['id']) ?>" style="font-size:15px;">
                                                            <i class="fa fa-trash text-primary mr-2"></i>
                                                        </a> <?php } ?>
                                                </div>
                                        <?php }
                                            $a++;
                                        endforeach;
                                        ?>
                                    </div>
                                    <?php if (session('id') == null) {
                                        echo '';
                                    } else if (session('id') == $c['id_user'] || session('id') == $c['id_creator'] || session('role') == 1) { ?>
                                        <a href="<?= base_url('delete_comment/' . $c['id_comment']) ?>" style="font-size:15px;">
                                            <i class="fa fa-trash text-primary mr-2"></i>
                                        </a>
                                    <?php } ?>

                                    <div class="dropdown-menu ml-5">
                                        <a><i class="bi bi-three-dots"></i></a>
                                        <ul>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php $a++;
                            endforeach;

                            if (session('id') > 0) { ?>
                                <form method="post" action="<?= base_url('comment') ?>">
                                    <div class="media">
                                        <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $user['fotouser']) ?>" width="45" height="45" alt="">
                                        <input type="text" name="comment" class="form-control" id="comment" placeholder="Add Comment ..." required>
                                        <input type="hidden" name="idberita" value="<?= $news[0]['berita'] ?>" />
                                        <button type="submit" class="btn btn-primary" style="font-size: 12pt;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </div>
                                </form>

                            <?php } ?>

                        </div>
                    </div>
                    <!-- Comment List End -->
                </div>
                <div class="modal fade" id="modalreply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" data-toggle="modal">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Transaction List</h5> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="reply_comment">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php $i = 1;
                        foreach ($breknew as $bn) :   ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px">
                                <img class="img-fluid" src="<?= base_url('foto/' . $bn['doc']) ?>" width="110pt" height="110pt" alt="" />
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $bn['name_kategori'] ?></a>
                                        <a class="text-body" href=""><small><?= date('M d, Y', strtotime($bn['created_at'])) ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold breaknews-truncate" href="<?= base_url('news/' . $bn['slug']) ?>"><?= $bn['title_berita'] ?></a>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->