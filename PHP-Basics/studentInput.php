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

mysqli_close($con);
?>