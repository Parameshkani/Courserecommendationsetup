<?php

include 'config.php';
//declr
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




if(!empty($name)){

$sql = "INSERT INTO user (name, username, email, password)
VALUES ('$name', '$username', '$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "Registration created successfully";
   header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    header("location:signup.php");
}


}













?>