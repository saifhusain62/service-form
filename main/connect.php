<?php


include 'dbconfig.php';

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$number = $_POST['number'];
$service = $_POST['service'];

$sql = "INSERT INTO details (firstname,email, number, service ) VALUES ('$firstname', '$email', '$number', '$service')";

if ($conn->query($sql) === TRUE) {
    echo "Submitted Succesfully......Our support team contract within 5 minutes..";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 