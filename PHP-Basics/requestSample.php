<html>
<head>
<title>Post method</title>
</head>

<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_REQUEST['studName'];

if(empty($name)){
echo "Name is empty";
}
else{
echo $name;
}

}


?>

</body>
</html