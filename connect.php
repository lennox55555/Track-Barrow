<?php
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $accept = $_POST['accept'];

    $conn = new mysqli('localhost', 'root','','accounts');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into accounts(name, username, password, email, phone, accept)
            values(?, ?, ?, ?, ?, ?)")
        $stmt->bind_param("ssssis",$name, $username, $password, $email, $phone, $accept);
        $stmt->execute();
        echo "accounts successfully...";
        $stmt->close();
        $conn->close();
?>
