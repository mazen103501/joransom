<?php

include "conn.php";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $universitymajor = $_POST['universitymajor'];
    $gpa = $_POST['gpa'];
    $governorate = $_POST['governorate'];
    $date = $_POST['date'];
    $CV = $_POST['CV'];
    $about_us = $_POST['about_us'];
//$course_img=$_FILES['CV'];
//$image_name=$_FILES['CV']['name'];
//$image_size=$_FILES['CV']['size'];
//$image_tmp=$_FILES['CV']['tmp_name'];
//$image_type=$_FILES['CV']['type'];
//
//
    $errorEmpty = false;
    $errorEmail = false;
//$image_allowedextension=array("pdf");
//
//$allow=array('pdf');
//$tmp=explode('.',$image_name);
//$image_extension=strtolower(end($tmp));
//
//$upload_file=$_FILES['CV']['name'];
//move_uploaded_file($_FILES['CV']['tmp_name'],'C:\xampp\htdocs\joransom\HTML\upload\cv'.$_FILES['CV']['name']);


    if (empty($name) || empty($email) || empty($phonenumber) ||
        empty($universitymajor) || empty($gpa) || empty($governorate) ||
        empty($date)) {
        echo "<h1 style='color: red'>fill all the filds</h1>";
        $errorEmpty = true;
        return false;
    }
    if(strlen($phonenumber)<10){

        echo "<h1 style='color: red'>Enter a Valid Number</h1>";
        $errorEmpty=true;
        return false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1 style='color: green'>enter a valid email</h1>";
        $errorEmail = true;
        return false;
    } else {
//        $upload_dir = 'C:\xampp\htdocs\joransom\HTML\upload\cv';
//        $cv=rand(0,1000000000) . '_' . $image_name;
//        move_uploaded_file($image_tmp,"$upload_dir/$cv"  );


        $con->exec("INSERT INTO `jobrequest` (`id`, `name`, `email`, `phone`, `major`,`gpa`,`governorate`,`date`,`CV`,`about_us`) VALUES (NULL, '$name', '$email', '$phonenumber', '$universitymajor', '$gpa','$governorate','$date','$CV','$about_us')");
        echo "<h1 style='color: green;text-align: center'>تم استقبال طلبك بنجاح </h1>";

    }


?>

<script>
$("#job-name, #job-email, #job-number ,#job-major,#job-gpa,#job-governorate,#job-date,#job-cv,#job-aboutus").removeClass("input-error");
var errorEmpty = " <?php $errorEmpty; ?>" ;
var errorEmail = " <?php $errorEmail; ?>" ;
// Store the value of PHP variables into JavaScript variables


// If any fields are empty, errorEmpty will return true
// Add error class on all input fields
if (errorEmpty=== true) {

    $("#job-name, #job-email, #job-number ,#job-major,#job-gpa,#job-governorate,#job-date,#job-cv,#job-aboutus").addClass("input-error");

}

// If email address is invalid, errorEmail will return true
// Add error class on that input field
if (errorEmail === true) {
    $("#job-email").addClass("input-error");
}

// If all fields are filled and email address is valid, remove values from all input fields
if (errorEmpty == false && errorEmail == false) {
    $("#job-name, #job-email, #job-number ,#job-major,#job-gpa,#job-governorate,#job-date,#job-cv,#job-aboutus").val("");
}
</script>