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


    $sql_result = "SELECT * from result where id='$data[1]'";
    $sql_result_result = mysqli_query($conn,$sql_result);

    //include_once "navbar.php";
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​name">
    <meta name="description" content="">
    <title>Home</title>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <link rel="stylesheet" href="profile_result.css">

</head>

<body>

    
<div class="box">
    <table>
        <tr>
            <th>Sector Name</th>
            <th>Marks</th>
            <th>Date</th>
            <th>Status</th>
        </tr>

        <?php 
        while($row = mysqli_fetch_array($sql_result_result)){
            $sql_sector = "SELECT * from sector where s_id='$row[1]'";
            $sql_sector_result = mysqli_query($conn,$sql_sector);
            $sector = mysqli_fetch_array($sql_sector_result);
        ?>
        <tr>
            <td><?php echo $sector[0] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php if($row[2]>90){
                echo "Excellent";
            }
            elseif($row[2]>80){
                echo "Verry Good";
            }elseif($row[2]>70){
                echo "Good";
            }elseif($row[2]>60){
                echo "Avarage";
            }elseif($row[2]>40){
                echo "bad";
            }
            elseif($row[2]>30){
                echo "poor";
            }
            else{
                echo "verry poor";
            } ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <div>
        <a href="profile.php"><button class="btn1">GO BACK</button></a>
    </div>
    <div>
        <a href="logout.php"><button class="btn2">Logout</button></a>
    </div>
</div>
    
</body>
</html>
