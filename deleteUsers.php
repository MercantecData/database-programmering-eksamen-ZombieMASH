<?php
	$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");
	$sql = "DELETE FROM `users` WHERE `username` = '" . $_GET['q'] . "'";
	$result = $conn->query($sql);
	echo $sql;
	header("Location: http://localhost/userlist.php");//redirects back

?>