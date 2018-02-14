<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");

$usrname = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);



$hashPass = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hashPass)){
$sql = "SELECT id, name, password FROM users WHERE username = '$usrname'" ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
var_dump($row);
$id = $row["id"];
$name = $row["name"];

$_SESSION['userID'] = $id;
$_SESSION["userName"] = $name;
header("Location: index.php");//redirects back
}




// darth4ever

// friendshipism4gic
