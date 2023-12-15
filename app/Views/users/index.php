<div class="container-fluid bg-white">
    <br />
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12 ">
                        <div class="section-title shadow mb-2 bg-body rounded">
                            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 800px">
                                <form action="<?= base_url('/') ?>" method="post" class="input-group ml-auto d-none d-lg-flex">
                                    <select class="form-control col-4 text-black" id="exampleFormControlSelect1" name="value">
                                        <option value="content" <?= ('content' == $value) ? "selected" : "" ?>>Search by Content</option>
                                        <option value="category" <?= ('category' == $value) ? "selected" : "" ?>>Search by Category</option>
                                    </select>
                                    <input type="text" class="form-control border-1 text-black" name="search" value="<?= $search ?>" />
                                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?php $no = 1;
                        foreach ($new as $u) :
                            // var_dump($u);
                            // die;
                            $a = str_replace('<p>', '', $u['isi_berita']);
                            $b = str_replace('</p>', '', $a);
                            $c = str_replace('<blockquote>', '', $b);
                            $d = str_replace('<br>', '', $c);
                            $result = str_replace('</blockquote>', '', $d);
                        ?>
                            <div class="d-flex align-items-center bg-white mb-3 shadow bg-body rounded" style="height: 110px">
                                <img class="img-fluid" src="<?= base_url('foto/') ?><?= $u['doc'] ?>" width="110" height="110" alt="" />
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $u['name_kategori'] ?></a>
                                        <span class="text-black"><small>Cengkareng, <?= date('d M Y', strtotime($u['created_at'])) ?></small></span>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold news-truncate" href="<?= base_url('news/' . $u['slug']) ?>"><?= $u['title_berita'] ?></a>
                                    <span class="text-black news-truncate"><small><?= $result ?></small></span>
                                </div>
                            </div>
                        <?php $no++;
                        endforeach; ?>
                    </div>
                    &nbsp;&nbsp;
                    <?php
                    echo $pager->links('news', 'pagination');

                    ?>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Social Follow End -->
                <!-- Popular News Start -->
                <div class="mb-3 shadow bg-body rounded">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">
                            Trending News
                        </h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php $i = 1;
                        foreach ($breknew as $bn) :   ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px">
                                <img class="img-fluid" src="<?= base_url('foto/' . $bn['doc']) ?>" width="110pt" height="110pt" alt="" />
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $bn['name_kategori'] ?></a>
                                        <a class="text-black" href=""><small><?= date('M d, Y', strtotime($bn['created_at'])) ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold breaknews-truncate" href="<?= base_url('news/' . $bn['slug']) ?>"><?= $bn['title_berita'] ?></a>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                </div>
                <!-- Popular News End -->
                <!-- Tags Start -->
                <!-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div> -->
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- Featured News Slider Start -->
<!-- <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px">
                    <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px">
                    <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px">
                    <img class="img-fluid h-100" src="img/news-700x435-3.jpg" style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px">
                    <img class="img-fluid h-100" src="img/news-700x435-4.jpg" style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px">
                    <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Featured News Slider End -->