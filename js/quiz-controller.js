<!--Most of this code was written by Flash by Night. See the Flash by Night tutorial for explanation of this code. -->

$(document).ready(function () {
	
  	var questionNumber=0;
  	var questionBank=new Array();
  	var stage="#game1";
  	var stage2=new Object;
  	var questionLock=false;
  	var numberOfQuestions;
  	var score=0;
  	var quizjson="quiz.json";
		 
	<!--This optional block of code allows you to have more than one quiz in your website. If you have more than three quizzes, add more "else if" statements. The "quizjson" variable sets the name of the json file where you keep your quiz content. -->
	
	/*
	
	if(quiz == "numbers"){
		quizjson = 'quiz-numbers.json';
	}else if (quiz == "math"){
		 quizjson = 'quiz-math.json';
	}else{
		quizjson = 'quiz.json';
	}
	 
	*/ 
	 
	$.getJSON(quizjson, function(data) {

		for(i=0;i<data.quizlist.length;i++){ 
			  questionBank[i]=new Array;
			  questionBank[i][0]=data.quizlist[i].question;
			  questionBank[i][1]=data.quizlist[i].option1;
			  questionBank[i][2]=data.quizlist[i].option2;
			  questionBank[i][3]=data.quizlist[i].option3;
			  questionBank[i][4]=data.quizlist[i].option4;

		}
	 	numberOfQuestions=questionBank.length; 
		displayQuestion();
	})//gtjson


	  function displayQuestion(){
		  var rnd=Math.random()*4;
		  rnd=Math.ceil(rnd);
		  var q1;
		  var q2;
		  var q3;
		  var q4;
	  
	  
		  if(rnd==1){q1=questionBank[questionNumber][1];q2=questionBank[questionNumber][2];q3=questionBank[questionNumber][3];q4=questionBank[questionNumber][4];}
		  if(rnd==2){q2=questionBank[questionNumber][1];q3=questionBank[questionNumber][2];q1=questionBank[questionNumber][3];q4=questionBank[questionNumber][4];}
		  if(rnd==3){q3=questionBank[questionNumber][1];q1=questionBank[questionNumber][2];q4=questionBank[questionNumber][3];q2=questionBank[questionNumber][4];}
		  if(rnd==4){q4=questionBank[questionNumber][1];q1=questionBank[questionNumber][2];q2=questionBank[questionNumber][3];q3=questionBank[questionNumber][4];}
	  
	  
		  $(stage).append('<div class="questionText">'+questionBank[questionNumber][0]+'</div><div id="1" class="option">'+q1+'</div><div id="2" class="option">'+q2+'</div><div id="3" class="option">'+q3+'</div><div id="4" class="option">'+q4+'</div>');
	  
		  $('.option').click(function(){
			  if(questionLock==false){questionLock=true;	
				  //correct answer
				  if(this.id==rnd){
					  $(stage).append('<div class="feedback1">CORRECT</div>');
					  score++;
				  }	
				  //wrong answer	
				  if(this.id!=rnd){
					  $(stage).append('<div class="feedback2">WRONG</div>');
				  }
			  setTimeout(function(){changeQuestion()},1000);
			  console.log(score);
		  }})
	  }//display question
	  
	  function changeQuestion(){
		  
		  questionNumber++;
	  
		  if(stage=="#game1"){stage2="#game1";stage="#game2";}
		  else{stage2="#game2";stage="#game1";}
	  
		  if(questionNumber<numberOfQuestions){displayQuestion();}else{displayFinalSlide();}
	  
		  $(stage2).animate({"right": "+=800px"},"slow", function() {$(stage2).css('right','-800px');$(stage2).empty();});
		  $(stage).animate({"right": "+=800px"},"slow", function() {questionLock=false;});
	  }//change question
		  
	  function displayFinalSlide(){
			  
		  <!--This is where you set the message that the user receives upon quiz completion. based on their quiz score. The current socre numbers assume that there are 10 questions per quiz.-->
		  
		  if (score < 2){
		  scoremsg = "Study and try the test again.";
		  
		  }else if (score < 3){
					  scoremsg = "Not bad, but you can do better!";
	  
		  }else{
			  scoremsg = "You are a pro! Great work!";
	  
			  }
		  
		  $(stage).append('<div class="questionText">You have finished the quiz!<br><br><h4>You had '+score+' answers correct out of '+numberOfQuestions+' . <br>'+scoremsg+'<br></h4><br><br><a href="javascript:history.go(0)"><b>Try Again!</b></a></div>');
		  
	  }//display final slide
	  
		  
	
	
});//doc ready