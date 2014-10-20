<!DOCTYPE html>
<html>
<body>
<title> Loop Page </title>
<h1>For Loop</h1>
<?php
for( $x=1;$x<6;$x++)
{
	for( $y=0;$y<$x;$y++)
	{	
		echo "*";
	}
	echo"<br>"; 
}
?>
</body>
</html>

