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
        <li class="breadcrumb-item active">Referanslarımız</li>
    </ol>

    <?php
    $query = '';
    $query = $dbh->query('select title, img from our_references where status = 1');
    $i = 0;
    while ($row = $query->fetch()) {
        if ($i == 0) {
        ?>
            <section class="services">
            <div class="container">
            <h3 class="tittle">Referanslarımız
            </h3>
            <div class="row inner-sec-wthree">

            <?php
        }

        ?>
        <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
            <div class="section_1_gallery_grid">
                <div class="section_1_gallery_grid1">
                    <img src="images/references/<?= $row['img'] ?>" alt="<?= $row['title'] ?>" class="img-fluid" />
                </div>
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