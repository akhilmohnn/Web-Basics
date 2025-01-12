<html>
<head>
<title>Shop details</title>
</head>

<body>
<center>
<form name="shopForm" method="post" action="shopData.php">
<h4>Shop details</h4>
<br><br>
Shop name<input type="text" name="shop_name" id="shop_name" required>
<br><br>
Shop place<input type="text" name="shop_place" id="shop_place">
<br><br>
Shop owner<input type="text" name="shop_owner" id="shop_owner">
<br><br>
Shop Category<input type="text" name="shop_category" id="shop_category">
<br><br>
<input type="submit" name="submit" value="save">
</form>
<form name="searchShop" method="post" action="shopData.php">
<input type="submit" name="searchAll" value="search">
</form>
</center>
</body>
</html>