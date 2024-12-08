<html>
<head>
<title>Name sort</title>
</head>

<body>

<center>
<?php



echo "Associative array:<br>";

$name=array("34"=>"Akhil","23"=>"Ribin","45"=>"Nazeel");

echo"<br>Value Reverse sort:<br>";
arsort($name); 

foreach($name as $x => $value) {
    echo "RollNo. = " . $x . " Name = " . $value;
    echo "<br>";

}

?>
</center>
</body>
</html>