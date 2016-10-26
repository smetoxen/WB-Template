<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>
</head>

<body>
<div class = "wrapper">
  <?php require_once "nav.php" ?>
  <main class="content">
    <h3>Thank you!</h3>
    <?php
				/*These are the variables in form. In PHP, all variables start with a $ sign. 
				They are used below to generate an email notice. The fields come from the field name in the contact.php script. */
				$request = $_POST['describe']; /* In English: Get the field with the name of "describe" and make a variable named, $request. */
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				
				/*This is the message that is generated to the user when the form is submitted. */
				$success = "Thank you for submitting the form! Your message has been sent.<br /> ";
				
				/*Change the email address to your email address. */
				$to = "email@yourcompany.com";
				
				/*This set of variables is what you will receive back in an email to alert you to the message. 
				The message is not stored in a database and is only in the email you or your designee receives. The "/n" starts a new line in the form. In PHP*/
				$subject = "Contact Form Submission";
				$msg = 
					"Message:   $describe\n" . 
					"Name:   $name\n" . 
					"Email:  $email\n" .
					"Phone:  $phone\n";
				
				mail($to, $subject, $msg);
				
				echo $success ;
			?>
    <a href="index.php">Return to home page</a><br>
  </main>
  <!--End Content--> 
  
</div>
<!--End Wrapper-->

<?php require_once "footer.php"; ?>
<?php require_once "js-files.php"; ?>
