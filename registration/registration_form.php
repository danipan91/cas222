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
$users_event_sunday = $_POST['sunday'];
$users_event_saturday = $_POST['saturday'];
$users_athlete = $_POST['athlete'];
$users_volunteer = $_POST['volunteer'];
$users_female = $_POST['female'];
$users_male = $_POST['male'];
$users_nonbinary = $_POST['nonBinary'];
$users_accommodations = $_POST['accommodations'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `kpandowe_cas222_redo`.`registration_form` (`fullName`, `age`, `emailAddress`, `phoneNumber`, `emergencyContact`, `emergencyContactNumber`, `sunday`, `saturday`, `athlete`, `volunteer`, `female`, `male`, `nonBinary`, `accommodations`) VALUES ('$users_name',
        '$users_age', '$users_email', '$users_phone', '$users_emergency_contact', '$users_emergency_contact_number', '$users_event_sunday', '$users_event_saturday', '$users_athlete', '$users_volunteer', '$users_female', '$users_male', '$users_nonbinary', '$users_accommodations');";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

