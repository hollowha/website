<?php
$host = '127.0.0.1:3306';
$dbuser = 'u151420285_test';
$dbpassword = '51129hsiF';
$dbname = 'u151420285_test';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES uff8');
    echo "test";
}
else{
    echo "不正確連結資料庫123<br>" . mysqli_connect_error();
}
?>