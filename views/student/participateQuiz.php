<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">    
<title>Participate Quiz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/participateQuiz">

</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
  <ul>
    <li><a href="<?php echo URL; ?>studentHome"><i class="fas fa-home"></i>Dashboard</a></li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-download"></i>Download Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>downloadMaterials" id="cl1" onclick="getMaterials('cl1')"><?php echo date("Y"); ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl2" onclick="getMaterials('cl2')"><?php echo date("Y")+1; ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl3" onclick="getMaterials('cl3')"><?php echo date("Y")+2; ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl4" onclick="getMaterials('cl4')">Revision</a>
        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y"); ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y")+1; ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y")+2; ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz">Revision</a>
        </div>
    </li>
  </ul> 
  
  </div>


  <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Participate Quiz</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Student ;-)</div>
  </div>

  



   <div class="middle" style="background-color:#F8F8FF;">
  <form id="regForm" method="post" action="<?php echo URL; ?>createQuiz/create">
    <h1>"Quiz Name"</h1>
    <div class="topSection">Quiz Title:
    <br />
    <br />
    <p class="head" style="width: 60%;">Encapsulation</p><br />
    Time Limit:
  <br />
  <br />
    <p class="head" style="width: 20%;">30 minutes</p><br />
    </div>
    <p id="demo"></p>


   <div class="quizContainer container-fluid well well-lg">
        <div id="quiz1" class="text-center">
           
            
            <h4 style="color:#FF0000;position:absolute;left:80%;top:40%;" align="center" ><span id="iTimeShow">Time Remaining: </span><br/><span id='timer' style="font-size:25px;"></span></h4>
            
        </div>
        
        <div class="question"></div>
            <ol class="choiceList"></ol>
        <div class="quizMessage"></div>
        <div class="result"></div>
        <button class="preButton" style="margin-top: 50px; margin-left: 60%;">Previous Question</button>
        <button class="nextButton">Next Question</button>
    </div>
    
  </form>
  </div>
  
  

    


    <script>
        var questions = [{
    question: "1. How do you write 'Hello World' in an alert box?",
    choices: ["msg('Hello World')", "msgBox('Hello World');", "alertBox('Hello World');", "alert('Hello World');"],
    correctAnswer: 3
}, {
    question: "2. How to empty an array in JavaScript?",
    choices: ["arrayList[]", "arrayList(0)", "arrayList.length=0", "arrayList.len(0)"],
    correctAnswer: 2
}, {
    question: "3. What function to add an element at the begining of an array and one at the end?",
    choices: ["push,unshift", "unshift,push", "first,push", "unshift,last"],
    correctAnswer: 1
}, {
    question: "4. What will this output? var a = [1, 2, 3]; console.log(a[6]);",
    choices: ["undefined", "0", "prints nothing", "Syntax error"],
    correctAnswer: 0
}, {
    question: "5. What would following code return? console.log(typeof typeof 1);",
    choices: ["string", "number", "Syntax error", "undefined"],
    correctAnswer: 0
},{
    question: "6. Which software company developed JavaScript?",
    choices: ["Mozilla", "Netscape", "Sun Microsystems", "Oracle"],
    correctAnswer: 1
},{
    question: "7. What would be the result of 3+2+'7'?",
    choices: ["327", "12", "14", "57"],
    correctAnswer: 3
},{
    question: "8. Look at the following selector: $('div'). What does it select?",
    choices: ["The first div element", "The last div element", "All div elements", "Current div element"],
    correctAnswer: 2
},{
    question: "9. How can a value be appended to an array?",
    choices: ["arr(length).value;", "arr[arr.length]=value;", "arr[]=add(value);", "None of these"],
    correctAnswer: 1
},{
    question: "10. What will the code below output to the console? console.log(1 +  +'2' + '2');",
    choices: ["'32'", "'122'", "'13'", "'14'"],
    correctAnswer: 0
}];


var currentQuestion = 0;
var viewingAns = 0;
var correctAnswers = 0;
var quizOver = false;
var iSelectedAnswer = [];
    var c=180;
    var t;
$(document).ready(function () 
{
    // Display the first question
    displayCurrentQuestion();
    $(this).find(".quizMessage").hide();
    $(this).find(".preButton").attr('disabled', 'disabled');
    
    timedCount();
    
    $(this).find(".preButton").on("click", function () 
    {       
        
        if (!quizOver) 
        {
            if(currentQuestion == 0) { return false; }
    
            if(currentQuestion == 1) {
              $(".preButton").attr('disabled', 'disabled');
            }
            
                currentQuestion--; // Since we have already displayed the first question on DOM ready
                if (currentQuestion < questions.length) 
                {
                    displayCurrentQuestion();
                    
                }                   
        } else {
            if(viewingAns == 3) { return false; }
            currentQuestion = 0; viewingAns = 3;
            viewResults();      
        }
    });

    
    // On clicking next, display the next question
    $(this).find(".nextButton").on("click", function () 
    {
        if (!quizOver) 
        {
            
            var val = $("input[type='radio']:checked").val();

            if (val == undefined) 
            {
                $(document).find(".quizMessage").text("Please select an answer");
                $(document).find(".quizMessage").show();
            } 
            else 
            {
                // TODO: Remove any message -> not sure if this is efficient to call this each time....
                $(document).find(".quizMessage").hide();
                if (val == questions[currentQuestion].correctAnswer) 
                {
                    correctAnswers++;
                }
                iSelectedAnswer[currentQuestion] = val;
                
                currentQuestion++; // Since we have already displayed the first question on DOM ready
                if(currentQuestion >= 1) {
                      $('.preButton').prop("disabled", false);
                }
                if (currentQuestion < questions.length) 
                {
                    displayCurrentQuestion();
                    
                } 
                else 
                {
                    displayScore();
                    $('#iTimeShow').html('Quiz Time Completed!');
                    $('#timer').html("You scored: " + correctAnswers + " out of: " + questions.length);
                    c=185;
                    $(document).find(".preButton").text("View Answer");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                    return false;
                    
                }
            }
                    
        }   
        else 
        { // quiz is over and clicked the next button (which now displays 'Play Again?'
            quizOver = false; $('#iTimeShow').html('Time Remaining:'); iSelectedAnswer = [];
            $(document).find(".nextButton").text("Next Question");
            $(document).find(".preButton").text("Previous Question");
             $(".preButton").attr('disabled', 'disabled');
            resetQuiz();
            viewingAns = 1;
            displayCurrentQuestion();
            hideScore();
        }
    });
});



function timedCount()
    {
        if(c == 185) 
        { 
            return false; 
        }
        
        var hours = parseInt( c / 3600 ) % 24;
        var minutes = parseInt( c / 60 ) % 60;
        var seconds = c % 60;
        var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);            
        $('#timer').html(result);
        
        if(c == 0 )
        {
                    displayScore();
                    $('#iTimeShow').html('Quiz Time Completed!');
                    $('#timer').html("You scored: " + correctAnswers + " out of: " + questions.length);
                    c=185;
                    $(document).find(".preButton").text("View Answer");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                    return false;
                    
        }
        
        /*if(c == 0 )
        {   
            if (!quizOver) 
            {
                var val = $("input[type='radio']:checked").val();
                if (val == questions[currentQuestion].correctAnswer) 
                {
                    correctAnswers++;
                }
                currentQuestion++; // Since we have already displayed the first question on DOM ready
                
                if (currentQuestion < questions.length) 
                {
                    displayCurrentQuestion();
                    c=15;
                } 
                else 
                {
                    displayScore();
                    $('#timer').html('');
                    c=16;
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                    return false;
                }
            }
            else 
            { // quiz is over and clicked the next button (which now displays 'Play Again?'
                quizOver = false;
                $(document).find(".nextButton").text("Next Question");
                resetQuiz();
                displayCurrentQuestion();
                hideScore();
            }       
        }   */
        c = c - 1;
        t = setTimeout(function()
        {
            timedCount()
        },1000);
    }
    
    
// This displays the current question AND the choices
function displayCurrentQuestion() 
{

    if(c == 185) { c = 180; timedCount(); }
    //console.log("In display current Question");
    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;
    // Set the questionClass text to the current question
    $(questionClass).text(question);
    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();
    var choice;
    
    
    for (i = 0; i < numChoices; i++) 
    {
        choice = questions[currentQuestion].choices[i];
        
        if(iSelectedAnswer[currentQuestion] == i) {
            $('<li><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
        } else {
            $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
        }
    }
}

function resetQuiz()
{
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore()
{
    $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
    $(document).find(".quizContainer > .result").show();
}

function hideScore() 
{
    $(document).find(".result").hide();
}

// This displays the current question AND the choices
function viewResults() 
{

    if(currentQuestion == 10) { currentQuestion = 0;return false; }
    if(viewingAns == 1) { return false; }

    hideScore();
    var question = questions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQuestion].choices.length;
    // Set the questionClass text to the current question
    $(questionClass).text(question);
    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();
    var choice;
    
    
    for (i = 0; i < numChoices; i++) 
    {
        choice = questions[currentQuestion].choices[i];
        
        if(iSelectedAnswer[currentQuestion] == i) {
            if(questions[currentQuestion].correctAnswer == i) {
                $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
            } else {
                $('<li style="border:2px solid red;margin-top:10px;"><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
            }
        } else {
            if(questions[currentQuestion].correctAnswer == i) {
                $('<li style="border:2px solid green;margin-top:10px;"><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
            } else {
                $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' +  ' ' + choice  + '</li>').appendTo(choiceList);
            }
        }
    }
    
    currentQuestion++;
    
    setTimeout(function()
        {
            viewResults();
        },3000);
}

    </script>    
</body>
  </html>