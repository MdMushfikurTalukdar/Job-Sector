<?php

    include_once "connection.php";
    session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect the user back to the login page or show an error message
    header("Location: login.php");
    exit();
}

$user_mail = $_SESSION['id'];
$user_sql = "SELECT * from user where mail='$user_mail'";
$user_result = mysqli_query($conn,$user_sql);
$user_data = mysqli_fetch_array($user_result);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $sector = $_POST["sector"];
  $desg = $_POST["desg"];
    // Check if the radio button for each question is set
    if (isset($_POST["qusOne"])) {
        $given_answer[0] = $_POST["qusOne"];
        // Process the selected option for Question 1
        //echo "Question 1: You selected " . $given_answer[0] . "<br>";
        // You can compare the selected option with the correct answer for Question 1
    }

    if (isset($_POST["two"])) {
        $given_answer[1] = $_POST["two"];
        // Process the selected option for Question 2
        //echo "Question 2: You selected " . $given_answer[1] . "<br>";
        // You can compare the selected option with the correct answer for Question 2
    }

    if (isset($_POST["three"])) {
        $given_answer[2] = $_POST["three"];
    }

    if (isset($_POST["four"])) {
      $given_answer[3] = $_POST["four"];
  }
  if (isset($_POST["five"])) {
    $given_answer[4] = $_POST["five"];
}
if (isset($_POST["six"])) {
  $given_answer[5] = $_POST["six"];
}
if (isset($_POST["seven"])) {
  $given_answer[6] = $_POST["seven"];
}
if (isset($_POST["eight"])) {
  $given_answer[7] = $_POST["eight"];
}
if (isset($_POST["nine"])) {
  $given_answer[8] = $_POST["nine"];
}
if (isset($_POST["ten"])) {
  $given_answer[9] = $_POST["ten"];
}
    // Add more blocks like above for additional questions if needed
}




    $total_correct=0;
    for($j=0; $j<10; $j++){
        $total_correct = $total_correct + $given_answer[$j];
    }

    $total_marks = round((($total_correct/10)*100),2);

    
  $sql_find_sector_id = "SELECT * from sector where s_name='$sector'";
  $find_result_sector_id = mysqli_query($conn,$sql_find_sector_id);
  $sector_data = mysqli_fetch_array($find_result_sector_id);

  $sql_find_sector_d_id = "SELECT * from sector where d_id='$sector_data[2]'";
  $find_result_sector_d_id = mysqli_query($conn,$sql_find_sector_d_id);
  
  $count_word=0;
    while($sector_data_d_id = mysqli_fetch_array($find_result_sector_d_id)){
      if($sector != $sector_data_d_id[0]){
         $sector_array[$count_word] = $sector_data_d_id[0];
         //echo $sector_array[$count_word];
         $count_word++;
      }
         
  };

  $all_sector = "SELECT * FROM sector ORDER BY RAND() LIMIT 3;";
  $all_sector_result = mysqli_query($conn,$all_sector);
  $s=0;
  while($all_sector_data = mysqli_fetch_array($all_sector_result)){
    $all_sector_selected[$s] = $all_sector_data[0];
    $s++;
  }

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​name">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="result.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-palette-1-base u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_5e48">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-border-6 u-border-palette-1-base u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div><img class="u-border-20 u-border-white u-image u-image-circle u-image-1" src="<?php echo $user_data[10]; ?>" alt="image"></div>
                <h6 class="u-text u-text-default u-text-1"><?php echo $user_data[0]; ?></h6>
                <p class="u-text u-text-2"><?php echo $user_data[2]; ?></p>
                <p class="u-text u-text-3"><?php echo $desg; ?></p>
                <p class="u-text u-text-4"><?php echo $sector; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="loader"></div>
        <p class="u-text u-text-6"><?php echo $total_marks . '%'; ?></p>
        <div style='margin-left: 574px; margin-top: 100px; position:absulate;'><?php if($total_marks < 70){
          echo '<p style="font-weight:bold; color:green ;">You are approved, to join this post.</p>';
        ?>
        <a href="drop_cv.php" class="u-btn u-btn-round u-button-style u-radius-50 u-btn-1">Apply</a>
        <a href="designation.php" class="u-btn u-btn-round u-button-style u-radius-48 u-btn-2">Apply Later</a>
        <?php
        }
        else{
          echo '<p style="font-weight:bold; color:red ;">You are not able, to join this post.</p>';
          ?>
          <p>You can apply on those : </p>
          <?php
          if($total_marks >= 50){
            ?>
            <div><?php echo $sector_array[0]; ?></div>
            <div><?php echo $sector_array[1]; ?></div>
            <?php
          }
          else{
            ?>
            <div><?php echo $all_sector_selected[0] ?></div>
            <div><?php echo $all_sector_selected[1] ?></div>
            <div><?php echo $all_sector_selected[2] ?></div>
            <?php
          }
          ?>
          <a style ="margin-top: 20px; margin-left: 188px;" href="designation.php" class="u-btn u-btn-round u-button-style u-radius-48 u-btn-2">Apply On Those</a>
          <?php
        } ?></div>
        
        
        
      </div>
    </section>
    
    
  
</body></html>


<?php
  

  $sql_user_result = "INSERT INTO `result` (`id`, `s_id`, `marks`) VALUES ('$user_data[1]', '$sector_data[1]', '$total_marks');";
  $sql_user_result_result = mysqli_query($conn, $sql_user_result);

  

?>