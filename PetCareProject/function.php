<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clncdb";

require 'config.php';
#$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
else{
$fname = $_POST['fname'];
$date = $_POST['date'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO booking VALUES('', '$fname', '$date', '$email', '$phone', '$message')";
 mysqli_query($conn, $sql);
echo
      "<script> alert('Registration Successful for Pet Care.'); </script>";
}
/*if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("sssss", $fname, $date, $email, $phone, $message);
    $stmt->execute();
    $stmt->close();

}*/
$conn->close();

header("Location: contactUs.php");
exit();
?>
