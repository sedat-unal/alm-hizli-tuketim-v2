<?php include_once("inc/header.php"); ?>

<body>
    <?php include_once("inc/menu.php"); ?>
    <!--//header-->
    <!--/banner-->
    <?php include_once("inc/slider.php"); ?>
    <!--/model-->
    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body video">
                    <iframe src="https://player.vimeo.com/video/13618190" width="640" height="360" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <!--//model-->
    <!--//banner-->
    <section class="banner-bottom">
        <div class="container">

            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">
                <?php
                $query2 = $dbh->query('select top_fade_right_en, top_fade_left_en from index_tr');
                while ($row2 = $query2->fetch()) {
                ?>
                    <div class="col-lg-5 bt-bottom-info" data-aos="fade-right">
                        <h5><?= $row2['top_fade_right_en'] ?></h5>
                    </div>
                    <div class="col-lg-7 bt-bottom-info" data-aos="fade-left">
                        <p><?= $row2['top_fade_left_en'] ?></p>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="row inner-sec-wthree">
                <?php
                $query3 = $dbh->query('select icon_en, subTitle_en, content_en, href from index_icons1 where status_en = 1');
                while ($row3 = $query3->fetch()) {
                ?>
                    <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                        <div class="bt-icon">

                            <span class="<?= $row3['icon_en'] ?>"></span>
                        </div>

                        <h4 class="sub-tittle"><?= $row3['subTitle_en'] ?></h4>
                        <p><?= $row3['content_en'] ?></p>
                        <p>
                            <!-- <a class="btn btn-secondary view" href="<?php /*echo $row3['href'] */ ?>" role="button">View details</a> -->
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                <?php
                }

                ?>

            </div>
        </div>
        <!-- /.row -->
    </section>
    <!---->
    <!-- /stats -->
    <?php
    $count = $dbh->query('select count(*) from index_icons2 where status_en = 1')->fetchColumn();
    if ($count > 1) {
    ?>
        <section class="stats_test container-fluid">
            <div class="row inner_stat">
                <div class="col-lg-6 stats-left-info">
                    <div class="row">
                        <?php
                        $i = 0;
                        $query4 = $dbh->query('select icon_en,number_en,title_en from index_icons2 where status_en = 1');
                        while ($row4 = $query4->fetch()) {
                        ?>
                            <div class="col-md-6 stats_left counter_grid<?= $i != 0 ? '' . $i : "" ?>">
                                <i class="<?= $row4['icon_en'] ?>"></i>
                                <p class="counter"><?= $row4['number_en'] ?></p>
                                <h4><?= $row4['title_en'] ?></h4>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6" style="
            background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.13)), url(images/ab1.jpg) no-repeat;
            background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/ab1.jpg) no-repeat;
            background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/ab1.jpg) no-repeat;
            background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.18)), url(images/ab1.jpg) no-repeat;
            background-size: cover;
            min-height: 600;">
                </div>
            </div>
        </section>

    <?php
    }
    ?>

    <!-- //stats -->
    <!--/services-->
    <?php
    $count = $dbh->query('select count(*) from nedenbiz')->fetchColumn();
    if ($count > 1) {
    ?>
        <section class="services">
            <div class="container">
                <h3 class="tittle">Why Choose Us ?</h3>
                <div class="row inner-sec-wthree">
                    <div class="col-lg-4 grid_info_main" data-aos="flip-left">
                        <?php
                        $i = 1;
                        $query = $dbh->query('select * from nedenbiz limit 2');
                        while ($row = $query->fetch()) {
                        ?>
                            <div class="grid_info <?= $i == 2 ? 'second' : '' ?>">
                                <div class="icon_info">
                                    <span class="icon">
                                        <i class="<?= $row['icon_en'] ?>"></i>
                                    </span>
                                    <h5><?= $row['title_en'] ?></h5>
                                    <p><?= $row['content_en'] ?></p>
                                </div>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
                        <img src="images/ab.jpg" class="img-fluid" alt=" ">
                    </div>
                    <div class="col-lg-4 grid_info_main" data-aos="flip-right">
                        <?php
                        $i = 1;
                        $query = $dbh->query('select * from nedenbiz order by id desc limit 2');
                        while ($row = $query->fetch()) {
                        ?>
                            <div class="grid_info <?= $i == 2 ? 'second' : '' ?>">
                                <div class="icon_info">
                                    <span class="icon">
                                        <i class="<?= $row['icon_en'] ?>"></i>
                                    </span>
                                    <h5><?= $row['title_en'] ?></h5>
                                    <p><?= $row['content_en'] ?></p>
                                </div>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>


                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--//services-->
    <!---->
    <?php
    $count = $dbh->query('select count(*) from index_down where status_en = 1')->fetchColumn();
    if ($count > 1) {
    ?>
        <section class="grids_sec_2">
            <div class="row style-grids_main">
                <?php
                $i = 0;
                $q = $dbh->query('select title_en, text_en, img_en from index_down where status = 1');
                while ($row = $q->fetch()) {
                    if ($i % 2 == 0) {
                ?>
                        <div class="col-md-6 grid_sec_info">
                            <div class="style-grid-2-text_info" data-aos="fade-right">
                                <h3><?= $row['title_en'] ?></h3>
                                <p><?= $row['text_en'] ?></p>
                                <!-- <div class="bnr-button">
                                <button type="button" class="btn btn-primary play" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div> -->

                            </div>
                        </div>
                        <div class="col-md-6" style="background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/<?= $row['img_en'] ?>) no-repeat;
                        background-size: cover;
                        min-height: 600px;">
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-md-6" style="background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/<?= $row['img_en'] ?>) no-repeat;
                        background-size: cover;
                        min-height: 600px;">
                        </div>
                        <div class="col-md-6 grid_sec_info">
                            <div class="style-grid-2-text_info" data-aos="fade-right">
                                <h3><?= $row['title_en'] ?></h3>
                                <p><?= $row['text_en'] ?></p>
                                <!-- <div class="bnr-button">
                                <button type="button" class="btn btn-primary play" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div> -->

                            </div>
                        </div>
                <?php
                    }
                    $i++;
                }
                ?>
            </div>
        </section>
    <?php
    }
    ?>

    <!--/Projects-->
    <?php
    $count = $dbh->query('select count(*) from index_gallery where status_en = 1')->fetchColumn();
    if ($count > 1) {
    ?>
        <section class="services">
            <div class="container">
                <h3 class="tittle">Last Jobs
                </h3>
                <div class="row inner-sec-wthree">
                    <?php
                    $query = $dbh->query('select title_en, img_en, description_en, content_en from index_gallery where status_en = 1');
                    while ($row = $query->fetch()) {
                    ?>
                        <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                            <div class="section_1_gallery_grid">
                                <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/<?= $row['img_en'] ?>">
                                    <div class="section_1_gallery_grid1">
                                        <img src="images/<?= $row['img_en'] ?>" alt="<?= $row['description_en'] ?>" class="img-fluid" />
                                        <div class="proj_gallery_grid1_pos">
                                            <h3><?= $row['title_en'] ?></h3>
                                            <p><?= $row['content_en'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

    <!--//Projects-->
    <!--reviews_sec-->
    <!-- <section class="reviews_sec" id="testimonials">
        <h3 class="tittle cen">Testimonial</h3>
        <div class="inner-sec-wthree">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t3.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
                                                    <i class="fab fa-facebook-f"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
                                                    <i class="fab fa-twitter"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Gretchen
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
                                    scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu
                                    accumsan cursus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t2.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
                                                    <i class="fab fa-facebook-f"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
                                                    <i class="fab fa-twitter"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Esmeralda
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
                                    scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu
                                    accumsan cursus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t1.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1">
                                                    <i class="fab fa-facebook-f"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2">
                                                    <i class="fab fa-twitter"></i>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Anamaria
                                    <span>Customer</span>
                                </h3>
                                <i>United States</i>
                                <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
                                    scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu
                                    accumsan cursus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section> -->
    <!---->
    <!--footer-->
    <?php include_once("inc/footer.php"); ?>
    <!---->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- simpleLightbox -->
    <script src="js/simpleLightbox.js"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();
    </script>
    <!-- //simpleLightbox -->
    <!-- /js files -->
    <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <script src='js/aos.js'></script>
    <script src="js/aosindex.js"></script>
    <!-- //js files -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <!-- //flexSlider -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->


</body>

</html>