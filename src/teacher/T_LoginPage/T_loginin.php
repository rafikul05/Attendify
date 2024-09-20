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
    $pass = $_POST['pass'];


    $sql = "SELECT * FROM info WHERE pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if($result){

        if($result && mysqli_num_rows($result) > 0){
             $user_pass = mysqli_fetch_assoc($result);
            if($user_pass['pass'] == $pass){
                 header("location:/src/teacher/T_MainPage/Home.html");
            }
           else{
            echo"<script type='text/javascript'> alert('wrong password or username')</script> ";
            }
        }
    }
     echo "<script type='text/javascript'> alert('wrong password or usernamee')</script>";
     echo '<script type="text/javascript">
     window.location.href = "/src/teacher/T_LoginPage/T_LoginPage.html";
   </script>';
     
}




die();
