<?php

// session_start();
ob_start();

include "conn.php";


if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$hashedpassword=sha1($password);
//end

//check the user exist in database
    $stmt=$con->prepare("SELECT user_id,user_name,password FROM user WHERE user_name=? AND password=? AND status=1 LIMIT 1");
    $stmt->execute(array($username,$hashedpassword));
    $count=$stmt->rowCount();
    $row=$stmt->fetch();
    if($count>0) {
        $_SESSION['admin'] = $username;
        $_SESSION['id']=$row['user_id'];
        header("location:adminpage.php");
        exit();
    }
}
ob_end_flush();

