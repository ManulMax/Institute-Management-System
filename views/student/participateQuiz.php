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
     <button class="drop-btn">
          <i class="fas fa-list fa-lg"></i>
        </button>
        <div class="drop-container">
                <a href="#">blaa</a>
                <a href="#">blaa</a>
                <a href="#">blaa</a>

        </div>

  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
  <ul>
    
     <li><a href="<?php echo URL; ?>studentHome"><i class="fas fa-home"></i>Dashboard</a></li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-upload"></i>Download Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
             $classes = []; //create array
              while($class=mysqli_fetch_assoc($this->studentSubject)) {
                  $classes[] = $class; //assign whole values to array
              }
             foreach($classes as $row){  ?>
                <a href="<?php echo URL; ?>materials/renderDownloadMaterials/<?php echo $row['name'].'/'.$row['batch']; ?>"><?php echo $row['name'].' '.$row['batch']; ?></a>
          <?php  } ?>

        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>StudentQuizList/index/<?php echo $row['name'].'/'.$row['batch']; ?>"><?php echo $row['name'].' '.$row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Exam Marks
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>examMarks/index/<?php echo $row['name'].'/'.$row['batch']; ?>"><?php echo $row['name'].' '.$row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
  </ul> 
  
  </div>




 <div class="headerClass">
    <h2><i class="fas fa-question"></i>Participate Quiz </h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  
  
   <div class="middle" style="background-color:#F8F8FF;">
    <div style="float:right;margin-top:5%;margin-right:10%;">Time remaining <br /><br /><h2 style="text-align:center;"><span id="time"></span></h2></div>

    <!-- alert content -->
  <div id="alertModal" class="alert-modal">
      <div class="alert-modal-content">
      <span class="close">&times;</span>
      <div class='row' style='background-color:white;text-align: center;'>
        <h3 id="msg"></h3>
        <img id="alertImg" src="" alt="image" style="width:40%;">
       </div>
      </div>
    </div>

    <script type="text/javascript">
          var alert=document.getElementById("alertModal");
          if("<?php echo $_GET['alert1']; ?>" =="success"){    
            document.getElementById("msg").innerHTML="Papermarker Details Updated Successfully!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
            alert.style.display = "block";
          }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="Failed to Update Papermarker Details!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script> 

   <!-- <div style="float:right;margin-top:5%;margin-right:10%;">Time remaining <br /><br /><h2 style="text-align:center;"><span id="time">30:00</span></h2></div>-->
<div style="padding-left: 20%;padding-right: 20%;padding-top: 75px;">
  <h1></h1>
  <div class="quiz-container">
    <div id="quizz"></div>
  </div>
</br>
</br>

  <button id="previous">Previous Question</button>
  <button id="nxt">Next Question</button>
  <button id="sub">Submit Quiz</button>
  <form method="post" action="<?php echo URL; ?>participateQuiz/saveMarks/<?php echo $this->quizzID; ?>">
    <input type="text" id="res" class="res" name="res" style="width:25%;" placeholder="Marks" readonly>
    <input type="submit" name="back" value="Go Back">
    </form>

    <a class="roundBtn" style="float: left;height: 50px;width: 100%;text-align: center;" href="<?php echo URL; ?>StudentQuizList/index/<?php echo $_SESSION['subject'].'/'.$_SESSION['batch']; ?>"><i class="fas fa-chevron-left"></i>Back</a>
  </div>

  </div>
</div>

   
<div class="footer">
        <div id="copyright" class="cpy clear">           
          <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
        </div>
      </div>
  
  
<script type="text/javascript">



// -------------------------------------------------------------------------

// Get the modal
var modal = document.getElementById("myModal");
var alertmodal = document.getElementById("alertModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var alertspan = document.getElementsByClassName("close")[1];


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  if(modal.style.display == "block"){
    modal.style.display = "none";
  } 
}

alertspan.onclick = function() {
  if(alertmodal.style.display == "block"){
    alertmodal.style.display = "none";
  } 
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }else if (event.target == alertmodal) {
    alertmodal.style.display = "none";
  }
}
</script>



<script type="text/javascript">
    

(function(){
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
        const answers = [];

        // and for each available answer...
        for(letter in currentQuestion.answers){

          // ...add an HTML radio button
          answers.push(
            `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
          );
        }

        // add this question and its answers to the output
        output.push(
          `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join('');
  }

  function showResults(){

    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll('.answers');

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach( (currentQuestion, questionNumber) => {

      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if(userAnswer === currentQuestion.correctAnswer){
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = 'lightgreen';
      }
      // if answer is wrong or blank
      else{
        // color the answers red
        answerContainers[questionNumber].style.color = 'red';
      }
    });

    // show number of correct answers out of total
    resultsContainer.value = `${numCorrect} out of ${myQuestions.length}`;
    
   // Session::set('marks',numCorrect);
   // alert($_SESSION['marks']);
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;
    if(currentSlide === 0){
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  // Variables
  const quizContainer = document.getElementById('quizz');
  const resultsContainer = document.getElementById('res');
  const submitButton = document.getElementById('sub');
  const myQuestions = [
      <?php 
        while ($row = mysqli_fetch_assoc($this->questions)) { ?>
          {
          question: "<?php echo $row['ques']; ?>",
          answers: {
            1: "<?php echo $row['answer1']; ?>",
            2: "<?php echo $row['answer2']; ?>",
            3: "<?php echo $row['answer3']; ?>",
            4: "<?php echo $row['answer4']; ?>",
            5: "<?php echo $row['answer5']; ?>"
          },
          correctAnswer: "<?php echo $row['correct_ans']; ?>"
        },
       <?php } ?>
      
  ];

  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("nxt");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners

  submitButton.addEventListener("click", showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();
 </script> 

 <script>
  function startTimer(duration, display) {
    var timer = duration, hours, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        hours = parseInt((timer/3600) % 24, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        hours = hours < 10 ? "0" + hours : hours;

        display.textContent = hours + ":" +minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
 </script>

 


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}





</script>

</body>
  </html>