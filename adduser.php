<?php
ob_start();
include "conn.php";
session_start();

function check($select,$from,$value){
    global $con;
    $statement=$con->prepare("SELECT $select FROM $from WHERE $select=?  ");
    $statement->execute(array($value));
    $count=$statement->rowcount();
    return $count;
}

$name = $_POST['username'];
$pass = $_POST['password'];
$mail = $_POST['email'];
$phone=$_POST['phone'];
$hashpass=sha1($_POST['password']);
$errorEmpty=false;
if(strlen($name)>16){
    $errorEmpty=true;
    echo "<p class='result-error'>Username cant be mor than 16 character</p>";
    return false;
}
if (empty($name)||empty($pass)||empty($mail)||empty($phone)){
    $errorEmpty=true;
    echo "<p class='result-error'>fill the field</p>";
    return false;
}
$check=check('user_name','user',$name,$mail);
     if($check==1){
         echo "<span class='result-error'>user name or password is already exit</span>";
            return false;
        }
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
    $errorEmpty=true;

    echo "<span class='result-error'>password not strong</span>";
    // tell the user something went wrong
    return false;
}
     else{
        $con->exec( "INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `status`, `phone_number`) VALUES (NULL, '$name', '$hashpass', '$mail', '0', '$phone')");
        echo '<p class="result-success">succsec</p>';
         $_SESSION['username'] = $name;



//        $msg="Dear Mr/Ms ".$name." Thank You For Your Registration We Will Contact You Soon  ";
//
//
//         mail("$mail","New Register",$msg);
        

}
ob_end_flush();
?>
<script>
    $("#username,#passwordregister,#email,#phonenumber").removeClass("input-error");

var errorEmpty = " <?php $errorEmpty; ?>" ;

// Store the value of PHP variables into JavaScript variables


// If any fields are empty, errorEmpty will return true
// Add error class on all input fields
if (errorEmpty=== true) {

$("#username,#passwordregister,#email,#phonenumber").addClass("input-error");

}

// If email address is invalid, errorEmail will return true
// Add error class on that input field


// If all fields are filled and email address is valid, remove values from all input fields
if (errorEmpty== false) {
$("#form-name, #password ").val("");
alert("sucsses");
    window.setTimeout(function() {
        window.location.href = "https://localhost/joransom/index.php";
    });




}
</script>

