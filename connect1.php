<?php
$server = '127.0.0.1:3306';//主機
$db_username = 'u151420285_test';//你的資料庫使用者名稱
$db_password = '51129hsiF';//你的資料庫密碼
$dbname = 'u151420285_test';
$con = mysql_connect($server,$db_username,$db_password,$dbname);//連結資料庫
if($con){
    mysqli_query($con,'SET NAMES uff8');
    echo "test";
    //mysql_select_db('u151420285_test',$con);//選擇資料庫（我的是test）
}
else{
    echo "不正確連結資料庫123<br>" . mysqli_connect_error();
}
//if($con){
//die("can't connect".mysql_error() ,echo("test"));//如果連結失敗輸出錯誤
//echo("test1");
//}
//else{
//echo("test2");
//mysql_select_db('u151420285_test',$con);//選擇資料庫（我的是test）
//}
?>