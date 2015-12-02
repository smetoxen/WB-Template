<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once "header.php"; ?> <!--the head content is in this file-->
	</head>
	<body>
		<div class = "wrapper"><!--This wraps around the entire webpage and can be used for settings you want to apply to the entire page -->
			<?php require_once "nav.php" ?><!--This is the navigation bar and header image-->
			<div class="content"> <!-- This is the main content and includes everything except the navigation, header image and footer.-->
				<div class="container-fluid"><!-- This class wraps your Bootstrap content -->
					<div class="row maxwidth"> <-- "row starts a new row in Bootstrap. "maxwidth" sets max width for the content. -->
						<div class="col-md-12"><!-- This is Bootstrap column 12/12th's wide -->
							<h1>About the Template</h1>
							<p >My name is Susan Metoxen and I am the owner of White Buffalo. White Buffalo creates responsive websites and iOS and Android apps. I created this template because I needed to add PHP features to the Twitter Bootstrap template. Along the way I have gathered a nice set of features that will be useful or fun for your website, like a PHP-based Contact form and some Javascript games. </p>
							<p>This website uses HTML, CSS, PHP and Javascript. It relies heavily on Twitter Bootstrap for formatting and layout. This template is heavily documented so that users with a minimal knowledge of HTML/CSS will be able to use this template as a starting point. Even so, it would be helpful to review the <a href="#" target="_blank">W3 Schools Twitter Bootstrap</a> tutorial.</p>
							<p> With a few noted exceptions, this template uses responsive website techniques and Bootstrap rather than redirecting mobile device to a different web page. This makes it easier to maintain your website because you do not have dual maintenance for your mobile and desktop pages. </p>
							<p>To change the CSS for this website use the CSS/style.css file. Because this css file is last one referenced in the header, the browsers give it a higher priority. </p>
							<p>PHP is primarily used in this website to avoid duplication of code, using the "require_once" function.
							<p>There are several Javascript games in this template. The games are built on tutorials available on the world wide web. You will notice that the template gives a reference to the source of game tutorial. Please include these references in your website. Your reference to the author of the tutorial helps his or her SEO and gives them appropriate credit for their contribution to open source code.</p>
							<p>The games include:</p>
							<ul>
								<li>Multiple Choice Quiz</li>
								<li>Picture Quiz</li>
								<li>Puzzle: The mobile puzzle redirects to a separate webpage for small screens. </li>
								<li>Word Find:The mobile puzzle redirects to a separate webpage for small screens. </li>
							</ul>
						</div>
					</div>
					<!--End row-->
				</div>
				<!--End Container-->    
			</div>
			<!--End Content-->	
		</div>
		<!--End Wrapper-->
		<?php require_once "footer.php"; ?><!-- This is the website footer.--> 
		<?php require_once "js-files.php"; ?><!--This is the file that holds the Javascript scripts that are inserted at the end of the body. -->
	</body>
</html>