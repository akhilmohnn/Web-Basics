<?php

$servername="localhost";
$username="root";
$password="";
$database="college";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
die("Connection failed".mysqli_connect_error());
}

echo "Connected succesfully<br>";


if(isset($_POST['submit'])){
$shop_name=$_POST['shop_name'];
$shop_place=$_POST['shop_place'];
$shop_owner=$_POST['shop_owner'];
$shop_category=$_POST['shop_category'];

$sql="INSERT INTO shop(shop_name,shop_place,shop_owner,shop_category)
		VALUES('$shop_name','$shop_place','$shop_owner','$shop_category')";

if(mysqli_query($conn,$sql)){
echo "Data inserted successfully";
}
else{
echo "Failed".$sql."<br>".mysqli_error($conn);
	}

}


if(isset($_POST['searchAll'])){

$sql="SELECT *FROM shop";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
echo "<table border='1'>";
echo "<tr>";
echo "<th>Shop name</th>";
echo "<th>Shop place</th>";
echo "<th>Shop owner</th>";
echo "<th>Shop category</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['shop_name']."</td>";
echo "<td>".$row['shop_place']."</td>";
echo "<td>".$row['shop_owner']."</td>";
echo "<td>".$row['shop_category']."</td>";
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

