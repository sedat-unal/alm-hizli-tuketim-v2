<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php include_once("inc/header.php"); ?>


<body>
	<?php include_once("inc/menu.php"); ?>
	<!--//header-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Products</li>
	</ol>
	<!--//banner-->

	<!--/Projets-->
	<?php
	$items = $_GET['item_id'];

	//db control if item exists
	$count = $dbh->query('SELECT count(*) FROM dropdowns WHERE dropdowns.status = 1 and dropdowns.page_link = "' . $items . '"')->fetchColumn();
	if ($count >= 1) {
		$title;
		$title_query = $dbh->query('SELECT title_en FROM dropdowns WHERE page_link ="' . $items . '"');
		while ($row = $title_query->fetch()) {
			$title = $row['title_en'];
		}
		echo '<section class="services">'."\n".'
			<div class="container">'."\n".'
			<h3 class="tittle">'. $title .'</h3>'."\n".'
			<div class="row inner-sec-wthree">'."\n".'';
		itemGeneretor($items);
		echo '</div></div></section>';

	} else {
	}

	?>
	<!--//projects-->
	<!--footer-->
	<?php include_once("inc/footer.php"); ?>
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