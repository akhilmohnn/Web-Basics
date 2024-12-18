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

if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $rollno = $_POST['rollno'];
    $markDS = $_POST['markDS'];
    $markASE = $_POST['markASE'];
    $markTot = $_POST['markTot'];

    echo "Name: " . $name;
    echo "<br>Roll no: " . $rollno;
    echo "<br>DS Mark: " . $markDS;
    echo "<br>ASE Mark: " . $markASE;
    echo "<br>Total mark: " . $markTot;

    $sql = "INSERT INTO studentMark (name, rollno, markDS, markASE, markTot) 
			VALUES ('$name', '$rollno', '$markDS', '$markASE', '$markTot')";

    if (mysqli_query($con, $sql)) {
        echo "<br>New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

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

if (isset($_POST["searchall"])) {
    $sql = "SELECT * FROM studentmark";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='border-collapse: collapse; width: 80%; margin-left:60px; text-align: center; font-family: Arial, sans-serif;'>";
        echo "<tr style='background-color:rgb(231, 188, 102);'>";
        echo "<th style='padding: 8px; border: 1px solid #ddd;'>Roll no</th>";
        echo "<th style='padding: 8px; border: 1px solid #ddd;'>Student name</th>";
        echo "<th style='padding: 8px; border: 1px solid #ddd;'>DS Mark</th>";
        echo "<th style='padding: 8px; border: 1px solid #ddd;'>ASE Mark</th>";
        echo "<th style='padding: 8px; border: 1px solid #ddd;'>Total mark</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr style='background-color:rgb(237, 220, 186);'>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row['rollno'] . "</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row['name'] . "</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row['markDS'] . "</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row['markASE'] . "</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . $row['markTot'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}


mysqli_close($con);
?>