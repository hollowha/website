<?php
$server = "127.0.0.1:3306";
$db_username = "u151420285_test";
$db_password = "51129hsiF";
$dbname = 'u151420285_test';
$con = mysqli_connect($server,$db_username,$db_password);
if($con){
    mysqli_query($con,'SET NAMES uff8');
    echo "test";
}
else{
    echo "不正確連結資料庫123<br>" . mysqli_connect_error();
}
?>