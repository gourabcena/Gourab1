<!DOCTYPE html>
<html>
<body>
<center>
<h1> Information</h1>
<form action= "view.php">
<?php
$con=mysqli_connect("gourab.com","root","johncena","info");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
// Create database
$sql="CREATE DATABASE innoraft";
if (mysqli_query($con,$sql)) {
  echo "Database my_db created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
}
// Create table
$sql="CREATE TABLE Persons(Name CHAR(30),Email CHAR(30),Phone INT,Address CHAR(30),Hobby CHAR(30),College CHAR(30))";

// Execute query
if (mysqli_query($con,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
})*/
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['pw1']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$sex=mysqli_real_escape_string($con,$_POST['sex']);
$no = mysqli_real_escape_string($con, $_POST['no']);
//$address= mysqli_real_escape_string($con,$_POST['address']);
$hobby= mysqli_real_escape_string($con,$_POST['hobby']);
$college= mysqli_real_escape_string($con,$_POST['college']);
$sql="INSERT INTO form (name,email,password,city,sex,no,address,hobby,college)
VALUES ('$name', '$email','$password','$city','$sex', '$no' , '$address','$hobby','$college')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$result = mysqli_query($con,"SELECT * FROM form");

echo "<table border='1'>
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
<td>City</td>
<td>Sex</td>
<td>Phone</td>
<td>Hobby</td>
<td>College</td>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>". $row['id']."</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  //echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['no'] . "</td>";
  //echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['hobby'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
<p> Name : <?php echo $_POST["name"]?></p>
<p> Email : <?php echo $_POST["email"]?></p>
<p> Phone : <?php echo $_POST["no"]?></p>
<p>Hobby:<?php echo $_POST["hobby"]?></p>
<p>College:<?php echo $_POST["college"]?></p>
<input type="submit" name="bi" value="view">
</center>
</form>
</body>
</html>
