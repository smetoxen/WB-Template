<!DOCTYPE HTML>

<html>
<head>
<?php require_once "header.php" ?>
</head>

<body>
<div class = "wrapper" style="width:100%;margin-top:-50px"> <img src="images/header-small.png"  class="banner-img" />
	<div class="content" style="margin-left:auto;margin-right:auto;display:block;width:100%"> <a href="index.php" style="font-size:1.3em">Home</a>
		<h3 style="margin-bottom:20px;text-align:left;color:#902828">Word Find Mobile</h3>
		<p>This word find game is based on the code by <a href="https://code.google.com/p/jquery-wordsearch-game/" target="_blank">Ryan Fernandes</a> and is covered by an MIT license.</p>
		<div id="theGrid" style="display:block;margin:0px;padding:0px"></div>
		<br>
		<hr/>
	</div>
</div>
<!--End Content-->

<?php require_once "footer.php"; ?>
</div>
<script type="text/javascript" src="wordfind/jquery-1.6.2.min.js"></script> 
<script type="text/javascript" src="wordfind/jquery-ui-1.8.16.custom.min.js"></script> 
<script type="text/javascript" src="wordfind/jquery.wordsearchgame.js"></script> 
<script src="wordfind/jquery.ui.touch-punch.min.js"></script>
<link  rel="stylesheet" type="text/css" href="wordfind/jquery.wordsearchgame.css">
<script>
		$(document).ready( function () {var words = "html,css,php,code,nerd,geek,loop";
			
			//attach the game to a div
			$("#theGrid").wordsearchwidget({"wordlist" : words,"gridsize" : 8});

		});

    
        </script>
<?php require_once "footer.php"; ?>
</body>
</html>