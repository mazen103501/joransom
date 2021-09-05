<?php
ob_start();
session_start();
include "conn.php";


$do = isset($_GET['pages']) ? $_GET['pages'] : 'dashborad';
?>

<?php
if(isset($do) && $do!='ar'){
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-204909128-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-204909128-1');
</script>
    
    
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ransom Company For Cyber Security">

    <title>Ransom</title>
    <link rel="icon" href="PHOTOS/logo.svg" type="image/png">


    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integriy="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/owl.theme.default.css">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<!--    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Big+Shoulders+Stencil+Display:wght@100&display=swap" rel="stylesheet">-->

<!--    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <!-- Logo -->
    <div class="logo">
        <img src="PHOTOS/whitelogo.svg" alt="logo">
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
                    <a class="nav-link" href="index.php?pages=trainingpage">
                        Training
                    </a>





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
                    <a class="nav-link"  href="index.php?pages=about">About</a>
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


<?php
}
if($do=='dashborad'){
    ?>

<section class="intro-section">
    <div class="spot-background"></div>
    <div class="intro-containter">
            <div class="intro-text">
                <h4>We Are Ransom</h4>
                <h1><span>CyberSecurity</span><br> Service</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam odit enim natus porro suscipit facere.</p>
            </div>
            <div class="section-img">
                <img src="PHOTOS/intro-image.png">
            </div>
    </div>
</section>




<section class="about-us">
    <div class="thecont">
        <div class="about-box">
            <div class="box selected-box">
                <h5>Who Are We</h5>
            </div>
            <div class="box">
                <h5>Objectives</h5>
            </div>
            <div class="box">
                <h5>Our Mession & Vision</h5>
            </div>
        </div>
        <div class="text-box">
            <p class="show-text">- Ransom Company for Cyber security is a local company specialized in cyber security, headquartered in northern Jordan in Irbid Governorate The Hashemite Kingdom of Jordan

                Founded in 2021, the company is today startup companies in the field of cyber security that provide a comprehensive range of learning methods and training in specialized curricula in cyber security (information security, networks, applications, databases and social engineering) in addition to providing solutions and software that contribute to solving problems Cyber intrusions and threats and regulates consulting and IT security services

                We help organizations plan, build, and operate successful information security programs, solve security problems, and implement specific IT security projects

                Each member of our team has a unique set of skills and experience in the fields of training, software solutions and consulting, as well as business development and information and communication technology. Our team also has a wide and deep understanding of the Middle East and the world and its urgent need for training based on the curricula provided by international companies and to be a specialized center for exams and also to attract programmers who are able to find software solutions related to cyber security

            </p>
            <p>

                - Training, qualifying and building the capacities of young people in basic knowledge related to networks and information security by adopting the curricula offered by international companies specialized in networks and information security

            </p>
            <p >
            - To be the first choice in training, build the capabilities of young people, provide consulting, and develop software solutions to institutions/companies, and Secure Cyberspace.
            </p>
        </div>
    </div>

</section>





    <div class="container1">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="PHOTOS/presentation.svg" alt="image"/>
                    <h3>Trainig</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>CISCO Academy , Ec_Council Masterclass, Cyber Security Training Courses.</p>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="PHOTOS/consultation.svg" alt="image"/>
                    <h3>Consulting</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Penetration Testing, Antivirus, AND Intrusion Detection System</p>

                </div>
            </div>
        </div>



        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="PHOTOS/idea.svg" alt="image"/>
                    <h3>Solutions</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Penetration Testing, Antivirus, AND Intrusion Detection System</p>

                </div>
            </div>
        </div>

    </div>



<section class="about-numbers">
    <div class="thecont">
        <div class="space">
            <div class="headerandboxes">
                <div class="heading"><h1>Some <span>Numbers</span></h1></div>
                <div class="boxescont">
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/team.svg" alt="team">
                        <p class="number"><span>15</span>+</p>
                        <p class="text-box">Team Member's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/deal.svg" alt="Partner">
                        <p class="number"><span>6</span>+</p>
                        <p class="text-box">Partner's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/book.svg" alt="Course">
                        <p class="number"><span>49</span>+</p>
                        <p class="text-box">Course's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/reading.svg" alt="Student">
                        <p class="number"><span>254</span>+</p>
                        <p class="text-box">Student's</p>
                    </div>
                </div>
            </div>
            <div class="number-img">
                <img src="PHOTOS/about-number-phone.png" alt="secure phone">
            </div>
        </div>
    </div>
</section>




<!-- events or announcement -->

<section class="events">
        <div class="owl-carousel owl-3 owl-theme">
    <div class="evet-cont">
        <div class="event-image">
            <img src="PHOTOS/thr.jpg" alt="Course">
        </div>
        <div class="event-text">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique iure deleniti doloremque laborum et velit numquam inventore. Fuga, dolore laudantium asperiores, placeat eum natus minima voluptate consequuntur voluptatum voluptates libero? Est earum velit consectetur mollitia, harum optio dignissimos tempora eveniet reiciendis nam numquam, voluptate accusamus cum natus illum iste nulla.</p>
        </div>
    </div>




            <div class="evet-cont">
                <div class="event-image">
                    <img src="PHOTOS/thr.jpg" alt="Course">
                </div>
                <div class="event-text">
                    <p> khalid</p>
                </div>
            </div>


    </div>
    </section>






<!-- courses in home -->

<div class="spot-courses">
    <div class="courses">
        <?php
        $stmt1=$con->prepare('SELECT * FROM `ec_course` LIMIT 4');
        $stmt1->execute();
        $row1=$stmt1->fetchAll();
        foreach($row1 as $course) {
            $photos = $course['photos'];
            echo "<a href='index.php?pages=ec'><div>";
            echo "<img src='HTML/upload/course/$photos' alt='image' />";
            echo "<div class='course-name'><h5>".$course['Course_name']."</h5></div>";
            echo "</div></a>";


        }
        echo "</div></div>";


        ?>
        <div class="thepartners">
            <h2>Partners</h2>
            
            <?php


            // print partners
            $stmt=$con->prepare('SELECT * FROM partners');
            $stmt->execute();
            $row=$stmt->fetchAll();
            echo '<div class="owl-1 owl-carousel owl-theme">';


            foreach($row as $company){
                $url=$company['url'];
                $img=$company['image'];

                echo "<div class='item partnersslider'><a href='$url' target='_blank' ><img src='HTML/upload/partners/$img' alt='image'/></a></div>";



            }
            echo "</div>";

            ?>

        </div>
    </div>




    <?php





}
//our soultions
elseif($do=='solutions'){
    ?>
    <div class="solutionimg">
        <div class="thecover"></div>
        <h1>Solutions & Services</h1>
    </div>



    <h3 style="text-align: center ; margin-top: 20px ; margin-bottom: 20px">Our Solutions </h3>
    <!--first card-->
    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/icon2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Penetration Testing</h5>


                    </div>
                </div>
            </div>





            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Antivirus</h5>

                    </div>
                </div>
            </div>





            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/Control-safety-en-security-systems.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Intrusion Detection System</h5>
                    </div>
                </div>
            </div>


            <h2 style="text-align: center ; margin-top: 20px ; margin-bottom: 20px">In Cooperation with KAIZEN365</h2>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/shutterstock-33654265.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Network Administration Service</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Supervising the performance of the network in actual working conditions (Operation)</li>
                            <li class="list-group-item">2. Take immediate actions to control the network when needed(Configuration)</li>
                            <li class="list-group-item">3. Maximum network capacity utilization (Effectiveness)</li>
                            <li class="list-group-item">4. Planning for future events (Development)</li>
                            <li class="list-group-item">5. Risk Managment</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/unnamed (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Professional Network Solution service</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Backup Solutions</li>
                            <li class="list-group-item">2. Security Solutions</li>
                            <li class="list-group-item">3. Infrastructure Solutions</li>
                            <li class="list-group-item">4. Data Leak Solutions (DLP Solutinos)</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/download.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Service</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Cloud Backup Solutions </li>
                            <li class="list-group-item">2. Cloud Services Solutions</li>

                        </ul>

                    </div>
                </div>
            </div>

            <h2 style="text-align: center ; margin-top: 20px; margin-bottom: 20px">In Cooperation with Green Circle</h2>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/greenapple.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Apple</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Network Vulnerability Scan & PEN Test once Per Quarter</li>
                            <li class="list-group-item">2. 24X7 Monitoring</li>
                            <li class="list-group-item">3. Managed SIEM</li>
                            <li class="list-group-item">4. IDS (Host Based for All Servers)</li>
                            <li class="list-group-item">5. Hardening Security Devices</li>
                            <li class="list-group-item">6. Review Policies and procedures</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/download (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Grape</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Network Vulnerability Scan & PEN Test once Per Quarter</li>
                            <li class="list-group-item">2. 24X7 Monitoring</li>
                            <li class="list-group-item">3. Managed Security Devices</li>
                            <li class="list-group-item">4. Managed SIEM</li>
                            <li class="list-group-item">5. IDS & FIM (Host Based for All Servers)</li>
                            <li class="list-group-item">6. Hardening Security Devices</li>
                            <li class="list-group-item">7. Review Policies and procedures</li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/kiwi-1624156-1375298.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Green Kiwi</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Network Vulnerability Scan & PEN Test once Per Quarter</li>
                            <li class="list-group-item">2. 24X7 Monitoring</li>
                            <li class="list-group-item">3. Managed Security Devices</li>
                            <li class="list-group-item">4. Managed SIEM</li>
                            <li class="list-group-item">5. IDS & FIM (Host Based for All Servers)</li>
                            <li class="list-group-item">6. Hardening Security Devices</li>
                            <li class="list-group-item">7. Review Policies and procedures </li>
                            <li class="list-group-item">8. AntiX </li>
                            <li class="list-group-item">9. Threat Management</li>
                            <li class="list-group-item">10. Social Media Tools</li>
                            <li class="list-group-item">11. Brand/Name Protection</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/Cyber_Security_14-256.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cyber Testing</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Penetration Testing (Web , Network , Apps , and Code security review).</li>
                            <li class="list-group-item">2. Vulnerability Management</li>
                            <li class="list-group-item">3. RED Team</li>

                        </ul>

                    </div>
                </div>
            </div>




            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/cybersecurity.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cyber Consulting</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Risk Assessment</li>
                            <li class="list-group-item">2. SOC Architecture</li>
                            <li class="list-group-item">3. Threat Modeling</li>
                            <li class="list-group-item">4. Security Maturity Model and Risk scoring</li>

                        </ul>
                    </div>
                </div>
            </div>




            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/ic_securityservices-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cyber Compliance Services</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. GRC Architecture</li>
                            <li class="list-group-item">2. ISO 27001 – 27701</li>
                            <li class="list-group-item">3. General Data Protection Regulations - GDPR</li>
                            <li class="list-group-item">4. PCI-DSS, PCI-PA</li>
                            <li class="list-group-item">5. NIST</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/managed.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Managed Cyber Security Solutions </h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Unified Threat Management - UTM</li>
                            <li class="list-group-item">2. Web application firewall - WAF</li>
                            <li class="list-group-item">3. Database Access Monitoring - DAM</li>
                            <li class="list-group-item">4. Email Security</li>
                            <li class="list-group-item">5. Data Encryption Solution</li>
                            <li class="list-group-item">6. Identity Management - IDM</li>
                            <li class="list-group-item">7. Privileges Access Management - PAM</li>
                            <li class="list-group-item">8. EDR – EPP</li>
                            <li class="list-group-item">9. APT</li>
                            <li class="list-group-item">10. Dynamic Deception</li>
                            <li class="list-group-item">11. Awareness Solution</li>



                        </ul>
                    </div>
                </div>
            </div>





            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/security-solutions.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Cyber Security Solutions</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Cyber Range</li>
                            <li class="list-group-item">2. Brand Name Protection</li>
                            <li class="list-group-item">3. Cyber warfare</li>
                            <li class="list-group-item">4. RED Team</li>
                            <li class="list-group-item">5. SOAR</li>
                            <li class="list-group-item">6. SecOPS</li>
                            <li class="list-group-item">7. Threat Intelligence</li>




                        </ul>
                    </div>
                </div>
            </div>









        </div>
    </div>





    <?php


}



elseif ($do=="consulting"){
    ?>
    <div class="consultingimg">
        <div class="thecover"></div>
        <h1>Consulting</h1>
    </div>
    <div class="theconsulting">
        <div>
            <p>1. Knowing the weaknesses in your systems is the first step to protecting them.</p>
            <p>2. Our comprehensive assessment and analysis can reveal the gaps between the current state of your
                systems and the problem-free state of protection.</p>
            <p>3. There is a clear roadmap and action plan for identifying the right people, processes and techniques to
                fill the gaps.</p>
        </div>

    </div>





    <?php




}



//print course
elseif($do=='trainingpage') {
    ?>

<div class="filter-buttons">
    <button class="selected">All</button>
    <button>Cisco</button>
    <button>Software</button>
    <button>EC-Council</button>
    <button>Other</button>
</div>


<?php
    $id=isset($_GET['ciscoid'])&& is_numeric($_GET['ciscoid'])?intval($_GET['ciscoid']): 0;
    echo "<div class='course-container'>";
    $stmt1 = $con->prepare('SELECT * FROM `cisco_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];

        echo "<div>";

        echo "<img src='HTML/upload/course/$photos' alt='image' />";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";

        echo "</div>";
    }
   





    //software course


    $stmt1 = $con->prepare('SELECT * FROM `software_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];

        echo "<div>";

        echo "<img src='HTML/upload/course/$photos' alt='image'/>";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";
        echo "</div>";
    }




//ec course
    $id=isset($_GET['ecid'])&& is_numeric($_GET['ecid'])?intval($_GET['ecid']): 0;



    $stmt1 = $con->prepare('SELECT * FROM `ec_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div>";

        echo "<img src='HTML/upload/course/$photos' alt='image'/>";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";

        echo "</div>";
    }






    //other course


    $id=isset($_GET['otherid'])&& is_numeric($_GET['otherid'])?intval($_GET['otherid']): 0;



    $stmt1 = $con->prepare('SELECT * FROM `others`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div>";

        echo "<img src='HTML/upload/course/$photos' alt='image'/>";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";

        echo "</div>";
    }
 echo "</div>";
    ?>

    <div class="bookcourses" id="request">
        <div class="bookcover"></div>
        <div class="thecontainer">
            <div>
                <h1>Courses Request</h1>
                <p>Our cyber security training can help you and your team build fundamental to advanced cyber security techniques, Learn how to protect and defend against cyber threats with cyber security training courses for all levels of your organization.</p>
                <p>From our interesting courses You and your team will learn to approach cyber security offensively and defensively through real-world examples and exercises, hands-on labs and expert instruction. You will gain knowledge to secure your critical systems and assets.</p>
            </div>
            <form method="POST" action="courserequest.php">
                <div>
                    <input type="text" placeholder="Full Name" name="fullname" id="form-name">
                    <input type="text" placeholder="E-mail" name="email" id="form-email">
                </div>
                <div>
                    <select name="courses" id="form-courses">
                        <option>hello</option>
                        <?php
                        foreach ($row1 as $course) {
                            $courserequest=$course['Course_name'];
                            echo "<option value='$courserequest'>".$course['Course_name']."</option>";
                        }
                        ?>
                    </select>
                    <input type="number" placeholder="Phone Number" name="number" id="form-number" >

                </div>
                <textarea placeholder="Message" name="message" id="form-message"></textarea>
                <input type="submit" name="save" value="Send" id="form-submit">
                <p class="form-result"></p>

            </form>
        </div>




    </div>

    <?php

}





elseif($do=="about"){
    ?>
    <section class="about-us">
    <div class="thecont">
        <div class="about-box">
            <div class="box selected-box">
                <h5>Who Are We</h5>
            </div>
            <div class="box">
                <h5>Objectives</h5>
            </div>
            <div class="box">
                <h5>Our Mession & Vision</h5>
            </div>
        </div>
        <div class="text-box">
            <p class="show-text">- Ransom Company for Cyber security is a local company specialized in cyber security, headquartered in northern Jordan in Irbid Governorate The Hashemite Kingdom of Jordan

                Founded in 2021, the company is today startup companies in the field of cyber security that provide a comprehensive range of learning methods and training in specialized curricula in cyber security (information security, networks, applications, databases and social engineering) in addition to providing solutions and software that contribute to solving problems Cyber intrusions and threats and regulates consulting and IT security services

                We help organizations plan, build, and operate successful information security programs, solve security problems, and implement specific IT security projects

                Each member of our team has a unique set of skills and experience in the fields of training, software solutions and consulting, as well as business development and information and communication technology. Our team also has a wide and deep understanding of the Middle East and the world and its urgent need for training based on the curricula provided by international companies and to be a specialized center for exams and also to attract programmers who are able to find software solutions related to cyber security

    </p>
            <p>

    - Training, qualifying and building the capacities of young people in basic knowledge related to networks and information security by adopting the curricula offered by international companies specialized in networks and information security

    </p>
            <p >
    - To be the first choice in training, build the capabilities of young people, provide consulting, and develop software solutions to institutions/companies, and Secure Cyberspace.
            </p>
        </div>
    </div>

</section>
<?php
}



else{
    header("location:index.php");
    exit();
}
ob_end_flush();
?>
<footer id="thefooter">
    <div class="background">
        <div></div>
    </div>
    <div class="content">
        <img src="PHOTOS/logo.svg" class="img-fluid" alt="...">
    </div>
    <div class="content">
        <h3>Contact Us</h3>

        <p><a href="https://maps.app.goo.gl/PRXcpVLVFkGmUBTCA" target="_blank"rel="noreferrer">Jordan,Irbid</a></p>

       <p><a href="tel:0096227277760">0096227277760</a></p> 
        <p><a href="https://wa.link/7y545l" target="_balnk">00962776277760</a></p>
        <p><a href="mailto:info@joransom.com">info@joransom.com</a></p>
    </div>

    <div class="content">
        <h3>Our Social Media</h3>
        <div>
            <a href="https://www.facebook.com/Ransom-Company-For-Cyber-Security-743467149734362" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>


    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="bootstrap-5.0.1-dist/js/bootstrap.js"></script>

<script src="JS/ransom.js"></script>
<script src="JS/jquiry.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('.owl-1').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: 1000,
        autoplayHoverPause: true,
        slideTransition: 'linear',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })


    $('.owl-2').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: 1000,
        autoplayHoverPause: true,
        slideTransition: 'linear',
      scrollPerPage:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })


    $('.owl-3').owlCarousel({

        margin: 10,
        autoplay: 1000,
        autoplayHoverPause: true,
        slideTransition: 'linear',
        navigation:true,
        scrollPerPage:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });







</script>

<script>
    $(document).ready(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            var fullname = $("#form-name").val();
            var email = $("#form-email").val();
            var message = $("#form-message").val();
            var submit = $("#form-submit").val();
            var number = $("#form-number").val();
            var courses = $("#form-courses").val();

            $(".form-result").load("courserequest.php", {
                fullname: fullname,
                email: email,
                message: message,
                number :number,
                courses:courses,
                submit: submit
            });
        });
    });


</script>


</body>
</html>