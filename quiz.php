<!--This is the multiple choice quiz. The actual quiz is in the file js/quiz-controller.js -->

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>

<!--If you have more than one quiz in your website, give each quiz a unique variable.  
The name of this quiz is "fun"

See the quiz.json file to change the quiz questions to your own. JSON is very easy to learn. 
It is not a programming language. It is a way to format data objects.

The javascript that runs this quiz is in js/quiz-controller.js. In the javascript file you will find the
code to set your custom quiz feedback.

The jquery is referenced in head--needs to be in the head for the quiz to work. 
Note that the jsfiles.php is not included at the end of the body. 
-->
<script> var quiz = "fun"; </script>
<!-- Custom styles for the multiple choice quiz -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/quiz-controller.js"></script>
<link href="css/quiz.css"rel="stylesheet"type="text/css"/>
</head>

<body>
<div class = "wrapper">
	<?php require_once "nav.php" ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row"> <br>
				<div class="col-md-9">
					<div id="topbar">
						<h1 style="text-align:center">Fun Quiz</h1>
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
	  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>