<?php

    include_once "connection.php";
    //include_once "navbar.php";
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        // Redirect the user back to the login page or show an error message
        header("Location: login.php");
        exit();
    }

    $id = $_GET["d_id"];
    $d_name = $_GET["d_name"];
 
    $q = "SELECT * FROM sector Where d_id='$id' ORDER BY s_id LIMIT 3;";
    $result1 = mysqli_query($conn,$q);

    $count=0;
    while($data = mysqli_fetch_array($result1)){
        $sector_array[$count] = $data[0];
        $s_id_array[$count] = $data[1];
        //echo $sector_array[$count];
        $count++;
    };

    
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        
        <title>Sector</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/templatemo_main.css">
        <link rel="stylesheet" href="sector.css">
    </head>
    <body>
        <div id="main-wrapper">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center templatemo-logo margin-top-20">
                <h1 class="templatemo-site-title">
                    <a href="designation.php"><?php echo $d_name; ?></a>
                </h1>
            </div>

            

            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <section id="menu-section" class="active">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-20">
                                    <a href="requirement.php?s_id=<?php echo $s_id_array[0] ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-code-fork"></i>
                                            <h2>
                                                <?php 
                                                    echo  $sector_array[0];
                                                ?>
                                            </h2>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-21">
                                    <a href="requirement.php?s_id=<?php echo $s_id_array[1] ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-code-fork"></i>
                                            <h2>
                                                <?php 
                                                    echo  $sector_array[1];
                                                ?>    
                                            </h2>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-22">
                                    <a href="requirement.php?s_id=<?php echo $s_id_array[2] ;?>" class="change-section">
                                        <div class="black-bg btn-menu">
                                            <i class="fa fa-code-fork"></i>
                                            <h2>
                                                <?php 
                                                    echo  $sector_array[2];
                                                ?>
                                            </h2>
                                            
                                        </div>
                                    </a>
                                </div>
                               
                            
                            </div>
                        </section><!-- /.menu-section -->    
        </div>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/templatemo_script.js"></script>

    </body> 
</html>