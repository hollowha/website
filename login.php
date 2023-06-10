<?php
header("Content-type:text/html;charset=utf-8");
$link=mysqli_connect("127.0.0.1:3306","u151420285_test","51129hsiF","u151420285_test");
if(!isset($_SESSION)){
        session_set_cookie_params(3600,'/');
        session_start();
}
if($link)
{
    if(isset($_POST["subl"]))
    {
      $name=$_POST["usernamel"];
      $password=$_POST["passwordl"];
      if($name==""||$password=="")//判断是否为空
      {
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写正确的信息！"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.html"."\""."</script>";
        exit;
      }
      //$str="select password from register where username='$name'";
      $sql_select = "select username,password from register where username = '$name' and password = '$password'";
      //$link->query('SET NAMES UTF8');
      mysqli_query($link,'SET NAMES UTF8');
				//执行sql语句
	  $ret = mysqli_query($link,$sql_select);
	  $row = mysqli_fetch_array($ret);
	  //$result=$link->query($str);
      //$pass=mysqli_fetch_assoc($result);
      //$password=$pass[0];
      /*$pa==$password*/
      if($name == $row['username']&&$password == $row['password'])//判断密码与注册时密码是否一致
      {
        $_SESSION['user_name'] = $name;
        echo"登录成功！";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."success.html"."\""."</script>";
        
      }
	  else
      {  
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登录失败！"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.html"."\""."</script>";
      }
    }
}
?>