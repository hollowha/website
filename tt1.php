<?php
 
$server = "127.0.0.1:3306"; 
$user = "u151420285_test";        
$password = "51129hsiF";
$db = "u151420285_test";
   
$conn = new mysqli($server,$user,$password,$db);

mysqli_query($conn,"set names utf8");
 

$Username = $_GET['username'];
$password = $_GET['password'];


 $sql = "SELECT*FROM login WHERE username='$Username' AND password='$password'" ;
 $sql2 = $conn->query($sql);
       if(mysqli_num_rows($sql2) == "")

 {
    echo "login_error";
 }
else
 {
    echo "login_OK";
 }
 
  $conn->close();//close $conn
  ?>