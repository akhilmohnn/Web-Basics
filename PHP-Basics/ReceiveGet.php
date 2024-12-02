<!DOCTYPE html>
<html lang="en">
<head>
     <title>Received Data</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['studName'] ;
    $course = $_GET['course'] ;
    $age = $_GET['age'];

    if (empty($name)) {
        echo "Name is empty<br>";
    } else {
        echo "Name: " . $name . "<br>";
    }

    if (empty($course)) {
        echo "Course is empty<br>";
    } else {
        echo "Course: " .$course.  "<br>";
    }

    if (empty($age)) {
        echo "Age is empty<br>";
    } else {
        echo "Age: " . $age . "<br>";
    }
}
?>

</body>
</html>