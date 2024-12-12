<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>

<center>


	<h4>Search student data</h4>
    <form name=searchForm method="post" action="search.php">

	Roll no<input type="text" name="rollno">
	<input type="submit" name="search" value="search">

	</form>
</center>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

if(isset($_POST["search"]))
{
$rollno=$_POST['rollno'];
$sql="SELECT *FROM studentmark WHERE rollno='$rollno'";
$result=mysqli_query($con,$sql);


	if(mysqli_num_rows($result)>0){

		while($row=mysqli_fetch_assoc($result)){
		echo "<br>Full name:".$row['name']."<br>";
		echo "<br>Roll no:".$row['rollno']."<br>";
		echo "<br>DS Mark:".$row['markDS']."<br>";
		echo "<br>ASE Mark:".$row['markASE']."<br>";
		echo "<br>Total Mark:".$row['markTot']."<br>";



			}}
	else{
		
		echo "No student found with rollno: $rollno";
		

		}
}
?>

</body>
</html>