<?php

$servername = "localhost:3306";
$username = "kpandowe_visitor";
$password = "Visitor1";
$dbname = "kpandowe_cas222_redo";
$users_name = $_POST['fullName'];
$users_age = $_POST['age'];
$users_email = $_POST['emailAddress'];
$users_phone = $_POST['phoneNumber'];
$users_emergency_contact = $_POST['emergencyContact'];
$users_emergency_contact_number = $_POST['emergencyContactNumber'];
$users_satEvent = $_POST['satEvent'];
$users_satRole = $_POST['satRole'];
$users_sunEvent = $_POST['sunEvent'];
$users_sunRole = $_POST['sunRole'];
$users_gender = $_POST['gender'];
$users_accommodations = $_POST['accommodations'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `kpandowe_cas222_redo`.`registration_form` (`fullName`, `age`, `emailAddress`, `phoneNumber`, `emergencyContact`, `emergencyContactNumber`, `satEvent`, `satRole`, `sunEvent`, `sunRole`, `gender`, `accommodations`) VALUES ('$users_name',
        '$users_age', '$users_email', '$users_phone', '$users_emergency_contact', '$users_emergency_contact_number', '$users_satEvent', '$users_satRole', '$users_sunEvent', '$users_sunRole', '$users_gender', '$users_accommodations');";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>