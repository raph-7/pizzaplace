<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

//Database connection
$conn = new mysqli('localhost','root','','test2');
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(name, gender, email, password)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $gender, $email, $password);
    $stmt->execute();
    echo "Registration successful!";
    $stmt->close();
    $conn->close();
}
?>