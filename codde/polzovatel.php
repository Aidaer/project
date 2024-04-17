<!DOCTYPE html>
<html lang="en">
<head>
  <title>NewsArchive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form>

<div class="text-center">

 <img src="news-icon_609277-3675.jpg" class="img-fluid" alt="Responsive image">
</div>
<div class="text-center">
<a href="logginpage.php" class="btn btn-info" role="button">Log</a><br>

<a href="adminlog.php" data-toggle="tooltip" data-placement="top" title="click">For admins</a>
</div>


  

</form>
</body>
</html>
<?php
include "conn.php";
$button = $_POST['knopka'];
$name = $_POST['fname'];
$surname = $_POST['surname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$pass = $_POST['pswd'];
if(isset($button)){
      $query = "INSERT INTO `pepl`( `Name`, `Surname`, `Nickname`, `Password`, `Email`) VALUES ('$name','$surname','$nickname','$pass','$email')";  
      $res = mysqli_query($link,$query);
}
?>