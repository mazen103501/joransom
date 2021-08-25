<?php
ob_start();
include "conn.php";

if(isset($_POST['login'])){
$username= $_POST['username'];
$password=$_POST['password'];
$hashedpass=sha1($password);
//check if user in database
$stmt=$con->prepare("SELECT email,password FROM user WHERE user_name=? AND password=? AND status=0 ");
$stmt->execute(array($username,$hashedpass));
$user=$stmt->rowCount();
$row=$stmt->fetch();

if($user>0){
    $_SESSION['username'] = $username;
    header("location:index.php");
    exit();
    
    

}else{
    
    $errms = "username or password wrong";
     
}}
ob_end_flush();
