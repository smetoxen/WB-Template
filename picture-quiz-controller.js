$(document).ready(function () {
	
var questionNumber=0;
var questionBank=new Array();
var stage="#game1";
var stage2=new Object;
var questionLock=false;
var numberOfQuestions;
var score=0;
		 

		 
		 
		 

 
 		$.getJSON('quizEd.json', function(data) {

		for(i=0;i<data.quizlist.length;i++){ 
			questionBank[i]=new Array;
			questionBank[i][0]=data.quizlist[i].question;
			questionBank[i][1]=data.quizlist[i].option1;
			questionBank[i][2]=data.quizlist[i].option2;
			questionBank[i][3]=data.quizlist[i].option3;
		}
		 numberOfQuestions=questionBank.length; 
		
		  
		displayQuestion();
		})//gtjson
 

/*fillDB();*/



function displayQuestion(){
 var rnd=Math.random()*3;
rnd=Math.ceil(rnd);
 var q1;
 var q2;
 var q3;

if(rnd==1){q1=questionBank[questionNumber][1];q2=questionBank[questionNumber][2];q3=questionBank[questionNumber][3];}
if(rnd==2){q2=questionBank[questionNumber][1];q3=questionBank[questionNumber][2];q1=questionBank[questionNumber][3];}
if(rnd==3){q3=questionBank[questionNumber][1];q1=questionBank[questionNumber][2];q2=questionBank[questionNumber][3];}

/* $(stage).append('<div  class="questionText"><div class="row"> '+questionBank[questionNumber][0]+'</div><br/><div id="1" class="pix col-sm-4"><img src="images/'+q1+'"><br /></div><div id="2" class="pix col-sm-4"><img src="images/'+q2+'"></div><div id="3" class="pix col-sm-4"><img src="images/'+q3+'"></div></div>');*/
 
 
 
  $(stage).append('<div  class="questionText"> '+questionBank[questionNumber][0]+'</div><br/><table style="margin-right:10px;margin-left:10px"><tr><td style="margin-right:auto;margin-left:auto"><div id="1" class="pix "><img src="images/'+q1+'"></div></td><td style="margin-right:auto;margin-left:auto"><div id="2" class="pix "><img src="images/'+q2+'"></div></td><td style="margin-right:auto;margin-left:auto"><div id="3" class="pix "><img src="images/'+q3+'"></div></td></tr></table>');
 

 $('.pix').click(function(){
  if(questionLock==false){questionLock=true;	
  //correct answer
  if(this.id==rnd){
   $(stage).append('<div class="feedback1">CORRECT</div>');
   score++;
   }
  //wrong answer	
  if(this.id!=rnd){
   $(stage).append('<div class="feedback2">INCORRECT</div>');
  }
  setTimeout(function(){changeQuestion()},1000);
 }})
}//display question

	
	
	
	
	
	function changeQuestion(){
		
		questionNumber++;
	
	if(stage=="#game1"){stage2="#game1";stage="#game2";}
		else{stage2="#game2";stage="#game1";}
	
	if(questionNumber<numberOfQuestions){displayQuestion();}else{displayFinalSlide();}
	
	 $(stage2).animate({"right": "+=1200px"},"slow", function() {$(stage2).css('right','-1200px');$(stage2).empty();});
	 $(stage).animate({"right": "+=1200px"},"slow", function() {questionLock=false;});
	}//change question
	

	
	
	function displayFinalSlide(){
		
		
		
		
		$(stage).append('<div class="questionText">Thank you for taking the Da Vista Agate Quiz!  The images and quiz questions were provided by <a href="https://www.facebook.com/DaVistaAgates">Da Vista Agates</a>. <br><br>Total questions: '+numberOfQuestions+'<br>Correct answers: '+score+'<br><br><p style="font-size:1em">1-5 correct - Study and try again.<br>6-10 correct - Not bad, but you can do better!<br>11-12 correct - Agate Professional.</p><br><a href="quizEdEnd.php" ><button type="button" class="btnQuiz">Exit Quiz</button></a></div>');
		
	}//display final slide
	
	
	
	
	
	
	
	});//doc ready