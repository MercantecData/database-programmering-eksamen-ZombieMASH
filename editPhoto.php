<?php
session_start();
$id = $_SESSION['userID'];
$conn = mysqli_connect("localhost", "root", "", "databaseexam");
$sql = "SELECT id, imageURL FROM images WHERE owner = $id";
$imageresult = $conn->query($sql);

echo "<h2> Dine billeder </h2>";

while($row = $imageresult->fetch_assoc()) {
	$url = $row["imageURL"];
	echo "<a href='fullSize.php/?q=" . $url . "'>
	<img class = 'myImage' src='$url'></a>";
	echo "   <a href='deletePhoto.php/?q=" . $url . "'>delete</a>";
	echo "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit photos</title>
</head>
<body>
	<br><br><br><br>	
<form method="POST" action="index.php">
	<input type="submit" name="submit" value="Go back">
</form>
</body>
</html>


<style type="text/css">
	.myImage{
		max-width: 150px;
		max-height: 150px;
	}


</style>