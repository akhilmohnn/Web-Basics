<html>
<head>
<title>Event management</title>
</head>

<body>
<center>
<h4>Event Details</h4>

<form name="eventForm" method="post" action="eventData.php">

EventName:<input type="text" name="event_name" id="event_name">
<br><br>
EventDate:<input type="date" name="event_date" id="event_date">
<br><br>
EventPlace:<input type="text" name="event_place" id="event_place">
<br><br>
EventType:<input type="text" name="event_type" id="event_type">
<br><br>
<input type="submit" name="submit" value="save">
</form>
<br><br>
<form name="searchForm" method="post" action="eventData.php">
<input type="submit" name="searchAll" value="search">
</form>

</center>
</body>
</html>