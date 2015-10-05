<!DOCTYPE html>
<html lang="en">
<head>
<!--Put head content you want in the entire website in the header.php file. -->

<?php require_once "header.php"; ?>
</head>

<body>

<!--The wrapper class wraps around the entire website, including the top navigation, banner images if you have one, and the footer.-->
<div class = "wrapper"> 
	
	<!--Put the top bar navigation and banner images if you have them into the nav.php file.  -->
	<?php require_once "nav.php" ?>
	<div class="container-fluid background-clear">
		<div class="row " > 
			
			<!--The comment class is for the main body of each page. It does not include the top navigation, banner images, or the footer. -->
			<p>Welcome to the White Buffalo website template. The code for this website is heavily commented so you will know how to use this template with a minumum of knowledge of HTML/CSS.  See the <a href="about.php">About</a> page for instructions on how to use this template. </p>
		</div>
		<!--End row--> 
	</div>
	<!--End container--> 
	
	<!--Use the "container" or "container-fluid" around your website Bootstrap rows and columns. It adds some padding, and you can override this in css/styles.css. -->
	<div class="container-fluid background-tint"> 
		
		<!--This starts a new row. You can also nest a row within a column. -->
		<div class="row " >
			<h2 class="text-center"><strong>WEBSITE ORGANIZATION</strong></h2>
			<p>This template uses the PHP function <b>require_once</b> to avoid duplication of content that goes on more than one web page. </p>
			
			<!--This starts a new column in the row. Bootstrap divides the columns into 12 parts. Since this div has the class col-md-4 the colum is 4/12ths of the screen. Note that columns do not need to be of each width.-->
			<div class="col-md-4">
				<h3>header.php</h3>
				<p>This file contains the website meta data and links to the css files used throughout the website.</p>
			</div>
			<!--End column-->
			
			<div class="col-md-4">
				<h3>nav.php</h3>
				<p>This file contains the website navigation and header images. The template default includes a php script that gives you the option to have one header image on the home page and a smaller header image on all other pages. The default setting for the navigation bar keeps the nav bar static on the page with a shadow to show that the rest of the website will scroll underneath it. </p>
			</div>
			<!--End column-->
			<div class="col-md-4">
				<h3>footer.php</h3>
				<p>This file contains the content of the footer as well as links to the javascript files used throughout the website. The javascript files include jQuery and Bootstrap.</p>
			</div>
			<!--End column--> 
		</div>
		<!--End row--> 
	</div>
	<!--End container-->
	
	<div class="container-fluid background-clear">
		<div class="row" >
			<h2 class="text-center"> <strong>FOUR INTERACTIVE ACTIVITIES</strong></h2>
			<div class="col-md-3 col-sm-6 col-xs-12"> <a href="quiz.php">
				<h3>Fun Quiz</h3>
				</a> <img src="images/home_quiz.png" class="img-responsive" width="300px" height="300px"  />
				<p>This is the classic multiple choice quiz. Users receive feedback as they answer each question and a final score at the end of the quiz. It is based on the tutorial by<a href="http://www.flashbynight.com/tutes/mcqquiz/" target="_blank"> Flash By Night.</a></p>
			</div>
			<!--End column-->
			
			<div  class="col-md-3 col-sm-6 col-xs-12"> <a href="picture-quiz.php">
				<h3>Picture Quiz</h3>
				</a> <img src="images/home_picture-quiz.png" width="300px" height="300px" class="img-responsive"/>
				<p>This is a picture quiz. Users read the question and then click or touch the picture they select. They receive feedback as they answer each question and a final score at the end of the quiz. It is based on the tutorial by <a href="http://www.flashbynight.com/tutes/pixquiz/" target="_blank">Flash By Night.</a></p>
			</div>
			<!--End column-->
			
			<div class="col-md-3 col-sm-6 col-xs-12"> <a href="puzzle.php">
				<h3>Puzzle</h3>
				</a> <img src="images/home_puzzle.png" class="img-responsive" width="300px" height="300px" />
				<p>Similar to a jigsaw puzzle, the javascript code scrambles the image. Users touch two squares to trade their places. This quiz is based on the tutorial by <a href="http://code.tutsplus.com/tutorials/create-an-html5-canvas-tile-swapping-puzzle--active-10747" target="_blank">Brad Manderscheid</a> and posted on Tuts+.</p>
			</div>
			<!--End column-->
			
			<div  class="col-md-3 col-sm-6 col-xs-12"> <a href="word-find.php">
				<h3>Word Find</h3>
				</a> <img src="images/home_word-find.png"  class="img-responsive" width="300px" height="300px" />
				<p>This word find game is based on the code by <a href="https://code.google.com/p/jquery-wordsearch-game/" target="_blank">Ryan Fernandes</a> and is covered by an MIT license. It has a lot of bells and whistles. As users find a word, there is an animation to cross it off the list of words. </p>
			</div>
			<!--End column--> 
		</div>
		
		<!--End row--> 
	</div>
	<!--End container-->
	
	<div class="container-fluid background-tint">
		<div class="row background-tint" >
			<h2 class="text-center"><strong>BOOTSTRAP PHOTO GALLERIES</strong></h2>
			<div class="col-md-6"> <a href="gallery-modal.php">
				<h3>Photo Gallery with Modal Slide Show</h3>
				</a> <img src="images/home_modal.png"  class="img-responsive" width="600px" height="425px" />
				<p></p>
			</div>
			<!--End column-->
			
			<div class="col-md-6"> <a href="gallery-slider.php">
				<h3>Slide Show</h3>
				</a> <img src="images/home_slider.png"  class="img-responsive" width="600px" height="425px" /> </div>
			<!--End column--> 
		</div>
		<!--End row--> 
	</div>
	<div class="container-fluid background-clear">
		<div class="row background-clear">
			<h2 class="text-center"> Other Features</h2>
			<div class="col-md-12"> <a href="contact.php">
				<h3>Contact Form</h3>
				</a>
				<p>The contact form uses PHP to send an email to a designated email address with the information on the form. It is heavily commented so that a user without knowledge of PHP will be able to modify it for their use. No mySql is used for this form.</p>
			</div>
			<!--End column--> 
			
		</div>
		<!--End row--> 
		
	</div>
	<!--End Container--> 
	
</div>
<!--End Content-->

</div>
<!--End Wrapper-->

<?php require_once "footer.php"; ?>
<?php require_once "js-files.php"; ?>
</body>
</html>