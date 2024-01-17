<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homePage.css">
    <title>Home</title>
</head>
<body>
    <?php
        include_once "navbar.php";
    ?>
    <div class="banner">
        <img class="ban_img" src="homeBanner.gif" alt="banner">
        <div class="text_welcome">Welcome To <br> Job Grooming & Placement</div>
        <a href="register.php"><button class="btnStart">Get Start</button></a>
    </div>
    
    <div class="footer">
        <?php
            include_once "footer.html";
        ?>
    </div>
</body>
</html>

