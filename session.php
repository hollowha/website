<?php
    if(!isset($_SESSION)){
        session_set_cookie_params(3600,'/');
        session_start();
    }
    if(isset($_GET['logout'])){
        CleanSession();
        setcookie(session_name(),'',time()-3600,'/');
        header("Location: login.php"); exit;
    }
    
    function ForceLogin(){
        if(isset($_SESSION['user_name'])){
            
        }else{
            header("Location: login.php"); exit;
        }
    }
    
    function ForceDashboard(){
        if(isset($_SESSION['user_name'])){
            header("Location: dashboard.php"); exit;
        }else{
    
        
        }
    }
?>