<!DOCTYPE HTML>

<html>
<head>
<?php require_once "header.php" ?>
</head>

<body>
<div class = "wrapper" style="width:100%"> <img src="images/webbanner.png" style="max-width:1200px;width:100%;height:auto;margin-left:auto;margin-right:auto;margin-top:-50px;margin-bottom:0px;display:block;box-shadow:none" />
	<div class="content" style="margin-left:auto;margin-right:auto;display:block;width:100%"> <a href="index.php" style="font-size:1.3em">Home</a> | <a href="mailto:?subject=Try this fun Word Find about Agates&amp;body=Check out this word find that is all about Lake Superior Agates! http://www.IsThisAnAgate.com/wordfind.php." title="Share by Email" style="font-size:1.3em">Share with a Friend</a> <img src="images/Minnesota.jpg" style="max-width:267px; width:30%; height:auto;float:left;margin:20px">
		<h3 style="margin-bottom:20px;text-align:left;color:#902828">The Great Minnesota Rock Hunt</h3>
		<p>What types of rocks can you find in Minnesota? There are many kinds of rocks in Minnesota, including the Lake Superior Agate! See if you can find them all. </p>
		<p>Photo by Andriy Kravchenko<br/>
			Copyright: <a href='http://www.123rf.com/profile_andreykr'>andreykr / 123RF Stock Photo</a></p>
		<div id="theGrid" style="display:block;margin:0px;padding:0px"></div>
		<div style="background-color:white;clear:both"> <br>
			<br>
			<hr/>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
			<!-- WordFind --> 
			<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4660841321215547"
     data-ad-slot="9343635510"
     data-ad-format="auto"></ins> 
			<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		</div>
	</div>
	<!--End Content--> 
	
</div>
<?php require_once "footer.php" ?>
<script type="text/javascript" src="wordfind/jquery-1.6.2.min.js"></script> 
<script type="text/javascript" src="wordfind/jquery-ui-1.8.16.custom.min.js"></script> 
<script type="text/javascript" src="wordfind/jquery.wordsearchgame.js"></script> 
<script src="wordfind/jquery.ui.touch-punch.min.js"></script>
<link  rel="stylesheet" type="text/css" href="wordfind/jquery.wordsearchgame.css">
<script>
		$(document).ready( function () {var words = "agate,eye,tube,laker,moss,"+
						"fossil,geode,quartz,jasper,granite";
			
			//attach the game to a div
			$("#theGrid").wordsearchwidget({"wordlist" : words,"gridsize" : 8});

		});

    
        </script>
<?php require_once "footer.php"; ?>
<?php require_once "js-files.php"; ?>
</body>
</html>