<?php

require 'connect.php';

//registration form
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * From registration where email= '$email'";
    $result=$conn->quert($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists!";
    } else{
        $insertQuery= "INSERT INTO registration(Fullname, Email, password) VALUES ('$name', '$email', '$password')";
            if($conn->query($insertQuery)== TRUE){
                Header("Location: Home.php");
            }  else{
                echo "Error".$conn->error;
    }

    }
}

// login form
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql= "SELECT * FROM registration WHERE email= '$email' and password='$password'";
    $result= $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $rows=$result->fetch_assoc();
        $_SESSION['email']==$row['email'];
        Header("Location : dashboard.php");
        exit();
    } else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>