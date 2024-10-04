<?php
$name= $_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];


$conn= new mysqli('localhost', 'root', '', 'bghis');


    if($conn->connect_error){
        die("Connection Failed : " .$conn->error);
    } else{
        $stmt= $conn->prepare("INSERT INTO registration(name, email, pass) VALUES(?,?,?)");
        $stmt->bind_param("sss", $name, $email, $pass);
        $stmt->execute();
            header ("Location : Login.php");
        $stmt->close();
        $conn->close();
    }
?>