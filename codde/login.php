<?php
include "conn.php";
$email = $_POST['mail'];
$pasword = $_POST['pwd'];

$query = "SELECT * FROM `pepl` WHERE  `Password`='$pasword'  AND `Email`='$email'";
$res = mysqli_query($link,$query);
$counrows = mysqli_num_rows($res);
if($counrows>0){
  echo "1";
}
else{
  echo "0";
}


?>