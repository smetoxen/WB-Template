<!--This is the multiple choice quiz. The actual quiz is in the file js/quiz-controller.js -->

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>

<!--If you have more than one quiz in your website, give each quiz a unique variable.  The name of this quiz is "fun"-->
<script> var quiz = "fun"; </script>
<!-- Custom styles for the multiple choice quiz -->
<link href="css/quiz-style.css" rel="stylesheet">
</head>

<body>
<div class = "wrapper">
	<?php require_once "nav.php" ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row"> <br>
				<div class="col-md-9">
					<div id="topbar">
						<h2 style="text-align:center">Fun Numbers Quiz<br>
							<span class="glyphicon glyphicon-star"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></span></h2>
					</div>
					<div class="spacer"></div>
					<div id="navContent">
						<div id="game1"></div>
						<div id="game2"></div>
					</div>
				</div>
				<div class="col-md-3"> </div>
			</div>
		</div>
		<!-- /container --> 
		
	</div>
	<!--End Content--> 
	
</div>
<!--End wrapper-->

<?php 
	  	require_once "footer.php";
	  ?>
<script src="js/quiz-controller.js"></script>
</body>
</html>