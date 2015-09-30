<!--There are three versions of this puzzle. This is the default version in the template.
		puzzle.php uses an image that is 640 x 480 pixels and has 48 pieces
    	puzzle_easy.php uses an image that is 640 x 480 and has 12 pieces.
    	puzzle_mobile.php is the version of the puzzle for smartphones. 
This puzzle is based on the tutorial by TODO
-->

<!DOCTYPE HTML>

<html>

<head>
	
	<?php require_once "header.php"  ?>

	<!--This javascript code redirects users with a smartphone (screen width of less than 600 pixels) 
    to a mobile version of the puzzle. -->
	<script type="text/javascript">

		if (screen.width <= 660) {
			document.location = "http://isthisanagate.com/puzzle_mobile.php";
		}

	</script>

	<!--This is the Javascript for the puzzle. -->
	<script type="text/javascript">
	
		window.onload = onReady;
		
		var can;
		var ctx;		
		var img;
		
		var blockSize = 80;
		
		var clickX;
		var clickY;
		
		var selected1;
		var selected2;
		
		var piecesArray = new Array();
		var correctOrder = new Array();
				
		function onReady()
		{
			can = document.getElementById('myCanvas');
			
			if(navigator.userAgent.toLowerCase().indexOf('firefox') >= 0 || !can.getContext)
			{
				can.style.display = 'none';
				document.getElementById('sorry').style.display = 'inline';
				document.getElementById('support').innerHTML = "Your browser is not supported.  Please use one of the browsers above.";
			}
			/**/
			ctx = can.getContext('2d');
			img = new Image();
			img.onload = onImage1Load;
			  img.src = "images/puzzle.jpg";<!--This is the image in the puzzle. The image must be 640 x 480 pixels. -->			
		}
		
		function onImage1Load()
		{
			var r;
			for(var i = 0; i < 8; i++)
			{
				for(var j = 0; j < 6; j++)
				{
					r = new Rectangle(i * blockSize, j * blockSize, i*blockSize + blockSize, j * blockSize + blockSize);
					piecesArray.push(r);
					correctOrder.push(r);
				}				
			}
			
			scrambleArray(piecesArray, 120);
			drawImage();
		}
	
		function onCanvasClick(evt)
		{
			
			clickX = evt.offsetX;
			clickY = evt.offsetY;
			
			var drawX = Math.floor(clickX / blockSize);
			var drawY = Math.floor(clickY / blockSize);
			
			var index = drawX * 6 + drawY;
			
			var targetRect = piecesArray[index];
			var drawHighlight = true;
			
			drawX *= blockSize;
			drawY *= blockSize;
			
			ctx.clearRect(0, 0, 640, 480);
			
			if(selected1 != undefined && selected2 != undefined)
			{
				selected1 = selected2 = undefined;
			}
			
			if(selected1 == undefined)
			{
				selected1 = targetRect;
			}
			else
			{
				selected2 = targetRect;
				swapRects(selected1, selected2);
				drawHighlight = false;
			}
			
			drawImage();
			
			if(drawHighlight)	
				highlightRect(drawX, drawY);
		}
		
		function highlightRect(drawX, drawY)
		{
			console.log(drawX, drawY);
			ctx.beginPath();
			ctx.moveTo(drawX, drawY);
			ctx.lineTo(drawX + blockSize, drawY);
			ctx.lineTo(drawX + blockSize, drawY + blockSize);
			ctx.lineTo(drawX, drawY + blockSize);
			ctx.lineTo(drawX, drawY);
			ctx.lineWidth = 2;

			// set line color
			ctx.strokeStyle = "#ff0000";
			ctx.stroke();
		}
		
		function swapRects(r1, r2)
		{
			var index1;
			var index2;
			var temp = r1;
			
			index1 = piecesArray.indexOf(r1);
			index2 = piecesArray.indexOf(r2);
			
			piecesArray[index1] = r2;
			piecesArray[index2] = temp;			
			
			checkWinner();
		}
		
		
		
		function drawImage()
		{
			for(var k = 0; k < 8; k++)
			{
				for(var l = 0; l < 6; l++)
				{
					r = piecesArray[k*6+l];					
					ctx.drawImage(img, r.left, r.top, r.width, r.height, k*blockSize, l*blockSize, blockSize, blockSize);
				}
			}
		}
		
		function scrambleArray(ar, times)
		{
			var count = 0;
			var temp;
			var index1;
			var index2;
			while(count < times)
			{
				index1 = Math.floor(Math.random()*piecesArray.length);
				index2 = Math.floor(Math.random()*piecesArray.length);
				
				temp = piecesArray[index1];
				piecesArray[index1] = piecesArray[index2];
				piecesArray[index2] = temp;
				
				count++;
			}
		}
		
		function Rectangle(left, top, right, bottom)
		{
			this.left = left;
			this.top  = top;
			this.right = right;
			this.bottom = bottom;
			
			this.width = right - left;
			this.height = bottom - top;
		}
		
		function isCanvasSupported()
		{
		  var elem = document.createElement('canvas');
		  return (elem.getContext && elem.getContext('2d'));
		}
		
		function checkWinner()
		{
    		var match = true;
			
    		for(var i = 0; i < piecesArray.length; i++)
   			 {
        		if(piecesArray[i] != correctOrder[i])
        		{
            		match = false;
        		}
   			 }
			
    		if(match)
    		{
       			 console.log('puzzle complete!');
				$("#complete-message h3").text('Congratulations! Puzzle Completed.');
				 document.getElementById("puzzle-background").id = "alt-background";


    			}
    		else
    		{
        		console.log('not complete');
    	}
	}

	</script>
	
</head>

<body>

	<div class="wrapper">

		<?php require_once "nav.php" ?>

		<div class="content">

			<div class="container-fluid">

				<h1><b>Puzzle</b></h1>

				<h2 style="margin-bottom:20px;text-align:center"><i><b>Buffalo calves</b></i></h2>

				<p> Click two puzzle pieces to trade their places. Repeat until the puzzle is complete. For the best experience use the latest version of <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a>, <a href="http://www.opera.com/">Opera</a> or <a href="http://www.apple.com/safari/download/">Safari</a>.</p> 
                
                <p><a href="puzzle_easy.php">Easier Version</a></p>
           
                  
             		<div id="complete-message"><h3 style="height:10px;color:red;text-align:center;font-weight:bold"> </h3></div>

                    
	<div class="row">
		<div class="col-lg-8">
                
			<p id="support" style="color:#bb0000;"></p>
            
             <div id="puzzle-background">				
				
                <canvas id="myCanvas" width="640" height="480" onclick="onCanvasClick(event);"></canvas>	
            
            </div>
            
        </div><!--End Col-->
        
        <div class="col-lg-4"> 
        
        	<img src="images/puzzle_mobile.jpg" class="img-responsive image_shadow" height="240px" width="320px"   />
        
        </div>
        
     </div><!--End row-->
     
    
  
  
   
</div><!--End Container-->    

</div><!--End Content-->	
	
	<?php require_once "footer.php"; ?>
    <?php require_once "js-files.php"; ?>

</div><!--End Wrapper-->



</body>

</html>