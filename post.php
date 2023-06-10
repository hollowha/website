<?php
if(!isset($_SESSION)){
        session_set_cookie_params(3600,'/');
        session_start();
   }
$link=mysqli_connect("127.0.0.1:3306","u151420285_test","51129hsiF","u151420285_test");
header("Content-type:text/html;charset=utf-8");
if($link)
 {
echo"选择数据库成功！";
}
if(isset($_POST["confirml"]))
{

$text2=$_POST["text2"];
$user=$_SESSION["user_name"];
$date = date("Ymd");
$subject = $_POST["subject"];
$text1=$_POST["textl"];

}
if($text1==""||$text2=="")
{
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写完成！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."post.html"."\""."</script>";
exit;
}
$sql="insert into post (user,text,date,subject,posttitle) VALUES ('$user','$text2','$date','$subject','$text1')";
//echo"$sql";
$link->query('SET NAMES UTF8');
$link->query($sql);
$close=mysqli_close($link);
if($close)
{
//echo"数据库关闭";
//echo"注册成功！";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."return.html"."\""."</script>";
    
}


 
 