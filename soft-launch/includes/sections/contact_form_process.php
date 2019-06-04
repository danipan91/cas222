<?php
$servername = "localhost:3306";
$username = "kpandowe_visitor";
$password = "Visitor1";
$dbname = "kpandowe_cas222_redo";
    
$fullName = $_POST['fullName'];
$emailAddress = $_POST['emailAddress'];
$partyType = $_POST['partyType'];
$message = $_POST['message'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO contact_form (fullName, emailAddress, partyType, message) VALUES ('$fullName', '$emailAddress', '$partyType', '$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn = null;
?>
