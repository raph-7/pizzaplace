<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];

//Database connection
$conn = new mysqli('localhost','root','','pizza');
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact(name, email, phone, subject)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$name, $email, $phone, $subject);
    $stmt->execute();
    echo "Registration successful!";
    $stmt->close();
    $conn->close();
}
?>