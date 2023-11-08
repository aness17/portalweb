<br />
<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('foto/' . $news[0]['doc']) ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $news[0]['name_kategori'] ?></a>
                            <a class="text-body" href=""><?= date('M d, Y', strtotime($news[0]['jadwal_tayang'])) ?></a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold" style="font-size: 25pt;"><?= $news[0]['title_berita'] ?></h1>
                        <?= $news[0]['isi_berita'] ?>

                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $news[0]['fotouser']) ?>" width="25" height="25" alt="">
                                <span><?= $news[0]['name_user'] ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
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

                            use PhpParser\Node\Stmt\Echo_;

                            $a = 0;
                            foreach ($comment as $c) : ?>
                                <div class="media mb-4">
                                    <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $c['fotouser']) ?>" width="45" height="45" alt="">
                                    <div class="media-body">
                                        <h6><span style="font-weight: bold;"><?= $c['name_user'] ?> </span><small><i><?= date('d M Y', strtotime($c['created_at'])) ?></i></small></h6>
                                        <p><?= $c['comment_content'] ?></p>
                                        <a <?php if (session('id_user') == null) {
                                                echo 'href="' . base_url('login') . '"';
                                            } else {
                                                echo 'onclick="balas(' . $c['id'] . ')"';
                                            } ?>>Reply</a>
                                        <?php
                                        foreach ($balas as $b) :
                                            if ($c['id'] == $b['id_parent']) {
                                        ?>
                                                <div class="media mt-4">
                                                    <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $b['fotouser']) ?>" width="45" height="45" alt="">
                                                    <div class="media-body">
                                                        <h6><span style="font-weight: bold;"><?= $b['name_user'] ?></span> <small><i><?= date('d M Y', strtotime($b['created_at'])) ?></i></small></h6>
                                                        <p><?= $b['comment_content'] ?></p>
                                                    </div>
                                                </div>
                                        <?php }
                                            $a++;
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            <?php $a++;
                            endforeach;

                            if (session('id_user') > 0) { ?>
                                <div class="media">
                                    <form method="post" action="<?= base_url('comment') ?>">
                                        <img class="rounded-circle mr-2" src="<?= base_url('foto/' . $user[0]['fotouser']) ?>" width="45" height="45" alt="">
                                        <input type="text" name="comment" class="form-control" id="comment" placeholder="Add Comment ...">
                                        <input type="hidden" name="idberita" value="<?= $news[0]['berita'] ?>" />
                                        <button type="submit" class="btn btn-primary" style="font-size: 12pt;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Comment List End -->

                </div>
            </div>
            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Fans</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->
<script>
    document.getElementById("nodeGoto").addEventListener("click", function() {
        gotoNode(result.name);
    }, false);

    ​
</script>