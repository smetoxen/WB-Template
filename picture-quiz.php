<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>

<!--
See the picture-quiz.json file to change the quiz questions and images to your own. JSON is very easy to learn. 
It is not a programming language. It is a way to format data objects.

The javascript that runs this quiz is in js/picture-quiz-controller.js. In the javascript file you will find the
code to set your custom quiz feedback.

The jquery is referenced in head--needs to be in the head for the quiz to work. 
Note that the jsfiles.php is not included at the end of the body. 

-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/picture-quiz-controller.js"></script>
<link href="css/picture-quiz.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper picture-quiz-wrapper">
<?php require_once "nav.php"; ?>

	<div id="topbar">
		<h1>Picture Quiz</h1>
		<p>This code is from the tutorial by <a href="http://www.flashbynight.com/tutes/pixquiz/" title="Flash By Night Picture Quiz" target="_blank">Flash&nbsp;By&nbsp;Night</a></p>
	
	
	</div>
	<div class="spacer"></div>
	<div id="navContent" >
		<div id="game1"></div>
		<div id="game2"></div>
	</div>
</div>
<div class="spacer"></div>
<hr />
</div>
<!--End row-->

</div>
<!--End Container-->

</div>
<!--End Content-->

</div>
<!--End Wrapper-->

<?php require_once "footer.php"; ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
