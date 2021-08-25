<?php
ob_start();
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ransom</title>
         <link rel="icon" href="PHOTOS/logo.svg" type="image/png">

    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integriy="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="CSS/home.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Benne&family=Big+Shoulders+Stencil+Display:wght@100&display=swap" rel="stylesheet">
  </head>
<body>
    
    <?php

include "conn.php";
include "checkadmin.php";
if(isset($_SESSION['admin'])){
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href="adminpage.php?admin=addadmin">Add Admin</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Add Course
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="adminpage.php?admin=addcisco">ADD cisco courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=addsoftware">ADD software courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=addec">ADD ec courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=addothers">ADD others</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?admin=addpartners">Addpartners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?admin=admines">Admines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?admin=useres">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?admin=courserequest">Course Request</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="adminpage.php?admin=cisco">cisco courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=software">software courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=ec">ec courses</a></li>
                        <li><a class="dropdown-item" href="adminpage.php?admin=others">others</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?admin=partners">Partners</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>




            </ul>
        </div>
    </div>

</nav>

<?php



$do = isset($_GET['admin']) ? $_GET['admin'] : 'dashborad';
if($do=='dashborad'){
        session_regenerate_id();


    echo "<div class='cont'>";
    echo "<div class='members'>";
    echo "<p>total members<i class='fas fa-users'></i></p>";
    $stmt=$con->prepare('SELECT * FROM user where status=0');
    $stmt->execute();
    $row=$stmt->rowCount();
    echo "<span>$row</span>";
    echo "</div>";



    echo "<div class='bookes'>";
    echo "<p>course request <i class='fas fa-book'></i></p>";
    $stmt1=$con->prepare('SELECT * FROM courses_request');
    $stmt1->execute();
   $row1=$stmt1->rowCount();
    echo "<span>$row1</span>";
    echo "</div>";



    echo "<div class='farm'>";
    echo "<p>partners<i class='fas fa-building'></i></p>";
   $stmt2=$con->prepare('SELECT * FROM partners');
   $stmt2->execute();
  $row2=$stmt2->rowCount();
    echo "<span>$row2</span>";
    echo "</div>";
    echo "</div>";

}//end dashbord


//admines
elseif($do=='addadmin'){
        session_regenerate_id();

?>

<form method="POST" action="?admin=insertadmin">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="text" name='username' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php
}//end add admin




//insert new admin
 elseif($do=='insertadmin'){
         session_regenerate_id();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $hashpass=sha1($_POST['password']);
        $email=$_POST['email'];
        $errorform=array();
        if(strlen($username)<4){
            $errorform[]="username cant be less than 4 ";
        }
        if(strlen($username)>20){
            $errorform[]="username cant be more than 20 ";
        }
        if(empty($username)){
            $errorform[]="username cant be empty ";
        }
        if(empty($password)){
            $errorform[]="password cant be empty ";
        }
        if(empty($email)){
            $errorform[]="email cant be empty ";
        }
        foreach ($errorform as $error){
            echo $error."<br>";
        }
        if(empty($errorform)){
        $stmt=$con->exec("INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `status`) VALUES (NULL,'$username','$email','$hashpass',1)");
        echo "<h1 align='center'>welcome new admin</h1>";
        }
    }
 }//end insert admin

elseif ($do=='admines'){
        session_regenerate_id();

$id=isset($_GET['adminid'])&& is_numeric($_GET['adminid'])?intval($_GET['adminid']): 0;
$stmt=$con->prepare('SELECT * FROM user WHERE status=1');
$stmt->execute();
$row=$stmt->fetchAll();
?>
<table class='table'>
    <thead>
    <tr>
        <th scope='col'>Admin_id</th>
        <th scope='col'>Admin Name</th>
        <th scope='col'>Admin Email</th>
    </tr>
    </thead>


    <?php
    foreach ($row as $admin){
        $admin_id=$admin['user_id'];
        $admin_name=$admin['user_name'];
        $admin_email=$admin['email'];
        $id=$admin['user_id'];
        echo "
<tbody>
    <tr>
    <td>$admin_id</td>
    <td>$admin_name</td>
    <td>$admin_email</td>
    <td><a style='color: red' href='adminpage.php?admin=deleteadmin&adminid=$id'><i class='fas fa-trash'></i></a></td>  
    </tr>
  </tbody>
";
    } //end foreach
    echo '</table>';
    }// end if
    elseif ($do=='deleteadmin'){
            session_regenerate_id();

        $id=isset($_GET['adminid'])&& is_numeric($_GET['adminid'])?intval($_GET['adminid']): 0;

        $stmt=$con->exec("DELETE FROM `user` WHERE `user`.`user_id` = '$id'");
        header('location:adminpage.php?admin=admines');
        exit();

    }


    //courses
 elseif($do=='addcisco'){
         session_regenerate_id();

    ?>
<form method="POST" action="?admin=insertcisco" enctype='multipart/form-data'>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Course Name</label>
            <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Course Image</label>
        <input type="file" name="photos" class="form-control" id="exampleInputPassword1">
    </div>

        <button type="submit" class="btn btn-primary">Submit</button>

</form>

    <?php
 }//end add course

//insert courses
 elseif($do=='insertcisco'){
         session_regenerate_id();

     if($_SERVER['REQUEST_METHOD']=='POST'){
         $course_img=$_FILES['photos'];
        $image_name=$_FILES['photos']['name'];
        $image_size=$_FILES['photos']['size'];
        $image_tmp=$_FILES['photos']['tmp_name'];
        $image_type=$_FILES['photos']['type'];

        //list of allowed file typed to upload
        $image_allowedextension=array("png","jpg","jpeg",'svg',"gif");

        //get image extension
        $tmp=explode('.',$image_name);
        $image_extension=strtolower(end($tmp));
     $course_name=$_POST['coursename'];
     $errorform=array();
     if(empty($course_name)){
         $errorform[]='course cant be empty';

     }
     if( ! empty($image_name) && ! in_array($image_extension,$image_allowedextension)){
        $errorform[]='this extension is not <strong>allowed<strong> ';

    }
    if(empty($image_name)){
        $errorform[]="dont forget photo";
    }
      if($image_size>5000000){
          $errorform[]="image is too large";
     }
    
    foreach ($errorform as $error){
        echo $error."<br>";
    }

    if(empty($errorform)){
        $upload_dir = '/home/mohsalem/joransom.com/HTML/upload/course/';
        $course=rand(0,1000000000) . '_' . $image_name;
        move_uploaded_file($image_tmp,"$upload_dir/$course"  );
      $stmt=$con->exec("INSERT INTO `cisco_course` (`id`, `Course_name`,`photos`) VALUES (NULL, '$course_name','$course' )");
      echo "sucsees";
 }
     }
}//end insert course

    elseif($do=='addsoftware'){
            session_regenerate_id();

        ?>
        <form method="POST" action="?admin=insertsoftware" enctype='multipart/form-data'>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Name</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Course Image</label>
                <input type="file" name="photos" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <?php
    }//end add course

    //insert courses
    elseif($do=='insertsoftware'){
            session_regenerate_id();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $course_img=$_FILES['photos'];
            $image_name=$_FILES['photos']['name'];
            $image_size=$_FILES['photos']['size'];
            $image_tmp=$_FILES['photos']['tmp_name'];
            $image_type=$_FILES['photos']['type'];

            //list of allowed file typed to upload
            $image_allowedextension=array("png","jpg","jpeg",'svg',"gif");

            //get image extension
            $tmp=explode('.',$image_name);
            $image_extension=strtolower(end($tmp));
            $course_name=$_POST['coursename'];

            $errorform=array();
            if(empty($course_name)){
                $errorform[]='course cant be empty';

            }
            if( ! empty($image_name) && ! in_array($image_extension,$image_allowedextension)){
                $errorform[]='this extension is not <strong>allowed<strong> ';

            }
            if(empty($image_name)){
                $errorform[]="dont forget photo";
            }

            if($image_size>5000000){
                 $errorform[]="image is too large";
             }

            foreach ($errorform as $error){
                echo $error."<br>";
            }

            if(empty($errorform)){
                $upload_dir = '/home/mohsalem/joransom.com/HTML/upload/course/';
                $course=rand(0,1000000000) . '_' . $image_name;
                move_uploaded_file($image_tmp,"$upload_dir/$course"  );
                $stmt=$con->exec("INSERT INTO `software_course` (`id`, `Course_name`, `photos`) VALUES (NULL, '$course_name',  '$course' )");
                echo "sucsees";
            }
        }
    }//end insert course

    elseif($do=='addec'){
            session_regenerate_id();

        ?>
        <form method="POST" action="?admin=insertec" enctype='multipart/form-data'>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Name</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Course Image</label>
                <input type="file" name="photos" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <?php
    }//end add course

    //insert courses
    elseif($do=='insertec'){
            session_regenerate_id();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $course_img=$_FILES['photos'];
            $image_name=$_FILES['photos']['name'];
            $image_size=$_FILES['photos']['size'];
            $image_tmp=$_FILES['photos']['tmp_name'];
            $image_type=$_FILES['photos']['type'];

            //list of allowed file typed to upload
            $image_allowedextension=array("png","jpg","jpeg",'svg',"gif");

            //get image extension
            $tmp=explode('.',$image_name);
            $image_extension=strtolower(end($tmp));
            $course_name=$_POST['coursename'];

            $errorform=array();
            if(empty($course_name)){
                $errorform[]='course cant be empty';

            }
            if( ! empty($image_name) && ! in_array($image_extension,$image_allowedextension)){
                $errorform[]='this extension is not <strong>allowed<strong> ';

            }
            if(empty($image_name)){
                $errorform[]="dont forget photo";
            }

           if($image_size>5000000){
                 $errorform[]="image is too large";
             }
             
            foreach ($errorform as $error){
                echo $error."<br>";
            }

            if(empty($errorform)){
                $upload_dir = '/home/mohsalem/joransom.com/HTML/upload/course/';
                $course=rand(0,1000000000) . '_' . $image_name;
                move_uploaded_file($image_tmp,"$upload_dir/$course"  );
                $stmt=$con->exec("INSERT INTO `ec_course` (`id`, `Course_name`, `photos`) VALUES (NULL, '$course_name',  '$course' )");
                echo "sucsees";
            }
        }
    }//end insert course
    elseif($do=='addothers'){
            session_regenerate_id();

        ?>
        <form method="POST" action="?admin=insertother" enctype='multipart/form-data'>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Name</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Course Image</label>
                <input type="file" name="photos" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <?php
    }//end add course

    //insert courses
    elseif($do=='insertother'){
            session_regenerate_id();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $course_img=$_FILES['photos'];
            $image_name=$_FILES['photos']['name'];
            $image_size=$_FILES['photos']['size'];
            $image_tmp=$_FILES['photos']['tmp_name'];
            $image_type=$_FILES['photos']['type'];

            //list of allowed file typed to upload
            $image_allowedextension=array("png","jpg","jpeg",'svg',"gif");

            //get image extension
            $tmp=explode('.',$image_name);
            $image_extension=strtolower(end($tmp));
            $course_name=$_POST['coursename'];

            $errorform=array();
            if(empty($course_name)){
                $errorform[]='course cant be empty';

            }
            if( ! empty($image_name) && ! in_array($image_extension,$image_allowedextension)){
                $errorform[]='this extension is not <strong>allowed<strong> ';

            }
            if(empty($image_name)){
                $errorform[]="dont forget photo";
            }

             if($image_size>5000000){
                 $errorform[]="image is too large";
             }

            foreach ($errorform as $error){
                echo $error."<br>";
            }

            if(empty($errorform)){
                $upload_dir = '/home/mohsalem/joransom.com/HTML/upload/course/';
                $course=rand(0,1000000000) . '_' . $image_name;
                move_uploaded_file($image_tmp,"$upload_dir/$course"  );
                $stmt=$con->exec("INSERT INTO `others` (`id`, `Course_name`, `photos`) VALUES (NULL, '$course_name',  '$course' )");
                echo "sucsees";
            }
        }
    }//end insert course




    elseif ($do=='cisco'){
            session_regenerate_id();

     $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

     $stmt=$con->prepare('SELECT * FROM cisco_course');
    $stmt->execute();
    $row=$stmt->fetchAll();
    echo "<table class='table'>
<thead>
    <tr>
    <th scope='col'>course_id</th>
    <th scope='col'>course name</th>
  
    </tr>
  </thead>";
    foreach ($row as $courses){
        $course=$courses['Course_name'];
        $course_id=$courses['id'];

        $id=$courses['id'];
        echo
        "
  <tbody>
    <tr>
    <td>$course_id</td>
    <td>$course</td>
    <td><a style='color: red' href='adminpage.php?admin=editcisco&courseid=$id'><i class='fas fa-edit'></i></a></a></td>
    <td><a style='color: red' href='adminpage.php?admin=deletecisco&courseid=$id''><i class='fas fa-trash'></i></a></td>
    </tr>
  </tbody>
";

    }
echo "</table>";
 }

    elseif ($do=='ec'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare('SELECT * FROM ec_course');
        $stmt->execute();
        $row=$stmt->fetchAll();
        echo "<table class='table'>
<thead>
    <tr>
    <th scope='col'>course_id</th>
    <th scope='col'>course name</th>

    </tr>
  </thead>";
        foreach ($row as $courses){
            $course=$courses['Course_name'];
            $course_id=$courses['id'];

            $id=$courses['id'];
            echo
            "
  <tbody>
    <tr>
    <td>$course_id</td>
    <td>$course</td>
    <td><a style='color: red' href='adminpage.php?admin=editec&courseid=$id'><i class='fas fa-edit'></i></a></a></td>
    <td><a style='color: red' href='adminpage.php?admin=deleteec&courseid=$id''><i class='fas fa-trash'></i></a></td>
    </tr>
  </tbody>
";

        }
        echo "</table>";
    }


    elseif ($do=='software'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare('SELECT * FROM software_course');
        $stmt->execute();
        $row=$stmt->fetchAll();
        echo "<table class='table'>
<thead>
    <tr>
    <th scope='col'>course_id</th>
    <th scope='col'>course name</th>
    
    </tr>
  </thead>";
        foreach ($row as $courses){
            $course=$courses['Course_name'];
            $course_id=$courses['id'];

            $id=$courses['id'];
            echo
            "
  <tbody>
    <tr>
    <td>$course_id</td>
    <td>$course</td>
    <td><a style='color: red' href='adminpage.php?admin=editsoftware&courseid=$id'><i class='fas fa-edit'></i></a></a></td>
    <td><a style='color: red' href='adminpage.php?admin=deletesoftware&courseid=$id''><i class='fas fa-trash'></i></a></td>
    </tr>
  </tbody>
";

        }
        echo "</table>";
    }

    elseif ($do=='others'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare('SELECT * FROM others');
        $stmt->execute();
        $row=$stmt->fetchAll();
        echo "<table class='table'>
<thead>
    <tr>
    <th scope='col'>course_id</th>
    <th scope='col'>course name</th>
    
    </tr>
  </thead>";
        foreach ($row as $courses){
            $course=$courses['Course_name'];
            $course_id=$courses['id'];

            $id=$courses['id'];
            echo
            "
  <tbody>
    <tr>
    <td>$course_id</td>
    <td>$course</td>
    <td><a style='color: red' href='adminpage.php?admin=editother&courseid=$id'><i class='fas fa-edit'></i></a></a></td>
    <td><a style='color: red' href='adminpage.php?admin=deleteother&courseid=$id''><i class='fas fa-trash'></i></a></td>
    </tr>
  </tbody>
";

        }
        echo "</table>";
    }




     elseif ($do=='editcisco'){
             session_regenerate_id();

         $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

         $stmt=$con->prepare("SELECT * FROM cisco_course WHERE id =?");
         $stmt->execute(array($id));
         $row=$stmt->fetchAll();

         ?>


         <?php
         foreach ($row as $editcourse){
             $editname=$editcourse['Course_name'];

             $id=$editcourse['id'];

         }
         echo  "<form action='adminpage.php?admin=updatecisco&courseid=$id' method='POST'>";
//
         echo "
         <div class='form-floating'>
  <textarea class='form-control' name='editcourse'  id='floatingTextarea'>$editname</textarea>
  <label for='floatingTextarea'>Course name</label>
</div>

 
  <label for='floatingTextarea'>S</label>
</div>
         
         ";
//         echo    "<textarea name='edits'>$edits</textarea><br> ";
         echo '<button  style="width: 120px" type="submit" class="btn btn-danger">Edit</button>';

         echo '</form>';

     }


    elseif ($do=='editsoftware'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare("SELECT * FROM software_course WHERE id =?");
        $stmt->execute(array($id));
        $row=$stmt->fetchAll();

        ?>


        <?php
        foreach ($row as $editcourse){
            $editname=$editcourse['Course_name'];

            $id=$editcourse['id'];

        }
        echo  "<form action='adminpage.php?admin=updatesoftware&courseid=$id' method='POST'>";
//
        echo "
         <div class='form-floating'>
  <textarea class='form-control' name='editcourse'  id='floatingTextarea'>$editname</textarea>
  <label for='floatingTextarea'>Course name</label>
</div>


  
         
         ";
//         echo    "<textarea name='edits'>$edits</textarea><br> ";
        echo '<button  style="width: 120px" type="submit" class="btn btn-danger">Edit</button>';

        echo '</form>';

    }


    elseif ($do=='editec'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare("SELECT * FROM ec_course WHERE id =?");
        $stmt->execute(array($id));
        $row=$stmt->fetchAll();

        ?>


        <?php
        foreach ($row as $editcourse){
            $editname=$editcourse['Course_name'];

            $id=$editcourse['id'];

        }
        echo  "<form action='adminpage.php?admin=updateec&courseid=$id' method='POST'>";
//
        echo "
         <div class='form-floating'>
  <textarea class='form-control' name='editcourse'  id='floatingTextarea'>$editname</textarea>
  <label for='floatingTextarea'>Course name</label>
</div>


  
         
         ";
//         echo    "<textarea name='edits'>$edits</textarea><br> ";
        echo '<button  style="width: 120px" type="submit" class="btn btn-danger">Edit</button>';

        echo '</form>';

    }

    elseif ($do=='editother'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;

        $stmt=$con->prepare("SELECT * FROM others WHERE id =?");
        $stmt->execute(array($id));
        $row=$stmt->fetchAll();

        ?>


        <?php
        foreach ($row as $editcourse){
            $editname=$editcourse['Course_name'];

            $id=$editcourse['id'];

        }
        echo  "<form action='adminpage.php?admin=updateother&courseid=$id' method='POST'>";
//
        echo "
         <div class='form-floating'>
  <textarea class='form-control' name='editcourse'  id='floatingTextarea'>$editname</textarea>
  <label for='floatingTextarea'>Course name</label>
</div>


 
         
         ";
//         echo    "<textarea name='edits'>$edits</textarea><br> ";
        echo '<button  style="width: 120px" type="submit" class="btn btn-danger">Edit</button>';

        echo '</form>';

    }



     elseif ($do=='updatecisco'){
             session_regenerate_id();

         $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
         if($_SERVER['REQUEST_METHOD']=='POST')
             $newcoursename=$_POST['editcourse'];


         $stmt=$con->exec("UPDATE cisco_course SET Course_name='$newcoursename' where id='$id'");
         echo "sucseese";

     }
    elseif ($do=='updatesoftware'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
        if($_SERVER['REQUEST_METHOD']=='POST')
            $newcoursename=$_POST['editcourse'];

        $stmt=$con->exec("UPDATE software_course SET Course_name='$newcoursename' where id='$id'");
        echo "sucseese";

    }
    elseif ($do=='updateother'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
        if($_SERVER['REQUEST_METHOD']=='POST')
            $newcoursename=$_POST['editcourse'];

        $stmt=$con->exec("UPDATE others SET Course_name='$newcoursename' where id='$id'");
        echo "sucseese";

    }
    elseif ($do=='updateec'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
        if($_SERVER['REQUEST_METHOD']=='POST')
            $newcoursename=$_POST['editcourse'];

        $stmt=$con->exec("UPDATE ec_course SET Course_name='$newcoursename' where id='$id'");
        echo "sucseese";

    }

     elseif ($do=='deletecisco'){
        session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
        $stmt1=$con->prepare("SELECT photos FROM cisco_course where `id`='$id'" );
        $stmt1->execute();
        $row=$stmt1->fetchAll();

        foreach ($row as $file){
            $filename=$file['photos'];

            unlink( "/home/mohsalem/joransom.com/HTML/upload/course/".$filename);

        }

        $stmt=$con->exec("DELETE FROM `cisco_course` WHERE `id` = '$id'");
       header('location:adminpage.php?admin=cisco');
        exit();

    }
     
     
    elseif ($do=='deleteec'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
         $stmt1=$con->prepare("SELECT photos FROM ec_course where `id`='$id'" );
        $stmt1->execute();
        $row=$stmt1->fetchAll();

        foreach ($row as $file){
            $filename=$file['photos'];

            unlink( "/home/mohsalem/joransom.com/HTML/upload/course/".$filename);

        }
        $stmt=$con->exec("DELETE FROM `ec_course` WHERE `id` = '$id'");
        header('location:adminpage.php?admin=ec');
        exit();

    }
    elseif ($do=='deletesoftware'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
         $stmt1=$con->prepare("SELECT photos FROM software_course where `id`='$id'" );
        $stmt1->execute();
        $row=$stmt1->fetchAll();

        foreach ($row as $file){
            $filename=$file['photos'];

            unlink( "/home/mohsalem/joransom.com/HTML/upload/course/".$filename);

        }
        $stmt=$con->exec("DELETE FROM `software_course` WHERE `id` = '$id'");
        header("Refresh:0; url=adminpage.php?admin=software");
        exit();

    }
    elseif ($do=='deleteother'){
            session_regenerate_id();

        $id=isset($_GET['courseid'])&& is_numeric($_GET['courseid'])?intval($_GET['courseid']): 0;
         $stmt1=$con->prepare("SELECT photos FROM others_course where `id`='$id'" );
        $stmt1->execute();
        $row=$stmt1->fetchAll();

        foreach ($row as $file){
            $filename=$file['photos'];

            unlink( "/home/mohsalem/joransom.com/HTML/upload/course/".$filename);

        }
        $stmt=$con->exec("DELETE FROM `others` WHERE `id` = '$id'");
        header('location:adminpage.php?admin=others');
        exit();

    }

    //partners
    elseif($do=='addpartners'){
            session_regenerate_id();

    ?>

    <form method="POST" action="?admin=insertpartners" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Partners Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            <input type="text" name="url" class="form-control" id="exampleInputPassword1">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>




        <?php
        }//end add partners


        elseif($do=='insertpartners'){
                session_regenerate_id();

            $errorform=array();
            $url=$_POST['url'];
            $imgname=$_FILES['image']['name'];
            $imgsize=$_FILES['image']['size'];
            $imgtmp=$_FILES['image']['tmp_name'];
            $imgtype=$_FILES['image']['type'];
            $imgeallowedextension=array("png","jpg","jpeg","svg","gif");
            $tmp=explode('.',$imgname);
            $image_extension=strtolower(end($tmp));


            if( ! empty($imgname) && ! in_array($image_extension,$imgeallowedextension)){
                $errorform[]='this extension is not <strong>allowed<strong> ';

            }
            if(empty($imgname)){
                $errorform[]="dont forget photo";
            }
            foreach ($errorform as $error){
                echo $error."<br>";
            }
            if(empty($errorform)) {
                $uploadpartners = '/home/mohsalem/joransom.com/HTML/upload/partners/';
                $partnersname = rand(0, 100000) . "_" . $imgname;
                move_uploaded_file($imgtmp, "$uploadpartners/$partnersname");
                $stmt = $con->exec("INSERT INTO `partners` (`id`,image,url) VALUES (NULL, '$partnersname','$url')");
                echo "sucsses";
            }
        }//end insert partners


    elseif ($do=='partners'){
            session_regenerate_id();

    $id=isset($_GET['partnersid'])&& is_numeric($_GET['partnersid'])?intval($_GET['partnersid']): 0;

    $stmt=$con->prepare('SELECT * FROM partners');
    $stmt->execute();
    $row=$stmt->fetchAll();

    ?>
        <table class='table'>
            <thead>
            <tr>
                <th scope='col'>Partners ID</th>
                <th scope='col'>Partners Image</th>

            </tr>
            </thead>

            <?php
    foreach ($row as $partners){
        $partnersid=$partners['id'];
        $id=$partners['id'];
        $partnersimage=$partners['image'];
       echo "
<tbody>
    <tr>
    <td>$partnersid</td>
    <td><img width='200px' src='HTML/upload/partners/$partnersimage'></td>
    
    <td><a style='color: red' href='adminpage.php?admin=deletepartners&partnersid=$id'><i class='fas fa-trash'></i></a></td>  
    </tr>
  </tbody>
";
    }
    echo '</table>';
    }
elseif($do=="deletepartners"){
        session_regenerate_id();

    $id=isset($_GET['partnersid'])&& is_numeric($_GET['partnersid'])?intval($_GET['partnersid']): 0;
        $stmt1=$con->prepare("SELECT image FROM partners where `id`='$id'" );
        $stmt1->execute();
        $row=$stmt1->fetchAll();

        foreach ($row as $file){
            $filename=$file['image'];

            unlink( "/home/mohsalem/joransom.com/HTML/upload/partners/".$filename);

        }
    $stmt=$con->exec("DELETE FROM `partners` WHERE `partners`.`id` = '$id'");
    header('location:adminpage.php?admin=partners');
    exit();
}

elseif ($do=='useres'){
        session_regenerate_id();

    $stmt=$con->prepare('SELECT * FROM user WHERE status=0');
$stmt->execute();
$row=$stmt->fetchAll();
?>
<table class='table'>
    <thead>
    <tr>
        <th scope='col'>User ID</th>
        <th scope='col'>User Name</th>
        <th scope='col'>User Email</th>
        <th scope='col'>Phone Number</th>
    </tr>
    </thead>


    <?php
    foreach ($row as $admin){
        $admin_id=$admin['user_id'];
        $admin_name=$admin['user_name'];
        $admin_email=$admin['email'];
        $phone=$admin['phone_number'];
        $id=$admin['user_id'];
        echo "
<tbody>
    <tr>
    <td>$admin_id</td>
    <td>$admin_name</td>
    <td>$admin_email</td>
     <td>$phone</td>
    </tr>
  </tbody>
";
    } //end foreach
    echo '</table>';
    }// end if

elseif ($do=='courserequest'){
        session_regenerate_id();

      $stmt=$con->prepare('SELECT * FROM courses_request ');
$stmt->execute();
$row=$stmt->fetchAll();
?>
<table class='table'>
    <thead>
    <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Full Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>Phone Number</th>
        <th scope='col'>course</th>
        <th scope='col'>message</th>
    </tr>
    </thead>


    <?php
    foreach ($row as $admin){
        $id=$admin['id'];
        $fullname=$admin['fullname'];
        $email=$admin['email'];
        $phone=$admin['phone'];
        $course=$admin['course'];
        $message=$admin['message'];
        echo "
<tbody>
    <tr>
    <td>$id</td>
    <td>$fullname</td>
    <td>$email</td>
     <td>$phone</td>
     <td>$course</td>
     <td>$message</td>

    </tr>
  </tbody>
";
    } //end foreach
    echo '</table>';
    }// end if




?>
            <script src="bootstrap-5.0.1-dist/js/bootstrap.js"></script>

</body>

<?php
 }
 else{
     echo '<h1 align="center">404 NOT FOUND</h1>';

 }
ob_end_flush();
