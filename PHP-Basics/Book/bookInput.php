<html>

<head>
<title>Book Entry</title></head>

<body>

</body>
<center>
<h4>Book Details</h4>
<form name="booksForm" method="POST" action="bookDisplay.php">
BookID:
<input type="text" id="book_id" name="book_id" placeholder="Enter the book id">
<br><br>
Title:
<input type="text" id="book_title" name="book_title" placeholder="Enter the title">
<br><br>
Author:
<input type="text" id="book_author" name="book_author" placeholder="Enter the author name">
<br><br>
Edition:
<input type="text" id="book_edition" name="book_edition" placeholder="Enter the edition">
<br><br>
Publisher:
<input type="text" name="book_publisher" id="book_publisher" placeholder="Enter the publisher name">

<br><br>

<input type="submit" name="submit" value="save">


</form>


<br><br>
<h4>Search a book</h4>
<form name="bookSearch" method="POST" action="bookDisplay.php">
Author name:<input type="text" name="book_author" id="book_author">
<br><br>
<input type="submit" name="searchAuthor" value="SEARCH">

</form>

</html>