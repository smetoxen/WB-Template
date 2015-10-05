<!--This is the Bootstrap slide show. The display of images per row varies based on the device. The default setting is 4 per row for desktops, 3 per row for laptops, 2 per row for tablets, and 1 per row for smartphones. If the user clicks on an image it is shown in a modal view. -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php"; ?>
</head>

<body>
<div class = "wrapper">
  <?php require_once "nav.php" ?>
  <div class="content">
    <div class="container-fluid">
      <h1>Bootstrap Modal Slide Show</h1>
      <p>This slideshow uses Bootstrap to vary the number of images per row. When the user clicks on an image, it is displayed in modal mode. For desktop width, there are 4 images per row; laptop, 3 images per row; tablet, 2 images per row; smartphone, 1 image per row. </p>
      
      <!--The nobullets class removes the bullets from the li items.-->
      <ul class="row nobullets">
        <!--col-lg-3 sets the number of images at per row for large screens, e.g. desktops. 
                    col-md-4, 3 per row, for medium screens, e.g. laptops
                    col-sm-6, 2 per row, for small devices, e.g. tablets
                    col-xs-12, 1 per row, for extra small devices, e.g. smartphones -->
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo1.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo2.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo3.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo4.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo5.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo6.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo7.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo8.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo9.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo10.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo11.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 "><img src="images/photo12.jpg" width="100%" height="auto" class="img-responsive boxstyle" /></li>
      </ul>
      
      <!--This is the modal view TODO missing the classes for modal and fade-->
      
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body"> </div>
          </div>
          <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
      </div>
      <!-- /.modal --> 
      
    </div>
    <!-- /container --> 
    
  </div>
  <!--End Content--> 
  
</div>
<!--End wrapper-->

<?php 
	  	require_once "footer.php";
	  ?>
<script>
        $(document).ready(function(){        
            $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                
                //start of new code new code
                var index = $(this).parent('li').index();   
                
                var html = '';
                html += img;                
                html += '<div style="height:25px;clear:both;display:block;">';
                html += '<a class="controls next" href="'+ (index+2) + '">NEXT &raquo;&nbsp;&nbsp;</a>';
                html += '<a class="controls previous" href="' + (index) + '">&laquo; PREVIOUS</a>';
                html += '</div>';
                
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(html);
                    //new code
                    $('a.controls').trigger('click');
                })
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
                
                
           });
        
        })
        
        //page controls prev and next
        $(document).on('click', 'a.controls', function(){
            var index = $(this).attr('href');
            var src = $('ul.row li:nth-child('+ index +') img').attr('src');             
            
            $('.modal-body img').attr('src', src);
            
            var newPrevIndex = parseInt(index) - 1; 
            var newNextIndex = parseInt(newPrevIndex) + 2; 
            
            if($(this).hasClass('previous')){               
                $(this).attr('href', newPrevIndex); 
                $('a.next').attr('href', newNextIndex);
            }else{
                $(this).attr('href', newNextIndex); 
                $('a.previous').attr('href', newPrevIndex);
            }
            
            var total = $('ul.row li').length + 1; 
            //hide next button
            if(total === newNextIndex){
                $('a.next').hide();
            }else{
                $('a.next').show()
            }            
            //hide previous button
            if(newPrevIndex === 0){
                $('a.previous').hide();
            }else{
                $('a.previous').show()
            }
            
            
            return false;
        });
        
         
        
    </script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63852804-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>