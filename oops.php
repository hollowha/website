<?php
    if(!isset($_SESSION)){
        session_set_cookie_params(3600,'/');
        session_start();
    }

    if(isset($_SESSION['user_name'])){
            echo"登录成功！";
            echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."success.html"."\""."</script>";
        }else{
            echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.html"."\""."</script>";
        }
    
?>
