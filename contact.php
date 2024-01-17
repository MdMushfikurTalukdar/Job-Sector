<?php
    include_once "connection.php";
    //include_once "navbar.php";
    

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['address'];


if(!empty($name))
{
$sql = "INSERT INTO `message` (`m_name`, `m_email`, `m_m`) VALUES ('$name', '$email', '$message')";
$result = mysqli_query($conn,$sql);
if($result){
  header("Location:index.php");
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
