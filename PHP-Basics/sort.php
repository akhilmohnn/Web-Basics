<html>
<head>
<title>Sort array ascending</title>
</head>

<body>

<center>
<?php

echo "Associative array:<br>";

$mark=array("Akhil"=>"88","Ribin"=>"99","Jude"=>"97");

sort($mark); 

foreach($mark as $x=> $value){

echo "Key =".$x.",value=".$value;
echo"<br>";
}


?>
</center>
</body>
</html>