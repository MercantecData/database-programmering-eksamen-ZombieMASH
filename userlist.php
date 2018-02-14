<?php
	$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");
	$sql = "SELECT name FROM users WHERE 1";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>

</head>
<body>
	<h1>Users:</h1>
	<?php 
	while($row = $result->fetch_assoc()){
		echo $row["name"];
		$name = $row["name"];
		echo "   <a href='deleteUsers.php/?q=" . $name . "'>delete</a>";
		echo "<br>";
	}
	?>
<br><br><br><br>	
<form method="POST" action="logout.php">
	<input type="submit" name="submit" value="logout">
</form>
</body>
</html>


<!-- sha512 -->