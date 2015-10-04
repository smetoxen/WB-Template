<!DOCTYPE HTML>
<html>
	<head>
	<?php require_once "header.php" ?>
	
	<!--The link to jQuery is included here rather than at the end of the body because the word find game requires the jQuery file to load at the beginning. The js-files.php file is not referenced on this page.-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


	<!--This code redirects the webpage to a smaller word find game for devices with a screen width less than 660 pixels-->
	<script>
		if (screen.width <= 660) {
			document.location = "http://isthisanagate.com/word-find-mobile.php";
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
<link rel="stylesheet" type="text/css" href="wordfind/jquery.wordsearchgame.css">
</style>
	</head>

	<body>
<div class = "wrapper">

	<?php require_once "nav.php" ?>

		<div class="content wbcenter"> <img src="images/Minnesota.jpg" style="max-width:267px; width:30%; height:auto;float:left;margin:20px" alt="Minnesota State Sign">
		<h1 style="margin-bottom:20px;text-align:left;color:#902828">The Great Minnesota Rock Hunt</h1>
		<h3>What types of rocks can you find in Minnesota? There are many kinds of rocks in Minnesota, including the Lake Superior Agate, the official Minnesota gemstone! See if you can find them all. </h3>
		<p>Photo by Andriy Kravchenko<br/>
				Copyright: <a href='http://www.123rf.com/profile_andreykr'>andreykr / 123RF Stock Photo</a></p>
		<div id="theGrid" style="display:block;clear:both"></div>
	</div>
		<!--End Content--> 
		
	</div>
<script type="text/javascript" src="wordfind/jquery-ui-1.8.16.custom.min.js"></script> 
<script type="text/javascript" src="wordfind/jquery.wordsearchgame.js"></script> 
<script src="wordfind/jquery.ui.touch-punch.min.js"></script> 
<script>
		$(document).ready( function () {
			var words = 			"lake,superior,agate,eye,banded,tube,amethyst,laker,keweenaw,moss,"+
				"fossil,geode,chert,quartz,jasper,granite,sandstone,greenstone,taconite";
	
		//attach the game to a div
		$("#theGrid").wordsearchwidget({"wordlist" : words,"gridsize" : 20});

		});


	</script>
<?php require_once "footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
	 	$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});
     
     
     </script>
</body>
</html>