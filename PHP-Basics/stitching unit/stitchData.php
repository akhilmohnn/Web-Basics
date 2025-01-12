<?php

$servername="localhost";
$username="root";
$password="";
$database="college";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connected succesfully";

if(isset($_POST['submit'])){
    $customer_id=$_POST['customer_id'];
    $items=$_POST['items'];
    $dateofarrival=$_POST['dateofarrival'];
    $dateofdelivery=$_POST['dateofdelivery'];
    $tailorcharges=$_POST['tailorcharges'];
    $stitchcharges=$_POST['stitchcharges'];

    $sql="INSERT INTO stitch(customer_id,items,dateofarrival,dateofdelivery,tailorcharges,stitchcharges)
                VALUES('$customer_id','$items','$dateofarrival','$dateofdelivery','$tailorcharges','$stitchcharges')";

    if(mysqli_query($conn,$sql)){
        echo "<br>Data inserted succesfully";
    }            
    else{
        echo "Failed to insert".$sql.mysqli_error($conn);
    }
}

if(isset($_POST['searchAll'])){
    $sql="SELECT *FROM stitch";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<table border='1'";
        echo "<tr>";
        echo "<th>customer_id</th>";
        echo "<th>items</th>";
        echo "<th>dateofarrival</th>";
        echo "<th>dateofdelivery</th>";
        echo "<th>tailorcharges</th>";
        echo "<th>stitchcharges</th>";
        echo "</tr>";

        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['customer_id']."</td>";
            echo "<td>".$row['items']."</td>";
            echo "<td>".$row['dateofarrival']."</td>";
            echo "<td>".$row['dateofdelivery']."</td>";
            echo "<td>".$row['tailorcharges']."</td>";
            echo "<td>".$row['stitchcharges']."</td>";
        }
        echo "</table>";
    }
    else{
        echo "No data to display";
    }
}

?>