<?php
$email = $_POST['email'];
$password = $_POST['pass'];
$cemail = $_POST['cemail'];
$cpassword = $_POST['cpass'];


$conn = new mysqli('localhost','root','','registertsofa')
    if($conn->connect_error){
        die('Connection Failed:'. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(email,pass,cemail,cpass) values(?,?,?,?)") ;
        $stmt->bind_param("ssss", $email,$password,$cemail,$cpassword);
        $stmt-> execute();
        echo" registration successfully";
        $stmt->close();
        $conn->close();
    }


















?>