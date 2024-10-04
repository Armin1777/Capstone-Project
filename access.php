<?php

include "registration.php";

 if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   }else{
    $stmt= $conn->prepare("SELECT * FROM registration WHERE email= ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
       if($stmt_result->num_rows>0){
           $data= $stmt_result->fetch_assoc();
           if($data['password'] === $password){
                header("Location: dashboard.php");
           }else{
               echo "Invalid Email or Password";
           }
       } else{
           echo "Invalid";
       }
   } 
?>