<?php



ob_start();
 session_start();


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
    <link rel="stylesheet" href="CSS/login.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Big+Shoulders+Stencil+Display:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <!-- Logo -->
    <div class="logo">
      <img src="PHOTOS/mazenkhalid.svg">
    </div>
    <!-- List -->
    <div class="container-fluid">
      <button class="navbar-toggler hidden-xl-up" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">

            <a class="nav-link" href="index.php">Home</a>
          </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Training
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php?pages=cisco">Cisco course</a></li>
                    <li><a class="dropdown-item" href="index.php?pages=software">Software course</a></li>
                    <li><a class="dropdown-item" href="index.php?pages=ec">EC_council course</a></li>
                    <li><a class="dropdown-item" href="index.php?pages=others">others</a></li>
                </ul>
            </li>


          <li class="nav-item">
            <a class="nav-link"  href="index.php#whoarewe">About</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="index.php?pages=solutions">Solutions</a></li>
              <li><a class="dropdown-item" href="index.php?pages=consulting">Consulting</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#thefooter">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="homear.php">Ar</a>
          </li>
            <?php
            if(!isset($_SESSION['admin'] ) && !isset($_SESSION['username'])){
            ?>
          <li class="nav-item login">
            <a class="nav-link" href="login.php">Login</a>
          </li>
            <?php
            }
            ?>

            <?php
            if(isset($_SESSION['admin'])){
                ?>
                <li class="nav-item login">
                    <a class="nav-link" href="adminpage.php">adminpage</a>
                </li>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['username'])){
                ?>
                <li class="nav-item login">
                    <a class="nav-link" href="#"> <?php echo $_SESSION['username'] ?> </a>
                </li>
            <?php
            }
            ?>
            <?php
            if(isset($_SESSION['admin']) || isset($_SESSION['username'])){


            ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">log out</a>
                </li>
            <?php
            }
            ?>


        </ul>
      </div>
    </div>

  </nav>


<div class="forms">
    <form method="POST" id="login-form" >
            <h3>Login</h3>
            <div>
                <!-- <label for="exampleInputEmail1">user name</label> -->
                <i class="fas fa-user-alt"></i>
                <input id="name" type="text" name="username" placeholder="Username" >
            </div>
            <div >
                <!-- <label for="exampleInputPassword1" >Password</label> -->
                <i class="fas fa-key"></i>
                <input id="password" type="password" name="password" placeholder="Password" >
            </div>
            <button id="submit" type="submit" name="login" class="btn btn-primary">Submit</button>
        <p class="form-result"></p>
    </form>



    <form method="POST" action="adduser.php">
        <h3>Register</h3>
        <div>
            <!-- <label for="exampleInputEmail1" class="form-label">user name</label> -->
            <i class="fas fa-user-alt"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
            <div >
                <!-- <label for="exampleInputEmail1" class="form-label">Email</label> -->
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div >
                <!-- <label for="exampleInputEmail1" class="form-label">Phone numper</label> -->
                <i class="fas fa-phone-volume"></i>
                <input type="number" name="phone" placeholder="Phone Number" required>
            </div>
        <div>
            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
            <i class="fas fa-key"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="Register" class="btn btn-primary">Submit</button>
    </form>
</div>









<!--<form method="POST">-->
<!--    <input type="text" name="username">-->
<!--    <input type="password" name="password">-->
<!--    <input type="submit">-->
<!--</form>-->


<footer id="thefooter">
    <div>
        <img src="PHOTOS/logo.svg" alt="logo">
    </div>
    <div>
        <h3>Contact Us</h3>

        <p><a href="https://maps.app.goo.gl/PRXcpVLVFkGmUBTCA" target="_blank"rel="noreferrer">Jordan,Irbid</a></p>
        <p>0096227277760</p>
        <p><a href="https://wa.link/7y545l" target="_balnk">00962776277760</a></p>
        <p><a href="mailto:info@joransom.com">info@joransom.com</a></p>
    </div>
    <div>
        <h3>Links</h3>
        <p><a href="index.php">Home</a></p>
        <p><a href="index.php?pages=cisco">Training</a></p>
        <p><a href="index.php?pages=solutions">Services</a></p>
    </div>
    <div>
        <h3>Our Social Media</h3>
        <div>
            <a href="https://www.facebook.com/Ransom-Company-For-Cyber-Security-743467149734362" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>


    </div>

</footer>
<?php
ob_end_flush();


?>
<script src="bootstrap-5.0.1-dist/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
    $(document).ready(function() {
        $("#login-form").submit(function(event) {
            event.preventDefault();

            var username = $("#name").val();
            var password = $("#password").val();
            var submit = $("#submit").val();


            $(".form-result").load("checkuser.php", {
                username: username,
                password:password,
                submit: submit
            });
        });
    });



</script>
</body>
