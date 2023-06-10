<?php
$link=mysqli_connect("127.0.0.1:3306","u151420285_test","51129hsiF","u151420285_test");
header("Content-type:text/html;charset=utf-8");
if($link)
  {  
     //echo"选择数据库成功！";
      if(isset($_POST["sub"]))
      {
        $name=$_POST["username"];
        $password1=$_POST["password"];
        $password2=$_POST["password2"];
        if($name==""||$password1=="")
        {
          echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写完成！"."\"".")".";"."</script>";
          echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";    
          exit;
        }
        if($password1==$password2)
        {
        $str="select username from register where username= '$name'";
        //$sql_select = "select username from users where username = '$user'";
        $result = mysqli_query($link,$str);
        
		$link->query('set names utf8;');
        //$result=$link->query($str);
        $num = mysqli_num_rows($result);
        //$pass=mysqli_fetch_assoc($result);
        //$pa=$pass[0];
        if($num>0)
        {
        
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."该用户名已被注册"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";   
        exit; 
        }
        
        
        $sql="insert into register (username,password) VALUES ('$name','$password1')";
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
        }
        else
        {
          echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密码不一致！"."\"".")".";"."</script>";
          echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://127.0.0.1:8080/register.html"."\""."</script>";    
        }
      }
  }