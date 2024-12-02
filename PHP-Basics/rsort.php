<html>
<head>
<title>reverse sort</title>
</head>

<body>

<center>
<?php

echo "Associative array:<br>";

$mark=array("Akhil"=>"88","Ribin"=>"99","Jude"=>"97");

rsort($mark); 

foreach($mark as $x=> $value){

echo "Key =".$x."value=".$value;
echo"<br>";
}


?>
</center>
</body>
</html>