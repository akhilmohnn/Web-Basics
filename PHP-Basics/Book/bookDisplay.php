<?php


$servername="localhost";
$username="root";
$password="";
$dbname="college";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){

	die("Connection failed".mysqli_connect_error());
}

echo "Connected succesfully";

if(isset($_POST['submit'])){

     $book_id=$_POST['book_id'];
     $book_title=$_POST['book_title'];
     $book_author=$_POST['book_author'];
     $book_edition=$_POST['book_edition'];
     $book_publisher=$_POST['book_publisher'];

echo "<br>"; 
echo "<br>BookID:".$book_id;
echo "<br>Book title:".$book_title;
echo "<br>Author name:".$book_author;
echo "<br>Edition:".$book_edition;
echo "<br>Publisher:".$book_publisher;


$sql="INSERT INTO book(book_id,book_title,book_author,book_edition,book_publisher)
				 VALUES('$book_id','$book_title','$book_author','$book_edition','$book_publisher')";

if(mysqli_query($conn,$sql)){

echo "New Record added succesfully";
}
else{
echo "Error occured".sql."<br>".mysqli_error($conn);

}							
}

if(isset($_POST['searchAuthor'])){

$author=$_POST['book_author'];
$sql="SELECT *FROM book WHERE book_author='$author'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_assoc($result)){

	echo "<br>Book ID :".$row['book_id']."<br>";
	echo "<br>Book Title:".$row['book_title']."<br>";
	echo "<br>Author's name:".$row['book_author']."<br>";
	echo "<br>Edition:".$row['book_edition']."<br>";
	echo "<br>Publisher:".$row['book_publisher']."<br>";
	}	
}
else{

echo "No data found";
}



}






?>