<?php
	$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");
	$sql = "DELETE FROM `images` WHERE `imageURL` = '" . $_GET['q'] . "'";
	$result = $conn->query($sql);
	echo $sql;
	header("Location: http://localhost/editPhoto.php");//redirects back

?>