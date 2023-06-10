<?php
$link=mysqli_connect("127.0.0.1:3306","u151420285_test","51129hsiF","u151420285_test");
 
if (empty($link)){
print mysqli_error($link);
die ("無法連結資料庫");
exit;
}
mysqli_query( $link, "SET NAMES 'utf8'");
$str="SELECT  subject FROM post WHERE subject='a'";
$result = mysqli_query($link,$str);
$row = mysqli_fetch_array($result, MYSQLI_BOTH)
echo $row;

}?>