<?php
    $answer1 = $_POST["question1"];
    $answer2 = $_POST["question2"];
    $answer3 = $_POST["question3"];
    $answer4 = $_POST["question4"];
    $answer5 = $_POST["question5"];

    $correct = 0;

    if ($answer1=="Blue") {
        $correct++;
    }
    if ($answer2=="Breaking Bad") {
        $correct++;
    }
    if ($answer3=="Joe Biden") {
        $correct++;
    }
    if ($answer4=="Apple") {
        $correct++;
    }
    if ($answer5=="United States") {
        $correct++;
    }

    $percentage=($correct/5)*100
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Quiz Creation</title>
  </head>
  <body>
    <h1>Quiz Creation</h1>
    <p>Questions 1: What color is the sky?</p>
    <?php echo "<p>Your Answer: $answer1</p>" ?>
    <p>Correct Answer: Blue</p></br>

    <p>Questions 2: What is the best TV show?</p>
    <?php echo "<p>Your Answer: $answer2</p>" ?>
    <p>Correct Answer: Breaking Bad</p></br>

    <p>Questions 3: Who is the current president of the United States?</p>
    <?php echo "<p>Your Answer: $answer3</p>" ?>
    <p>Correct Answer: Joe Biden</p></br>

    <p>Questions 4: Who makes the IPhone?</p>
    <?php echo "<p>Your Answer: $answer4</p>" ?>
    <p>Correct Answer: Apple</p></br>

    <p>Questions 5: What country are we in?</p>
    <?php echo "<p>Your Answer: $answer5</p>" ?>
    <p>Correct Answer: United States</p></br>

    <?php echo "<p>You got a $correct/5.</p>" ?>
    <?php echo "<p>You got a $percentage%.</p>" ?>
  </body>
</html>
