<!DOCTYPE html>
<html lang="en">
  <head>
  
      <title>Lake Superior Agates Quiz</title>

<?php
	require_once "header.php";
?>
    <title>The Da Vista Agate Quiz</title>
   
    <!--The jquery is referenced twice--needs to be in the header for the quiz to work. TODO-->
 	<script src="jquery.js"></script>
   <script src="js/picture-quiz-controller.js"></script>
  <link href="css/quiz.css"rel="stylesheet"type="text/css"/>
</head>
<body style="background-color:black;padding-top:0px">

	<div class="wrapper" style="max-width:1200px;margin-left:auto;margin-right:auto;background-color:black">


		

		<div id="topbar"><img src="images/DaVistaChallenge.jpg" width="100%" height="auto" style="margin:10px"/></div>
        
         <hr class="style-one" style="color:white;width:90%" />
       <div class="spacer"></div> 
      

		<div id="navContent" >

			<div id="game1"></div>
			<div id="game2"></div>
		</div>
      
     </div>
 
 <div class="spacer"></div>
   				 <hr class="style-one" style="color:white;width:90%" />
 
    			</div><!--End row-->
   
			</div><!--End Container-->    

		</div><!--End Content-->	
	
    </div><!--End Wrapper-->
	
	<?php require_once "footer.php"; ?>
    <?php require_once "js-files.php"; ?>

</body>
</html>
