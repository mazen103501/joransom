<?php
include "conn.php";

 $fullname =  $_POST['fullname'];
 $email = $_POST['email'];
 $phone =$_POST['number'];
 $s1= $_POST['courses'];
 $message=$_POST['message'];

 $errorEmpty = false;
 $errorEmail = false;

 if (empty($fullname) || empty($phone) || empty($email)) {
  echo "<span class='result-error'>fill all the filds</span>";
  $errorEmpty = true;
  return false;
 }
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<span class='result-error'>enter a valid email</span>";
  $errorEmail = true;
  return false;
 } else {
     echo "<span class='result-success'>request send</span>";


     $stmt = $con->exec("INSERT INTO `courses_request` (`id`, `fullname`, `email`, `phone`, `course`, `message`) VALUES (NULL, '$fullname', '$email', '$phone', '$s1', '$message')");
//    header("location:index.php?pages=cisco");


     $msg = "FullName: " . $fullname . "\n" . "Email: " . $email . "\n" . "PhoneNumber :" . $phone . "\n" . "course :" . $s1 . "\n" . "Message :" . $message . "\n";


     mail("register@joransom.com", "New Register", $msg);



}






?>
<script>
    $("#form-name, #form-email, #form-message ,#form-number").removeClass("input-error");
    var errorEmpty = " <?php $errorEmpty; ?>" ;
    var errorEmail = " <?php $errorEmail; ?>" ;
    // Store the value of PHP variables into JavaScript variables


    // If any fields are empty, errorEmpty will return true
    // Add error class on all input fields
    if (errorEmpty=== true) {

        $("#form-name, #form-email, #form-message , #form-number").addClass("input-error");

    }

    // If email address is invalid, errorEmail will return true
    // Add error class on that input field
    if (errorEmail === true) {
        $("#form-email").addClass("input-error");
    }

    // If all fields are filled and email address is valid, remove values from all input fields
    if (errorEmpty == false && errorEmail == false) {
        $("#form-name, #form-email, #form-message").val("");
    }
</script>