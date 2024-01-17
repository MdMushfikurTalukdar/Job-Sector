<?php
    include_once "connection.php";
    //include_once "navbar.php";
    include_once "register.html";

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
$name = $_POST['name'];
$address = $_POST['address'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$password = $_POST['password'];


if(!empty($name) && !empty($address) && !empty($mail) 
&& !empty($password) && !empty($number) )
{
$sql = "INSERT into user(name,mail,password,number,address) 
values('$name','$mail','$password','$number','$address')";
$result = mysqli_query($conn,$sql);
if($result){
  header("Location:login.php");
  die;
}
else{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}

else
{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}



?>
