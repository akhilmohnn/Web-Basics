<html>
<head>
<title>First PHP Program</title>
</head>

<body bgcolor="LightGray">

<center>
<?php

$cars=array("BMW","Maruti","Toyota");
echo "I like: ".$cars[0]."<br><br><br>";



echo "Associative array:<br>";

$mark=array("Akhil"=>"88","Ribin"=>"99","Jude"=>"97");
echo "Mark of ribin: ".$mark['Ribin'];

$age=array("Ribin"=>"35","Akhil"=>"21","Joyal"=>"45");
foreach($age as $x=> $value){

echo "Key =".$x."value=".$value;
echo"<br>";

}

?>
</center>
</body>
</html>