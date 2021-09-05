<?php
ob_start();
session_start();
include "conn.php";


$username= $_POST['username'];
$password=$_POST['password'];
$hashedpass=sha1($password);

//check if user in database
$stmt=$con->prepare("SELECT email,password FROM user WHERE user_name=? AND password=? AND status=0 ");
$stmt->execute(array($username,$hashedpass));
$user=$stmt->rowCount();
$row=$stmt->fetch();
$errorEmpty = false;
if(empty($username) || empty($password)){
    $errorEmpty=true;
    echo "<span class='result-error'>Please fill all the fields</span>";
    return false;

}
if ($user==0){
    $errorEmpty=true;
    echo "<span class='result-error'>username or password wrong</span>";
    return false;
}

if($user>0){
    $errorEmpty=false;
    $_SESSION['username'] = $username;







}
ob_end_flush();
?>

<script>
    $("#name, #password").removeClass("input-error");

    var errorEmpty = " <?php $errorEmpty; ?>" ;

    // Store the value of PHP variables into JavaScript variables


    // If any fields are empty, errorEmpty will return true
    // Add error class on all input fields
    if (errorEmpty=== true) {

        $("#name, #password").addClass("input-error");

    }

    // If email address is invalid, errorEmail will return true
    // Add error class on that input field


    // If all fields are filled and email address is valid, remove values from all input fields
    if (errorEmpty== false) {
        $("#form-name, #password ").val("");
         // location.reload();
        window.location.assign("https://localhost/joransom/index.php");



    }
</script>
