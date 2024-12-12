<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>

<center>
	<h4>Enter student data</h4>
    <form name="marksForm" method="post" action="studentInput.php">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="fname" placeholder="Enter the name" required>
        <br>
        <label for="roll">Roll no:</label>
        <input type="text" id="roll" name="rollno">
        <br>

	<h4>Marks</h4><br>
        <label for="ds">DS Marks:</label>
        <input type="text" id="ds" name="markDS" placeholder="out of 100" >
        <br>

        <label for="ase">ASE Marks:</label>
        <input type="text" id="ase" name="markASE" placeholder="out of 100" >
        <br>
		

        <label for="tot">Total Marks:</label>
        <input type="text" id="tot" name="markTot" >
        <br>

        <input type="submit" name="submit" value="Save"><br><br>
    </form>

	<h4>Search student data</h4>
    <form name=searchForm method="post" action="studentInput.php">

	Roll no<input type="text" name="roll">
	<input type="submit" name="search" value="search">

	</form>
</center>

</body>
</html>