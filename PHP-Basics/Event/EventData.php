<?php

$servername="localhost";
$username="root";
$password="";
$dbname="college";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
die("Connection failed".mysqli_connect_error());
}
echo "Connection successful";

if(isset($_POST['submit'])){
$event_name=$_POST['event_name'];
$event_date=$_POST['event_date'];
$event_place=$_POST['event_place'];
$event_type=$_POST['event_type'];

$sql="INSERT INTO event(event_name,event_date,event_place,event_type)
			VALUES('$event_name','$event_date','$event_place','$event_type')";

if(mysqli_query($conn,$sql)){
echo "Data inserted successfully";
}
else{
echo "Failed".$sql."<br>".mysqli_error($conn);
}

}

if(isset($_POST['searchAll'])){

$sql="SELECT * FROM event";
$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){

echo "<table border='1'>";
echo "<tr>";
echo "<td>Event name</td>";
echo "<td>Event date</td>";
echo "<td>Event place</td>";
echo "<td>Event type</td>";
echo "</tr>";

while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['event_name']."</td>";
echo "<td>".$row['event_date']."</td>";
echo "<td>".$row['event_place']."</td>";
echo "<td>".$row['event_type']."</td>";
echo "</tr>";
}
echo "</table>";

}
else{
echo "No data found";
}



}


mysqli_close($conn);
?>