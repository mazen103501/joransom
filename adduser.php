<?php
ob_start();
include "conn.php";


function check($select,$from,$value){
    global $con;
    $statement=$con->prepare("SELECT $select FROM $from WHERE $select=?  ");
    $statement->execute(array($value));
    $count=$statement->rowcount();
    return $count;
}
if(isset($_POST['Register'])){
$name = $_POST['username'];
$pass = $_POST['password'];
$mail = $_POST['email'];
$phone=$_POST['phone'];
$hashpass=sha1($_POST['password']);
    $errorform=array();
    if(strlen($name)<3){
        $errorform[]="username cant be less than 4 ";
    }
    if(strlen($name)>20){
        $errorform[]="username cant be more than 20 ";
    }
    if(empty($name)){
        $errorform[]="username cant be empty ";
    }
    if(empty($pass)){
        $errorform[]="password cant be empty ";
    }
    if(empty($mail)){
        $errorform[]="email cant be empty ";
    }

    if(empty($errorform)){
        $check=check('user_name','user',$name,$mail);
        if($check==1){
            echo "<h1 align='center'>sorry username or email exist</h1>";
            header("refresh:3;url=login.php?login=singup");
            exit();
        }else{
        $con->exec( "INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `status`, `phone_number`) VALUES (NULL, '$name', '$hashpass', '$mail', '0', '$phone')");
        echo '<h1 align="center">succsec</h1>';
        
        
        $msg="Dear Mr/Ms ".$name." Thank You For Your Registration We Will Contact You Soon  ";

         
         mail("$mail","New Register",$msg);
        
        
            header("refresh:3;url=index.php");
            exit();
        }

     
    }
}
ob_end_flush();

