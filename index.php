<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to the database failed due to " . mysqli_connect_error());
};
$name= $_POST['name'];
$gender= $_POST['gender'];
$age= $_POST['age'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$other= $_POST['other'];
// echo "Success, connected!";
$sql = "INSERT INTO `trip`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', CURRENT_DATE());";

echo $sql;
?>
