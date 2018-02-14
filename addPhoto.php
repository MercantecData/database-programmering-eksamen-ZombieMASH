<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$id = $_SESSION['userID'];
	$conn = mysqli_connect("localhost", "root", "", "databaseexam");
	$Url = mysqli_real_escape_string($conn, $_POST["URL"]);
	$sql="INSERT INTO `images`(`imageURL`, `owner`) VALUES ('$Url' , '$id')";
	echo $sql;
	$conn->query($sql);
	header("Location: index.php");//redirects back
}




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
	<p> URL: <input type="" name="URL" required></p>
	<input type="submit" value="Submit" alt="Submit" title="Submit" />
		</form>
</body>
</html>