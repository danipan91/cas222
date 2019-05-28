<?php

$servername = "localhost";
$username = "XXXX";
$password = "XXXXX";
$dbname = "instruct_contactform";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_website = $_POST['website'];
$users_comment = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `instruct_contactform`.`contact` (`id`, `name`, `email`, `website`,
        `comment`, `time_stamp`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

