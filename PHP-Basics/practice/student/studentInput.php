<?php

$servername="localhost";
$username="root";
$password="";
$database="college";



$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Connection failed".mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])){
$rollno=$_POST['rollno'];
$name=$_POST['fname'];
$markDS=$_POST['markDS'];
$markASE=$_POST['markASE'];
$markTot=$_POST['markTot'];

$sql="INSERT INTO studentmark (rollno,name,markDS,markASE,markTot) 
		VALUES ('$rollno','$name','$markDS','$markASE','$markTot')";

if(mysqli_query($conn,$sql)){
    echo "Data inserted";
	}
else{
	echo "Failed!".$sql."<br>".mysqli_error($conn);
}

	}



if(isset($_POST['searchall'])){
	
$sql="SELECT *FROM studentmark";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

echo "<table border='1'";
echo "<tr>";
echo "<th>Roll no</th>";
echo "<th>Name</th>";
echo "<th>Mark DS</th>";
echo "<th>mark ASE</th>";
echo "<th>Total mark</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";	
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['markDS']."</td>";
echo "<td>".$row['markASE']."</td>";
echo "<td>".$row['markTot']."</td>";
echo "</tr>";

	}
echo "</table>";
	
}
else{
	echo "No data present";
}

	}



mysqli_close($conn);
?>