<?php


$servername = "localhost";
$username ="phpmyadmin";
$password = "201314";
$dbname = "signUp_info";


$conn = new mysqli($servername, $username, $password, $dbname);



if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
else{
    $name = $_POST['name'];
    $GUroll = $_POST['GUroll'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $sem = $_POST['sem'];
    $pass = $_POST['pass'];
    $confirmP = $_POST['confirmP'];
    $profession = $_POST['profession'];


    $sql = "INSERT INTO info VALUES('$name', $GUroll, '$phone', '$department', '$sem', '$pass', '$confirmP', '$profession')";

    $result = mysqli_query($conn, $sql);

    echo "<script type='text/javascript'> alert('Thank You For Sign up')</script>";
}


if($result){

  
    header("location: /index.html");
  
}
else{
    echo "error";
}
die();

