<!--This is the Contact Us form. When the form is submitted, the form action triggers the contactAction.php script. -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?><!--This is the head content -->
</head>

<body>
<div class = "wrapper">
  <?php require_once "nav.php" ?>
  <main class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 formstyle"> <!--"col-md-8" sets up a column that is 8/12's of the screen width. "formstyle" adds some css to the form -->
          <h3>Contact Us</h3>
          <div>
            <form role="form" method = "post" action="contactAction.php"><!-- "contactAction.php" is the form action and holds the scripts that run when the form is submitted.-->
              <div class="form-group"> <!--"form-group" adds Bootstrap styling. -->
                <label for = "describe">Description:</label>
                <textarea class="form-control"  id = "describe" name = "describe" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for= "name">Name: </label>
                <input type = "text" class="form-control" id = "name" name = "name" />
              </div>
              <div class="form-group">
                <label for= "email">Email (optional): </label>
                <input type = "email"  class="form-control" id = "email" name = "email" />
              </div>
              <div class="form-group">
                <label for = "phone">Phone (optional): </label>
                <input type = "text" class="form-control"  id = "phone" name = "phone" />
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" value = "Submit" name ="submit" />
              </div>
            </form>
          </div>
          <!--end contactform--> 
          
        </div>
        <!--End Cell -->
        
        <div class="col-md-4">
          <h4> <em>&#8220;A person who never made a mistake never tried anything new.&#8221;</em> <br />
            Albert Einstein</h4>
          <h4><em>&#8220;You are never too old to set another goal or to dream a new dream.&#8221;</em> <br />
            C. S. Lewis</h4>
        </div>
      </div>
      <!--End row--> 
      
    </div>
    <!--End Container--> 
    
  </main>
  <!--End Content--> 
  
</div>
<!--End Wrapper-->

<?php require_once "footer.php"; ?>
<?php require_once "js-files.php"; ?>
</body>
</html>