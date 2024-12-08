<?php

$servername="localhost";
$username="root";
$password="";
$dbname="college";

$con = mysqli_connect($servername,$username,$password,$dbname);

//Check connection
if(!$con){
die("Connection failed".mysqli_connect_error());
}

echo "Connected successfully";

$data = "INSERT INTO student(student_id,student_roll,student_name,
			student_age,course_name)VALUES('6','34','Joyal thomas','23','MCA')";

if(mysqli_query($con,$data)){
echo "New record added successfully";
}else{

echo "Error:".$data."<br>".mysqli_error($con);
}

mysqli_close($con)
?>