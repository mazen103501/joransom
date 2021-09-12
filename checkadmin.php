<?php

    session_start();
    ob_start();

    include "conn.php";



$username=$_POST['username'];
$password=$_POST['password'];
$hashedpassword=sha1($password);
//end

//check the user exist in database
    $stmt=$con->prepare("SELECT user_id,user_name,password FROM user WHERE user_name=? AND password=? AND status=1 LIMIT 1");
    $stmt->execute(array($username,$hashedpassword));
    $count=$stmt->rowCount();
    $row=$stmt->fetch();
    $errorEmpty=false;
    if($count==0){
        $errorEmpty=true;
        echo "<span class='result-error'>please fill all the fields</span>";
        return false;
    }
    if($count>0) {
        $errorEmpty=false;
        $_SESSION['admin'] = $username;
        $_SESSION['id']=$row['user_id'];



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
    window.location.assign("https://joransom.com/adminpage.php");



}
</script>
