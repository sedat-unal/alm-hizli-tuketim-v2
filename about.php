<?php include_once("inc/header.php"); ?>

<body>
    <?php include_once("inc/menu.php"); ?>
    <!--//header-->
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Hakkımızda</li>
    </ol>
    <!--//banner-->
    <section class="banner-bottom">
        <div class="container">

            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">

                <div class="col-lg-5 bt-bottom-info" data-aos="fade-right">
                    <h5><?= $sirket_adi_yasal ?></h5>

                </div>
                <div class="col-lg-7 bt-bottom-info" data-aos="fade-left">
                    <!-- <img src="images/banner1.jpg" class="img-fluid" alt=" "> -->
                    <?php
                    $query = $dbh->query('select content from about_us');
                    while ($row = $query->fetch()) {
                    ?>
                        <p class="mt-3"><?= $row['content'] ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!---->

    <?php
    $query = '';
    $query = $dbh->query('select title, img, description, content from resmibelgeler where status = 1');
    $i = 0;
    while ($row = $query->fetch()) {
        if ($i == 0) {
        ?>
            <section class="services">
            <div class="container">
            <h3 class="tittle">Resmi Belgelerimiz
            </h3>
            <div class="row inner-sec-wthree">

            <?php
        }

        ?>
        <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
            <div class="section_1_gallery_grid">
                <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/<?= $row['img'] ?>">
                    <div class="section_1_gallery_grid1">
                        <img src="images/<?= $row['img'] ?>" alt="<?= $row['description'] ?>" class="img-fluid" />
                        <div class="proj_gallery_grid1_pos">
                            <h3><?= $row['title'] ?></h3>
                            <p><?= $row['content'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php

        if ($i == 0) {
        ?>
            </div>
            </div>
            </section>
        <?php
        }
    }
    ?>
    <!-- /stats -->
    <!---->
    <!--footer-->
    <?php include_once("inc/footer.php"); ?>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
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
    <!-- /js files -->
    <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <script src='js/aos.js'></script>
    <script src="js/aosindex.js"></script>
    <!-- //js files -->
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