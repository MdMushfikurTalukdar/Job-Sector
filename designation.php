
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect the user back to the login page or show an error message
    header("Location: login.php");
    exit();
}

include_once "connection.php";
//include_once "navbar.php";

$sql = "SELECT * from desg";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
?>


<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Designation</title>

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="designation.css" />


	</head>

	<body>		
        
        
		<section   class="testemonial">
		<div class="top_link"><a class="return_link" href="index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Select your Designation
					</h2>
					
				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">
                <?php while($row = $result->fetch_assoc()) { ?>

					<div class="home1-testm item" >
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="<?php echo $row["d_pic"]; ?>" alt="img"/>
							</div>
							<div class="home1-testm-txt">
								<p>
                                <?php echo $row["d_name"]; ?>
								</p>
                                <p>
                                <?php echo "Sector : 3"; ?>
								</p>
							</div>
							<a class="linkChoose" href="sector.php?d_id=<?php echo $row['d_id'];?> && d_name=<?php echo $row['d_name'];?>"><button class="btnChoose">Choose Sector</button></a>
						</div>
						
					</div>

                    <?php } ?>


                    
					

				</div>
				
			</div>

		</section>
		
		
        <?php }
                    
                    else{
						?>
						<body  style="background-color:powderblue;">
						<div style="margin-top: 5cm;margin-left:15cm;font-size:30px;color: #666362;">
						<?php
                        echo "There is no job available"; ?>
						</div>
						<div>
							<div style="margin-top: 5cm;margin-left:19cm;font-size:30px">
				<button><a href="admin_menu.php">Go Back</a></button>
					</div>
				</div>
					</body>
				<?php
						
                    }
                    
                ?>			

        <script src="assets/js/jquery.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>

	</body>

</html>
