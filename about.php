
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    <?php include_once "navbar.php"; ?>
    
    <div class="about-section">
        <h1 class="about">About Us</h1>
        <br>
        <p class="about1">Welcome to Job Grooming & Placement, your go-to platform for finding your dream job.</p>
        <p class="about1">Our mission is to connect job seekers with their ideal job opportunities and help companies find the perfect candidates.</p>
    </div>
    
    <div class="team-section">
        <h2>Our Team</h2>
        <div class="member1">
            <img src="akkas.jpg" alt="Team Member 1">
            <h3>John Doe</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="member2">
            <img src="akkas.jpg" alt="Team Member 2">
            <h3>Jane Smith</h3>
            <p>COO</p>
        </div>
        <!-- Add more team members here -->
    </div>
    
    <?php include_once "footer.html"; ?>
</body>
</html>


<style>
    .member1{
        height: 200px;
        width: 200px;
    }
    .member2{
        height: 200px;
        width: 200px;
    }
    .about-section{
        padding: 7%;
    }
    .about{
        margin-left: 576px;
        color: brown;
    }
    .about1{
        margin-left: 200px;
    }
</style>
