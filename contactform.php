
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactform</title>
    <link rel="stylesheet" href="contact.css">
   
</head>
<body>
    
    <div class="container">
        <form action="contact.php" method="POST">
            <h1>Contact Us</h1>
            <p>fill all thhe text from the given field</p>
            
            <p> <input type="text" name="name" placeholder="Username" ></p>
            <p> <input type="text" name="email" placeholder="Email"></p>
            <p>
                 <textarea placeholder="massage" name="address" id="address" cols="20" rows="3"></textarea>
                
            </p>
            <input type="submit" value="Submit">
            <div> <img src="https://rapidpressct.com/files/subscribers/8dbc4a55-a590-4425-b590-f9e5ca74e4ec/Webfiles/icons/iconcontactus.jpg" alt="telephone"></div>
        </form>
    </div>
</body>
</html>