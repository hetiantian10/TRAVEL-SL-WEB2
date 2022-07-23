<?php
echo "<meta http-equiv='refresh' content='5; url='Home.php'>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$con = mysqli_connect($servername,$username,$password,$dbname);
	/*if (!$con)
		{
		die('Could not connect: ' . mysqli_error($con));
		}
	else
		echo "connected";*/

/*$sql1 = "CREATE DATABASE register";
	if(mysqli_query($con,$sql1))
		{
		echo "database created successfully";
		}
	else
		{
		echo "error creating database:".mysqli_error($con);
		}
*/

	$sql = "INSERT INTO booking(Name,Email,Phone,Address,Location,No_of_guests,Arrival,Leaving) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]', '$_POST[address]','$_POST[location]','$_POST[guests]','$_POST[arrivals]','$_POST[leaving]')";

	if (!mysqli_query($con, $sql))
	{
		die('Error: '.	mysqli_error ($con));
	}

	echo "<p style = 'background-color:green;text-align:center;font-size:30px;border:2px solid black;top-margin:500px;'>Your details add successfully!</p>";
	echo "<img src='dilshan-chathuranga-udawatta-ayubowan-srilanka-hd-1080.jpg' style = 'width:1200px;height:450px;'>";
mysqli_close ($con);
?>