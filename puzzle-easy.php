<!DOCTYPE HTML>

<html>
<title>Lake Superior Agates Puzzle of the Week</title>
<head>
<?php require_once "header.php"  ?>
<?php 

if (isset($_GET['id'])){
	$id = $_GET['id'];
	}


//Connect to the database
 require_once "connectvars.php";
      
  
//Obtain the variables 
$query = "SELECT * FROM table_puzzles WHERE id = '$id'";


//echo $query;
//exit();
$data = mysqli_query($dbc, $query);
  
  
  
  //Loop through the table data
	while ($row = mysqli_fetch_array($data)){
	
		$puzzle_name = $row['puzzle_name'];
		$photographer = $row['photographer'];
		$description = $row['description'];
		$image_name = $row['image_name'];
		$submitter = $row['submitter'];
		$email = $row['email'];
	
}




  mysqli_close($dbc);
      
?>
<script type="text/javascript">

if (screen.width <= 660) {
document.location = "http://isthisanagate.com/puzzle_mobile.php";
}

</script>
<script type="text/javascript">
	
		window.onload = onReady;
		
		var can;
		var ctx;		
		var img;
		
		var blockSize = 160;
		
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
			img.src = "images/<?php echo $image_name ?>";			
		}
		
		function onImage1Load()
		{
			var r;
			for(var i = 0; i < 4; i++)
			{
				for(var j = 0; j < 3; j++)
				{
					r = new Rectangle(i * blockSize, j * blockSize, i*blockSize + blockSize, j * blockSize + blockSize);
					piecesArray.push(r);
					correctOrder.push(r);
				}				
			}
			
			scrambleArray(piecesArray, 30);
			drawImage();
		}
	
		function onCanvasClick(evt)
		{
			
			clickX = evt.offsetX;
			clickY = evt.offsetY;
			
			var drawX = Math.floor(clickX / blockSize);
			var drawY = Math.floor(clickY / blockSize);
			
			var index = drawX * 3 + drawY;
			
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
				console.log('complete');
				document.write('<h1 style="vertical-align:text-top">Congratulations! Puzzle Completed</h1>');

			}
			else
			{
				console.log('not complete');
			}
		}
		
		function drawImage()
		{
			for(var k = 0; k < 4; k++)
			{
				for(var l = 0; l < 3; l++)
				{
					r = piecesArray[k*3+l];					
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

    }
    else
    {
        console.log('not complete');
    }
}

	</script>
<head>


<body>
<div class="wrapper">
	<?php require_once "nav.php" ?>
	<div class="content">
		<div class="content">
			<div class="container-fluid" style="max-width:1200px;margin-left:auto;margin-right:auto">
				<h2 style="margin-bottom:20px;text-align:center"><i><b><?php echo $puzzle_name?></b></i>: Photo by <?php echo $photographer?></h2>
				<h3><?php echo $description?></h3>
				<p style="text-align:center;margin-bottom:0px"> Click two puzzle pieces to trade their places. Repeat until the puzzle is complete. For the best experience use the latest version of <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a>, <a href="http://www.opera.com/">Opera</a> or <a href="http://www.apple.com/safari/download/">Safari</a>. <br/>
					<a href="puzzle.php?id=<?php echo $id ?>">Harder Version</a> | <a href="mailto:?subject=Check out this fun puzzle&amp;body=Check out this fun puzzle! http://www.IsThisAnAgate.com/puzzle.php?id=<?php echo $id ?>" title="Share by Email">Share with a Friend</a> </p>
				<div id="complete-message">
					<h3 style="height:10px;color:red;text-align:center;font-weight:bold"> </h3>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div style="margin:0 auto; width:640px; text-align:center;">
							<p id="support" style="color:#bb0000;"></p>
						</div>
						<div style="margin-left:auto; margin-right:auto; max-width:648px; width:100%;height:488px; border: 4px outset #ce392f;"> <img id="sorry" class="img-responsive" src="images/sorry.jpg" style="display:none;"/>
							<canvas id="myCanvas" width="640" height="480" onclick="onCanvasClick(event);"> </canvas>
						</div>
					</div>
					<!--End Col-->
					
					<div class="col-lg-4"> <img src="images/<?php echo $image_name ?>" class="img-responsive"  style="border: 4px outset #ce392f;margin-left:auto;margin-right:auto;margin-top:50px" /> <br/>
						<br/>
					</div>
				</div>
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