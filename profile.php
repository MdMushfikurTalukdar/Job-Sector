<?php
    include_once "connection.php";
    session_start();
    
    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        // Redirect the user back to the login page or show an error message
        header("Location: login.php");
        exit();
    }
    $id = $_SESSION['id'];
    $sql = "SELECT * from user where mail='$id'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    //echo $data[1];

    include_once "navbar.php";
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​name">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="profile.css" media="screen">
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
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-92b3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-gradient u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-3 u-border-palette-1-base u-container-style u-group u-palette-1-base u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <h1 class="u-text u-text-1">Own Description</h1>
                <p class="u-text u-text-2"><?php echo $data[4]; ?></p>
                <img class="u-image u-image-circle u-image-1" src="<?php echo $data[10] ?>" alt="" data-image-width="1500" data-image-height="1000">
                <p class="u-text u-text-3"><?php echo $data[0]; ?>
                <a style="height: 32px; width: 180px; margin-left: 300px;" href="profile_result.php">
                <button style="border-radius: 24px; border-color: lightblue;">SEE ALL RESULTS</button></a>
            </p>
            </p><span class="u-file-icon u-icon u-icon-1"><img src="images/55281.png" alt=""></span><span class="u-file-icon u-icon u-icon-circle u-icon-2"><img src="images/542689-d673cf85.png" alt=""></span><span class="u-file-icon u-icon u-icon-rectangle u-text-black u-icon-3"><img src="images/126341-5581819f.png" alt=""></span>
                <p class="u-text u-text-default u-text-4">19-09-1998</p>
                <p class="u-text u-text-default u-text-5"><?php echo $data[2]; ?></p>
                <p class="u-text u-text-default u-text-6"><?php echo $data[7]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div><a href="logout.php"><button class="btnlogout">Logout</button></a></div>
    </section>


  
</body></html>