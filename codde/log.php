<?php
include "conn.php";
$email = $_POST['email'];
$pasword = $_POST['pswd'];
$button =  $_POST['knopka'];
if(isset($button)){
$query = "SELECT * FROM `pepl` WHERE  `Password`='$pasword'  AND `Email`='$email' and `Admnum`='1'";
$res = mysqli_query($link,$query);
$counrows = mysqli_num_rows($res);
if($counrows>0){
  echo "<script type='text/javascript'>window.location.href = 'supermain.php';</script>";
}
else{
  echo "<script type='text/javascript'>alert('Try again');</script>";
}

}
?>