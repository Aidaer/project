<?php
include "conn.php";
$query = "SELECT * FROM `pepl`";
$res = mysqli_query($link,$query);
echo "<table border='1'><tr> <th>ID</th> <th>Name</th> <th>Surname</th> <th>Nickname</th> <th>Password</th> <th>Email</th> </tr>";
while($row = mysqli_fetch_row($res)){
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";
  echo "<td>".$row[5]."</td>";
}
echo "</table>";
?>