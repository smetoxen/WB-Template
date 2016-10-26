<!--This is the Bootstrap slider. This code can be used to make a full width slider by adjusting the max-width and removing the margins. -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>
</head>

<body>
<div class = "wrapper">
	<?php require_once "nav.php" ?>
	<main class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Bootstrap Carousel Slider</h1>
					<div id="myCarousel-1" class="carousel slide wb-carousel" data-ride="carousel" data-interval="false"> <!--Override the CSS in the wb-carousel class in style.css -->
						<div class="carousel-inner" style="max-width:700px">
							<!-- Change these links and images for your own -->
							<div class="item active"> <a href="http://castonengineering.com/projects.php" target="_blank"><img src="images/portfolio/WebPortfolio.001.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://hatsoffamerica.com" target="_blank"><img src="images/portfolio/WebPortfolio.002.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://isthisanagate.com/quizEd.php" target="_blank"><img src="images/portfolio/WebPortfolio.003.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://isthisanagate.com/wordfind.php" target="_blank"><img src="images/portfolio/WebPortfolio.004.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://isthisanagate.com/puzzle.php?id=20" target="_blank"><img src="images/portfolio/WebPortfolio.005.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://organicamattress.com" target="_blank"><img src="images/portfolio/WebPortfolio.006.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://castonengineering.com" target="_blank"><img src="images/portfolio/WebPortfolio.007.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://neonimages.com" target="_blank"><img src="images/portfolio/WebPortfolio.008.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
							<div class="item "><a href="http://tobomarketing.com" target="_blank"><img src="images/portfolio/WebPortfolio.009.jpg" class="portfolio" width="100%" height="auto"  alt="Is this an agate website" /></a></div>
						</div>
						<!--end carousol inner--> 
						
						<a class="left carousel-control" style="background-color:none !important;" href="#myCarousel-1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel-1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<!-- /.carousel --> 
					</div>
				</div>
			</div>
		</div>
	<!-- /container --> 
	
	</main>
	<!--End Content-->

</div>
<!--End wrapper-->

<?php require_once "footer.php";?>
<?php require_once "js-files.php"; ?>
</body>
</html>