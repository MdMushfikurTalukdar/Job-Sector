
<?php 
  include_once "connection.php";

  $s_id= $_GET['s_id'];

  //echo $s_id ;

  $q = "SELECT * FROM requ Where s_id='$s_id' ;";
  $result1 = mysqli_query($conn,$q);
  
  $data = mysqli_fetch_array($result1)

?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​name">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="requirement.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
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
    <section class="u-align-left u-clearfix u-section-1" id="carousel_8a9a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-custom-font u-font-montserrat u-text u-text-1"> Our Requirements</h3>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-gradient u-shape u-shape-rectangle u-shape-1"></div>
                <p class="u-text u-text-2"> <?php echo $data[2]; ?> </p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-gradient u-shape u-shape-rectangle u-shape-2"></div>
                <p class="u-text u-text-3"> <?php echo $data[3]; ?></p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-gradient u-shape u-shape-rectangle u-shape-3"></div>
                <p class="u-text u-text-4"> <?php echo $data[4]; ?></p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-shape-rectangle u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-gradient u-shape u-shape-rectangle u-shape-4"></div>
                <p class="u-text u-text-5"> <?php echo $data[5]; ?></p>
              </div>
            </div>
          </div>
        </div>
        <a href="designation.php" class="u-border-none u-btn u-btn-round u-button-style u-radius-50 u-btn-1">Go Back</a>
        <a href="quiz.php?s_id=<?php echo $s_id ;?>" class="u-btn u-btn-round u-button-style u-radius-50 u-btn-2">Attempt</a>
      </div>
    </section>
    
  
</body></html>