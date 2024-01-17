<?php
    include_once "connection.php";
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION['id'])) {
    // Redirect the user back to the login page or show an error message
    header("Location: login.php");
    exit();
  }
    $s_id = $_GET['s_id'];
    
    //sector name
    $sql_sector = "SELECT * from sector where s_id='$s_id'";
    $result_sector = mysqli_query($conn, $sql_sector);
    $sector = mysqli_fetch_array($result_sector);
    //sector name end

    //degination name
    $sql_desg = "SELECT * from desg where d_id='$sector[2]'";
    $result_desg = mysqli_query($conn, $sql_desg);
    $desg = mysqli_fetch_array($result_desg);
    //degination end

    $sql = "SELECT * from key_word where s_id='$s_id'";
    $result = mysqli_query($conn, $sql);

    $count_word=0;
    while($data = mysqli_fetch_array($result)){
         $word_array[$count_word] = $data[1];
         //echo $word_array[$count];

         $count_word++;
    };

    // for($i=0; $i<$count_word; $i++){
    //     $sql3 = "SELECT * from question";
    //     $result3=mysqli_query($conn,$sql3);
    //     while($data3 = mysqli_fetch_array($result3)){
    //         $sql2 = "SELECT * from question where ques LIKE '%$word_array[$i]%'";
    //         $result2 = mysqli_query($conn,$sql2);
    //         $data2 = mysqli_fetch_array($result2);

    //         echo $data2[0];
    //         echo '----------------------------' ;
    //     }
        
        
    // }

    $sql_final = "SELECT DISTINCT q.* FROM question q 
    JOIN key_word kw ON q.ques LIKE CONCAT('%', kw.word, '%')
    WHERE kw.word = '$word_array[0]' OR kw.word = '$word_array[1]'
    ORDER BY RAND()
    LIMIT 10; "; 

    $result_final = mysqli_query($conn,$sql_final);

    $q_count=0;
    while($data_final = mysqli_fetch_array($result_final)){
        $question_array[$q_count] = $data_final[0];
        $option_one_array[$q_count] = $data_final[1];
        $option_two_array[$q_count] = $data_final[2];
        $option_three_array[$q_count] = $data_final[3];
        $option_four_array[$q_count] = $data_final[4];
        $correct_answer[$q_count] = $data_final[5];
        $q_count++;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css">
    <title>Quiz</title>
</head>
<body>
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">

      <form action="result.php" method="POST">
      
      <div >
        <label class="desg" for="desg"><?php echo $desg[1] ?></label><label> -------- </label><label for="sector"><?php echo $sector[0] ?></label>
      </div>
      <p> _________________________________________________________________________________ </p>
      
      <input type="hidden" name="sector" value="<?php echo $sector[0]; ?>"/>
      <input type="hidden" name="desg" value="<?php echo $desg[1]; ?>"/>

        
        <div class="formbold-mb-6">
          <label for="qusOne" class="formbold-form-label">
            <?php echo '1. ' .$question_array[0]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                  value="<?php if($option_one_array[0]===$correct_answer[0]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[0]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                  value="<?php if($option_two_array[0]===$correct_answer[0]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[0]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                  value="<?php if($option_three_array[0]===$correct_answer[0]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[0]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                  value="<?php if($option_four_array[0]===$correct_answer[0]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[0]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>
  
        


        <div class="formbold-mb-6">
          <label for="two" class="formbold-form-label">
            <?php echo '2. ' .$question_array[1]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="two"
                  id="qusOne"
                  value="<?php if($option_one_array[1]===$correct_answer[1]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[1]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="two"
                  id="qusOne"
                  value="<?php if($option_two_array[1]===$correct_answer[1]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[1]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="two"
                  id="qusOne"
                  value="<?php if($option_three_array[1]===$correct_answer[1]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[1]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="two"
                  id="qusOne"
                  value="<?php if($option_four_array[1]===$correct_answer[1]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[1]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- ----------three---------- -->
        <div class="formbold-mb-6">
          <label for="three" class="formbold-form-label">
            <?php echo '3. ' .$question_array[2]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="three"
                  id="qusOne"
                  value="<?php if($option_one_array[2]===$correct_answer[2]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[2]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="three"
                  id="qusOne"
                  value="<?php if($option_two_array[2]===$correct_answer[2]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[2]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="three"
                  id="qusOne"
                  value="<?php if($option_three_array[2]===$correct_answer[2]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[2]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="three"
                  id="qusOne"
                  value="<?php if($option_four_array[2]===$correct_answer[2]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[2]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>


        <!-- ---------------four------------------ -->

        <div class="formbold-mb-6">
          <label for="four" class="formbold-form-label">
            <?php echo '4. ' .$question_array[3]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="four"
                  id="qusOne"
                  value="<?php if($option_one_array[3]===$correct_answer[3]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[3]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="four"
                  id="qusOne"
                  value="<?php if($option_two_array[3]===$correct_answer[3]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[3]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="four"
                  id="qusOne"
                  value="<?php if($option_three_array[3]===$correct_answer[3]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[3]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="four"
                  id="qusOne"
                  value="<?php if($option_four_array[3]===$correct_answer[3]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[3]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>


        <!-- ---------------five-------------------- -->
        <div class="formbold-mb-6">
          <label for="five" class="formbold-form-label">
            <?php echo '5. ' .$question_array[4]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="five"
                  id="qusOne"
                  value="<?php if($option_one_array[4]===$correct_answer[4]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[4]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="five"
                  id="qusOne"
                  value="<?php if($option_two_array[4]===$correct_answer[4]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[4]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="five"
                  id="qusOne"
                  value="<?php if($option_three_array[4]===$correct_answer[4]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[4]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="five"
                  id="qusOne"
                  value="<?php if($option_four_array[4]===$correct_answer[4]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[4]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- ------------------------------six---------------------------- -->

        <div class="formbold-mb-6">
          <label for="six" class="formbold-form-label">
            <?php echo '6. ' .$question_array[5]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="six"
                  id="qusOne"
                  value="<?php if($option_one_array[5]===$correct_answer[5]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[5]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="six"
                  id="qusOne"
                  value="<?php if($option_two_array[5]===$correct_answer[5]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[5]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="six"
                  id="qusOne"
                  value="<?php if($option_three_array[5]===$correct_answer[5]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[5]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="six"
                  id="qusOne"
                  value="<?php if($option_four_array[5]===$correct_answer[5]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[5]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- --------------------------seven-------------------------------------- -->

        <div class="formbold-mb-6">
          <label for="seven" class="formbold-form-label">
            <?php echo '7. ' .$question_array[6]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="seven"
                  id="qusOne"
                  value="<?php if($option_one_array[6]===$correct_answer[6]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[6]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="seven"
                  id="qusOne"
                  value="<?php if($option_two_array[6]===$correct_answer[6]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[6]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="seven"
                  id="qusOne"
                  value="<?php if($option_three_array[6]===$correct_answer[6]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[6]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="seven"
                  id="qusOne"
                  value="<?php if($option_four_array[6]===$correct_answer[6]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[6]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- ----------------------------eight----------------------------- -->

        <div class="formbold-mb-6">
          <label for="eight" class="formbold-form-label">
            <?php echo '8. ' .$question_array[7]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="eight"
                  id="qusOne"
                  value="<?php if($option_one_array[7]===$correct_answer[7]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[7]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="eight"
                  id="qusOne"
                  value="<?php if($option_two_array[7]===$correct_answer[7]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[7]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="eight"
                  id="qusOne"
                  value="<?php if($option_three_array[7]===$correct_answer[7]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[7]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="eight"
                  id="qusOne"
                  value="<?php if($option_four_array[7]===$correct_answer[7]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[7]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- ------------------------------------------nine----------------------------------- -->

        <div class="formbold-mb-6">
          <label for="nine" class="formbold-form-label">
            <?php echo '9. ' .$question_array[8]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="nine"
                  id="qusOne"
                  value="<?php if($option_one_array[8]===$correct_answer[8]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[8]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="nine"
                  id="qusOne"
                  value="<?php if($option_two_array[8]===$correct_answer[8]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[8]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="nine"
                  id="qusOne"
                  value="<?php if($option_three_array[8]===$correct_answer[8]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[8]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="nine"
                  id="qusOne"
                  value="<?php if($option_four_array[8]===$correct_answer[8]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[8]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- ------------------------------------ten----------------------------- -->

        <div class="formbold-mb-6">
          <label for="ten" class="formbold-form-label">
            <?php echo '10. ' .$question_array[9]; ?>
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ten"
                  id="qusOne"
                  value="<?php if($option_one_array[9]===$correct_answer[9]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_one_array[9]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ten"
                  id="qusOne"
                  value="<?php if($option_two_array[9]===$correct_answer[9]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_two_array[9]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ten"
                  id="qusOne"
                  value="<?php if($option_three_array[9]===$correct_answer[9]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_three_array[9]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ten"
                  id="qusOne"
                  value="<?php if($option_four_array[9]===$correct_answer[9]){
                    echo 1;
                  }else{ 
                    echo 0; } ?>"
                />
                <?php echo $option_four_array[9]; ?>
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- --------------------------------------end--------------------------------- -->


  
        <button value="Submit" class="formbold-btn">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>
