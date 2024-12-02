<html>
<head>
<title>Post method</title>
</head>

<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="ReceiveGet"){

$name=$_GET['studName'];
$course=$_GET['course'];
$age=$_GET['age'];


if(empty($name)){
echo "Name is empty";
}
else{
echo $name;
}


if(empty($course)){
echo "Course is empty";
}
else{
echo $course;
}


if(empty($age)){
echo "Age is empty";
}
else{
echo $age;
}


}


?>

</body>
</html