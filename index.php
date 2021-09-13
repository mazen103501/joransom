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

<!-- loading -->
<div class="loader-wrap">
    <div class="loader">   
        <div class="circle-1 circle">
            <div class="circle-2 circle">
                <div class="circle-3 circle">
                    <div class="circle-4 circle">
                    </div>
                </div>
            </div>
        </div>
        <p class="loading-text">Loading ...</p>
    </div>
</div>










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
                    <a class="nav-link"  href="index.php?pages=about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#thefooter">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homear.php">Ar</a>
                </li>
                <?php
//                if(!isset($_SESSION['admin'] ) && !isset($_SESSION['username'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="login.php">Login</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
                ?>

                <?php
//                if(isset($_SESSION['admin'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="adminpage.php">adminpage</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
                ?>
                <?php
//                if(isset($_SESSION['username'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="#"> --><?php //echo $_SESSION['username'] ?><!-- </a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
                ?>
                <?php
//                if(isset($_SESSION['admin']) || isset($_SESSION['username'])){
//
//
//                    ?>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="logout.php">log out</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
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

                <h1><span>Ransom For</span><br>CyberSecurity</h1>
<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam odit enim natus porro suscipit facere.</p>-->
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
                <h5>Our Mission & Vision</h5>
            </div>
        </div>
        <div class="text-box">
            <p class="show-text">
                Ransom Company for Cyber security is a local company, founded in 2021 in nothern Jordan, Irbid government under the name Ransom Company for Cyber Security. The Company is specialized in Cyber security that provides a comprehensive range of learning methods and training in specialized curricula in cyber security (information security, networks, applications, databases and social engineering). Not only do we provide solutions and software that contribute to solving problems,  Cyber intrusions and threats, but also we regulate consulting and IT security services, help, plan, build, solve security problems, implement specific IT security projects and operate a successful information  security programs.

            </p>
            <p>

                ✓
                Training, qualifying and capacity building for youth in basic knowledge related to networks and information security by adopting the curricula offered by international companies specialized in networks and information security.
<br>
                ✓
                Providing a specialized testing center to obtain accredited international certificates.
<br>
                ✓
                Providing a programming environment capable of building software solutions to hacking problems and cyber threats.
                <br>
                ✓
                Contributing and participating in providing expertise and advice to governmental and private institutions in cyber security technologies.
                <br>
                ✓
                Building a network of strategic alliances to form an advanced, updated and sophisticated knowledge base, which would enable us to share the highest level of international collective experiences with our clients.
                <br>
                ✓
                Supporting and strengthening the local community through effective participation in local activities and events.
                <br>

            </p>
            <p >
                Our Mission : To be the first choice in training, build the capabilities of young people, provide consulting, and develop software solutions to institutions and companies.
                <br>
                <br>
                <br>
                Our Vision : Secure Cyberspace.
            </p>
        </div>
    </div>

</section>





    <div class="container1">
        <div class="card1">
            <div class="face face1">
                <div class="content">
                    <img src="PHOTOS/presentation.svg" alt="image"/>
                    <h3>Training</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>CISCO Academy , Ec_Council Masterclass, Cyber Security Training Courses.</p>

                </div>
            </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content">
                    <img src="PHOTOS/consultation.svg" alt="image"/>
                    <h3>Consulting</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Knowing the weaknesses in your systems is the first step to protecting them</p>

                </div>
            </div>
        </div>



        <div class="card1">
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
                        <p class="number"><span>10</span>+</p>
                        <p class="text-box">Team Member's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/deal.svg" alt="Partner">
                        <p class="number"><span>6</span></p>
                        <p class="text-box">Partner's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/book.svg" alt="Course">
                        <p class="number"><span>50</span>+</p>
                        <p class="text-box">Course's</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/reading.svg" alt="Student">
                        <p class="number"><span></span></p>
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
            <img src="PHOTOS/handshake.jpg" class="event-img" alt="Course">
        </div>
        <div class="event-text">
            <p>A cooperation agreement was signed
                between the Ransom Company for Cyber
                securityand the Green Circle Company for
                software Industry</p>
        </div>
    </div>




            <div class="evet-cont">
                <div class="event-image">
                    <img src="PHOTOS/handshake.jpg" class="event-img" alt="Course">
                </div>
                <div class="event-text">
                    <p>
                        A cooperation agreement was signed between the
                        Ransom Company for Cyber security
                        and the KAIZEN365Technology Company
                    </p>
                </div>
            </div>

            <div class="evet-cont">
                <div class="event-image">
                    <img src="PHOTOS/handshake.jpg" class="event-img" alt="Course">
                </div>
                <div class="event-text">
                    <p>
                        The Ransom company for cyber security has
                        been chosen as a partner and representative of
                        the American company TG8for cyber
                        security solutions
                    </p>
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


    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="PHOTOS/ransomware.png" class="rounded mx-auto d-block" alt="...">

                    <h3 class="card-title">Our Solutions</h3>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                                </button>
                            </h2>
                        </div>

                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="title">
                                    <li>Penetration Testing</li>
                                    <li>Antivirus</li>
                                    <li>Intrusion Detection System</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="PHOTOS/cyber-security.png" class="rounded mx-auto d-block" alt="...">

                    <h3 class="card-title">In Cooperation with Green Circle</h3>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class="title">Green Apple</li>
                                    <ol>
                                        <li>Network Vulnerability Scan & PEN Test once Per Quarter</li>
                                        <li>24X7 Monitoring</li>
                                        <li>Managed SIEM</li>
                                        <li>IDS (Host Based for All Servers)</li>
                                        <li>Hardening Security Devices</li>
                                        <li>Review Policies and procedures</li>
                                    </ol>
                                </ul>

                                <ul>
                                    <li class="title">Green Grape</li>
                                    <ol>
                                        <li>Network Vulnerability Scan & PEN Test once Per Quarter</li>
                                        <li>24X7 Monitoring</li>
                                        <li>Managed Security Devices</li>
                                        <li>Managed SIEM</li>
                                        <li>IDS & FIM (Host Based for All Servers)</li>
                                        <li>Hardening Security Devices</li>
                                        <li>Review Policies and procedures</li>

                                    </ol>

                                </ul>

                                <ul>
                                    <li class="title">Green Kiwi</li>
                                    <ol>
                                        <li>Network Vulnerability Scan & PEN Test once Per Quarter</li>
                                        <li>24X7 Monitoring</li>
                                        <li>Managed Security Devices</li>
                                        <li>Managed SIEM</li>
                                        <li>IDS & FIM (Host Based for All Servers)</li>
                                        <li>Hardening Security Devices</li>
                                        <li>Review Policies and procedures</li>
                                        <li>AntiX</li>
                                        <li>Threat Management</li>
                                        <li>Social Media Tools</li>
                                        <li>Brand/Name Protection</li>

                                    </ol>
                                </ul>
                                <ul>
                                    <li class="title">Cyber Testing</li>
                                    <ol>
                                        <li>Penetration Testing (Web , Network , Apps , and Code security review).</li>
                                        <li>Vulnerability Management</li>
                                        <li>RED Team</li>
                                    </ol>
                                </ul>
                                <ul>
                                    <li class="title">Cyber Consulting</li>
                                    <ol>
                                        <li>Risk Assessment</li>
                                        <li>SOC Architecture</li>
                                        <li>Threat Modeling</li>
                                        <li>Security Maturity Model and Risk scoring</li>
                                    </ol>
                                </ul>
                                <ul>
                                    <li class="title">Cyber Compliance Services</li>
                                    <ol>
                                        <li>GRC Architecture</li>
                                        <li>ISO 27001 – 27701</li>
                                        <li>General Data Protection Regulations - GDPR</li>
                                        <li>PCI-DSS, PCI-PA</li>
                                        <li>NIST</li>
                                    </ol>
                                </ul>
                                <ul>
                                    <li class="title">Managed Cyber Security Solutions</li>
                                    <ol>
                                        <li>Unified Threat Management - UTM</li>
                                        <li>Web application firewall - WAF</li>
                                        <li>Database Access Monitoring - DAM</li>
                                        <li>Email Security</li>
                                        <li>Data Encryption Solution</li>
                                        <li>Identity Management - IDM</li>
                                        <li>Privileges Access Management - PAM</li>
                                        <li>EDR – EPP</li>
                                        <li>APT</li>
                                        <li>Dynamic Deception</li>
                                        <li>Awareness Solution</li>

                                    </ol>
                                </ul>
                                <ul>
                                    <li class="title">Advanced Cyber Security Solutions</li>
                                    <ol>
                                        <li>Cyber Range</li>
                                        <li>Brand Name Protection</li>
                                        <li>Cyber warfare</li>
                                        <li>RED Team</li>
                                        <li>SOAR</li>
                                        <li>SecOPS</li>
                                        <li>Threat Intelligence</li>
                                    </ol>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="PHOTOS/network.png" class="rounded mx-auto d-block" alt="...">
                    <h3 class="card-title">In Cooperation with KAIZEN365</h3>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul >
                                    <li class="title">Cloud Service</li>
                                    <ol>
                                        <li>Cloud Backup Solutions</li>
                                        <li>Cloud Services Solutions</li>
                                    </ol>

                                </ul>
                                <ul>
                                    <li class="title">Professional Network Solution service</li>
                                    <ol>
                                        <li>Backup Solutions</li>
                                        <li>Security Solutions</li>
                                        <li>Infrastructure Solutions</li>
                                        <li>Data Leak Solutions (DLP Solutinos)</li>
                                    </ol>

                                </ul>
                                <ul>
                                    <li class="title">Network Administration Service  </li>
                                    <ol>
                                        <li>Supervising the performance of the network in actual working conditions (Operation)</li>
                                        <li>Take immediate actions to control the network when needed(Configuration)</li>
                                        <li>Maximum network capacity utilization (Effectiveness)</li>
                                        <li>Planning for future events (Development)</li>
                                        <li>Risk Managment</li>
                                    </ol>

                                </ul>
                            </div>
                        </div>
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

    <div class="container">
        <div class="row">
    <div class="card" style="width: 18rem;">
        <img src="PHOTOS/system.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Knowing the weaknesses in your systems is the first step to protecting them</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="PHOTOS/monitoring.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"> Our comprehensive assessment and analysis can reveal the gaps between the current state of your
                systems and the problem-free state of protection.</p>
        </div>


    </div>
            <div class="card" style="width: 18rem;">
                <img src="PHOTOS/route.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">There is a clear roadmap and action plan for identifying the right people, processes and techniques to
                        fill the gaps</p>
                </div>
            </div>
    </div>
    </div>



    <?php




}

elseif ($do=="job"){
    ?>

    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Ransom For Cyber Security - Irbid - Omar ALmokhtar st.</div>

                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">00962  2  7277760</div>
                    <div class="text-two">00962  77  6277760</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-two">info@joransom.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>

                <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>

                <form id="job-request" method="POST" action="index.php?pages=new-job" enctype="multipart/form-data">
                    <div class="input-box">
                        <input id="job-name" type="text" placeholder="الاسم بالكامل" name="name" >
                    </div>
                    <div class="input-box">
                        <input id="job-email" type="text" placeholder="الايميل" name="email" >
                    </div>
                    <div class="input-box">
                        <input id="job-number" type="number" placeholder="رقم الهاتف" name="phonenumber" >
                    </div>
                    <div class="input-box">
                        <select id="job-major" name="universitymajor">
                            <option value="" selected disabled>التخصص</option>
                            <option value="Computer Since">Computer Since</option>
                            <option value="Computer engineer">Computer engineering</option>
                            <option value="Computer Information System">Computer Information System </option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Network Engineering">Network Engineering</option>
                            <option value="المحاسبة">المحاسبة</option>
                            <option value="ادارة الاعمال">ادارة الاعمال</option>
                            <option value="نظم معلومات ادارية">نظم معلومات ادارية</option>
                            <option value="تسويق">التسويق</option>
                            <option value="سكرتيريا">سكرتيريا</option>
                            <option value="الترجمة">الترجمة</option>
                            <option value="آداب انجليزي">آداب انجليزي</option>
                            <option value="HR">الموارد البشرية (HR)</option>

                        </select>
                    </div>

                    <div class="input-box">
                        <select id="job-gpa" name="gpa">
                            <option value="" disabled selected>التقدير الجامعي</option>
                            <option value="Accept">مقبول</option>
                            <option value="Good">جيد</option>
                            <option value="Very Good">جيد جدا</option>
                            <option value="Excellent">ممتاز</option>
                        </select>
                    </div>
                    <div  class="input-box">
                        <select id="job-governorate" name="governorate">
                            <option selected disabled value="">المحافظة</option>
                            <option value="Irbid">اربد</option>
                            <option value="Jerash">جرش</option>
                            <option value="Ajloun">عجلون</option>
                            <option value="Mafraq">المفرق</option>
                            <option value="Amman">عمان</option>
                            <option value="Zarqa">الزرقاء</option>
                            <option value="Madaba">مأدبا</option>
                            <option value="Balqa">البلقاء</option>
                            <option value="Karak">الكرك</option>
                            <option value="Tafileh">الطفيلة</option>
                            <option value="Maan">معان</option>
                            <option value="Aqaba">العقبة</option>

                        </select>
                    </div>


                    <div class="row">
                        <div class="col input-box">
                            <label>سنة التخرج</label>

                            <input id="job-date" name="date" type="date">
                        </div>


                        <div class="col input-box">
                            <label>السيرة الذاتية</label>

                            <input id="job-cv" name="CV" type="file" accept="application/pdf">
                        </div>
                    </div>

                    <div class="input-box" >

                        <textarea id="job-aboutus" name="about_us" placeholder="How Did You Hear About Us"></textarea>
                    </div>



                        <input type="submit" name="job" id="job-submit">
                    <p class="job-result"></p>

                </form>
            </div>
        </div>
    </div>

    <?php
}







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
    $stmt = $con->prepare('SELECT * FROM `cisco_course`');
    $stmt->execute();
    $row = $stmt->fetchAll();
    foreach ($row as $course) {
        $photos = $course['photos'];
        $id=$course['id'];

        echo "<div data-type='cisco'>";

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

        echo "<div data-type='software'>";

        echo "<img src='HTML/upload/course/$photos' alt='image'/>";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";
        echo "</div>";
    }




//ec course
    $id=isset($_GET['ecid'])&& is_numeric($_GET['ecid'])?intval($_GET['ecid']): 0;



    $stmt2 = $con->prepare('SELECT * FROM `ec_course`');
    $stmt2->execute();
    $row2 = $stmt2->fetchAll();
    foreach ($row2 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div data-type='ec'>";

        echo "<img src='HTML/upload/course/$photos' alt='image'/>";
        echo "<div><h6>".$course['Course_name']."</h6></div>";
        echo "<a href='#request'>Enroll now</a>";

        echo "</div>";
    }






    //other course


    $id=isset($_GET['otherid'])&& is_numeric($_GET['otherid'])?intval($_GET['otherid']): 0;



    $stmt3 = $con->prepare('SELECT * FROM `others`');
    $stmt3->execute();
    $row3 = $stmt3->fetchAll();
    foreach ($row3 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div data-type='other'>";

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
            <form method="POST" action="courserequest.php" id="course-request">
                <div>
                    <input type="text" placeholder="Full Name" name="fullname" id="form-name" required>
                    <input type="text" placeholder="E-mail" name="email" id="form-email" required>
                </div>
                <div>
                    <select name="courses" id="form-courses" disabled>
                        <?php
                        foreach ($row as $course) {
                            $courserequest=$course['Course_name'];
                            echo "<option value='$courserequest'>".$course['Course_name']."</option>";
                        }

                        foreach ($row1 as $course1){
                            echo "<option value='$courserequest'>".$course1['Course_name']."</option>";

                        }
                        foreach ($row2 as $course2){
                            echo "<option value='$courserequest'>".$course2['Course_name']."</option>";

                        }
                        foreach ($row3 as $course3){
                            echo "<option value='$courserequest'>".$course3['Course_name']."</option>";

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
            <p class="show-text">Ransom Company for Cyber security is a local company, founded in 2021 in nothern Jordan, Irbid government under the name Ransom Company for Cyber Security. The Company is specialized in Cyber security that provides a comprehensive range of learning methods and training in specialized curricula in cyber security (information security, networks, applications, databases and social engineering). Not only do we provide solutions and software that contribute to solving problems,  Cyber intrusions and threats, but also we regulate consulting and IT security services, help, plan, build, solve security problems, implement specific IT security projects and operate a successful information  security programs.</p>
            <p>

                ✓
                Training, qualifying and building the capacities of young people in basic knowledge related to networks and information security by adopting the curricula offered by international companies specialized in networks and information security.
                <br>
                ✓
                Providing a specialized testing center to obtain accredited international certificates.
                <br>
                ✓
                Providing a programming environment capable of building software solutions to hacking problems and cyber threats.
                <br>
                ✓
                Contributing and participating in providing expertise and advice to governmental and private institutions in cyber security technologies.
                <br>
                ✓
                Building a network of strategic alliances to form an advanced, updated and sophisticated knowledge base, which would enable us to share the highest level of international collective experiences with our clients.
                <br>
                ✓
                Supporting and strengthening the local community through effective participation in local activities and events.
                <br>

            </p>
            <p >
                Our Mission : To be the first choice in training, build the capabilities of young people, provide consulting, and develop software solutions to institutions and companies.
                <br>
                Our Vision : Secure Cyberspace.
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

        <p><a href="https://maps.app.goo.gl/PRXcpVLVFkGmUBTCA" target="_blank"rel="noreferrer">Ransom For Cyber Security - Irbid - Omar ALmokhtar st.</a></p>

       <p><a href="tel:0096227277760">00962 - 2 - 7277760</a></p>
        <p><a href="https://wa.link/7y545l" target="_balnk">00962 - 77 - 6277760</a></p>
        <p><a href="mailto:info@joransom.com">info@joransom.com</a></p>
    </div>

    <div class="content">
        <h3>Our Social Media</h3>
        <div>
            <a href="https://www.facebook.com/Ransom-Company-For-Cyber-Security-743467149734362" target="_blank"><i class="fab fa-facebook-f"></i></a>
<!--            <a href="#"><i class="fab fa-twitter"></i></a>-->
            <a href="https://www.instagram.com/ransom_company/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/ransom-jo?_l=en_US" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                items: 2
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
        $("#course-request").submit(function(event) {
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
<script>

    $(document).ready(function() {
        $("#job-request").submit(function(event) {
            event.preventDefault();

            var name = $("#job-name").val();
            var email = $("#job-email").val();
            var phonenumber = $("#job-number").val();
            var universitymajor = $("#job-major").val();
            var gpa = $("#job-gpa").val();
            var governorate= $("#job-governorate").val();
            var date = $("#job-date").val();
            var CV = $("#job-cv").val();
            var about_us = $("#job-aboutus").val();
            var submit = $("#job-submit").val();

                async function uploadFile() {
                let formData = new FormData();
                formData.append("file", CV.files[0]);
                await fetch('/jobrequest.php', {
                method: "POST",
                body: formData
            });
                alert('The file has been uploaded successfully.');
            }



            $(".job-result").load("jobrequest.php", {
                name: name,
                email: email,
                phonenumber :phonenumber,
                universitymajor: universitymajor,
                gpa:gpa,
                governorate:governorate,
                date:date,
                CV:CV,
                about_us:about_us,
                submit: submit
            });
        });
    });




</script>

</body>
</html>