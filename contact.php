<?php include('db/connect.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title><?=$site_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="<?=$site_keywords?>" />
    <meta name="description" content="<?=$site_description?>" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/contact.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">
</head>

<body>
<?php include_once("inc/menu.php"); ?>
    <!--//header-->
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">İletişim</li>
    </ol>
    <!--//banner-->
    <!--/Contact-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Bizimle İletişime Geç</h3>

            <div class="row inner-sec-wthree">
                <div class="contact-map">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=+(Almila%20Ambalaj)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe> -->
                </div>
                <div class="address row">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                            <h6>Telefon Numarası</h6>
                                <a href="tel:<?=$sirket_phone?>">
                                    <p><?=$sirket_phone?></p>
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>E-Mail</h6>
                                <p>
                                    <a href="mailto:<?=$sirket_mail?>"><?=$sirket_mail?></a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Açık Adres</h6>
                                <p>Büyükbakkalköy Yolu, Full Ada Sitesi Maltepe / İstanbul</p>
                            </div>
                        </div>
                    </div> -->

                </div>

                <div class="contact_grid_right">
                    <h6>İletişime geçmek için lütfen formu doldurun.</h6>
                    <form action="./inc/form_post.php" method="post">
                        <div class="contact_left_grid">
                            <input type="text" name="Name" placeholder="İsim Soyisim" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Subject" placeholder="Konu" required="">
                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mesajınız...';}" required="">Mesajınız...</textarea>
                            <input type="submit" value="Gönder">
                            <input type="reset" value="TEMİZLE">
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--//Contact-->
    <!--footer-->
    <?php include_once("inc/footer.php"); ?>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
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