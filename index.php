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
      
    <!--The comment class is for the main body of each page. It does not include the top navigation, banner images, or the footer. -->  
    <div class="content"> 
    
    	<p>Welcome to the White Buffalo website template. The code for this website is heavily commented so you will know how to use this template with a minumum of knowledge of HTML/CSS.  See the <a href="about.php">About</a> page for instructions on how to use this template. 
       
   <!--Use the "container" or "container-fluid" around your website Bootstrap rows and columns. It adds some padding, and you can override this in css/styles.css. -->
    <div class="container-fluid">
    
      <!--This starts a new row. You can also nest a row within a column. -->
 <div class="row">
    	  <h2>Website Organization</h2>
          <p>This template uses the PHP function <b>require_once</b> to avoid duplication of content that goes on more than one web page. </p>
       
          <!--This starts a new column in the row. Bootstrap divides the columns into 12 parts. Since this div has the class col-md-4 the colum is 4/12ths of the screen. Note that columns do not need to be of each width.-->
          <div class="col-md-4">
          		<h3>header.php</h3>
                <p>This file contains the website meta data and links to the css files used throughout the website.</p>
              
       	  </div><!--End column-->
          
          <div class="col-md-4">
          		<h3>nav.php</h3>
                <p>This file contains the website navigation and header images. The template default includes a php script that gives you the option to have one header image on the home page and a smaller header image on all other pages. The default setting for the navigation bar keeps the nav bar static on the page with a shadow to show that the rest of the website will scroll underneath it. </p>
              
       	  </div><!--End column-->
           <div class="col-md-4">
          		<h3>footer.php</h3>
                <p>This file contains the content of the footer as well as links to the javascript files used throughout the website. The javascript files include jQuery and Bootstrap.</p>
              
       	  </div><!--End column-->
      </div><!--End row-->
       
         <hr class="hr-style">                 
      
      <div class="row">
    	  <h2> Four interactive activities</h2>
       	
          <div class="col-md-3">
          		<a href="quiz.php"><h3>Multiple Choice Quiz</h3></a>
                <p>This is the classic multiple choice quiz. Users receive feedback as they answer each question and a final score at the end of the quiz. It is based on the tutorial by Flash By Night with a ____ license.</p>
              
       	  </div><!--End column-->
          
          <div class="col-md-3">
          		<a href="picture-quiz.php"><h3>Picture Quiz</h3></a>
              	<p>This is a picture quiz and users read the question and then click or touch the picture they select. Users receive feedback as they answer each question and a final score at the end of the quiz. It is based on the tutorial by Flash By Night with a ____ license.</p>
       	  </div><!--End column-->

          <div class="col-md-3">
          		<a href="puzzle.php"><h3>Puzzle</h3></a>
                <p>Similar to a jigsaw puzzle, the javascript code scrambles the image. Users touch two squares to trade their places. This quiz is based on the tutorial by ______ and had a _____license.</p>
       	  </div><!--End column-->

          <div class="col-md-3">
          		<a href="word-find.php"><h3>Word Find</h3></a>
                <p>This word find game is based on the tutorial by ________ and is covered by the ____license. It has a lot of bells and whistles. As users find a word, there is an animation to cross it off the list of words. </p>
       	  </div><!--End column-->
      </div><!--End row-->
		<hr class="hr-style">                 

 	 <div class="row">
    	  <h2> Two Ways to Use Bootstrap for Photos</h2>
       
          <div class="col-md-6">
          		<a href="gallery-modal.php"><h3>Photo Gallery with Modal Slide Show</h3></a>
              	<p></p>
       	  </div><!--End column-->
          
          <div class="col-md-6">
          		<a href="gallery-slider.php"><h3>Slide Show</h3></a>
              
       	  </div><!--End column-->
      </div><!--End row-->
      <hr class="hr-style">                 

       <div class="row">
    	  <h2> Other Features</h2>
       
          <div class="col-md-12">
          		<a href="contact.php"><h3>Contact Form</h3></a>
              	<p>The contact form uses PHP to send an email to a designated email address with the information on the form. It is heavily commented so that a user without knowledge of PHP will be able to modify it for their use. No mySql is used for this form.</p>
       	  </div><!--End column-->
          
          
         			</div><!--End row-->
   
			</div><!--End Container-->    

		</div><!--End Content-->	
	
    </div><!--End Wrapper-->
	
	<?php require_once "footer.php"; ?>
    <?php require_once "js-files.php"; ?>


</body>
</html>