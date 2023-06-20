<?php
  require("db_connect.php");
?>

<!DOCTYPE html>
<html>

<head>
	<body>
		<h1>Leave Application Input</h1>
		
		<form action="submit_request.php" method="post">
			<label for="leave_date">Leave Application Date:</label>
			<input type="date" id="leave_date" name="leave_date" required><br><br>
			
			<label for="request_date">Leave Request Date:</label>
			<input type="date" id="request_date" name="request_date" required><br><br>
			
			<label for="cause">Cause of Leave:</label>
			<textarea id="cause" name="cause" required></textarea><br><br>
			
			<input type="submit" value="Submit">
		</form>
	</body>

</head>
</html>

<?php
 $leaveApplicationId = $_GET['id'];

?>