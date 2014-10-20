<!DOCTYPE html>
<html>
<body>
<title> VIEW </title>
<center>
<h1> MY Info</h1>
<?php
    $con1=mysqli_connect("gourab.com","root","johncena","info");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
        echo "Successfully connected";
}

$result1 = mysqli_query($con1,"SELECT * FROM form ORDER BY id DESC LIMIT 1");

echo "<table border='1'>
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>Address</td>
<td>Hobby</td>
<td>College</td>
</tr>";

while($row1 = mysqli_fetch_array($result1)) {
  echo "<tr>";
  echo "<td>". $row1['id']."</td>";
  echo "<td>" . $row1['name'] . "</td>";
  echo "<td>" . $row1['email'] . "</td>";
  echo "<td>" . $row1['no'] . "</td>";
  echo "<td>" . $row1['address'] . "</td>";
   echo "<td>" . $row1['hobby'] . "</td>";
  echo "<td>" . $row1['college'] . "</td>";
  echo "</tr>";
}

mysqli_close($con1);

?>
</center>
</body>
</html>

