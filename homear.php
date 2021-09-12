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
    <link rel="stylesheet" href="CSS/arstyle.css">

    <link rel="stylesheet" href="CSS/owl.theme.default.css">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Big+Shoulders+Stencil+Display:wght@100&display=swap" rel="stylesheet">-->

    <!--    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="loader-wrap">
    <div class="loader">   
        <div class="circle-1 circle">w
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
    <div class="logo logoar">
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

                    <a class="nav-link" href="homear.php">الرئيسية</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="homear.php?pages=trainingpage">
                        التدريب
                    </a>





                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        الخدمات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="homear.php?pages=solutionsar">الحلول</a></li>
                        <li><a class="dropdown-item" href="homear.php?pages=consulting">الاستشارات</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="homear.php?pages=aboutar">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#thefooter">تواصل معنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">EN</a>
                </li>
<!--                --><?php
//                if(!isset($_SESSION['admin'] ) && !isset($_SESSION['username'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="login.php">تسجيل الدخول</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
//                ?>
<!---->
<!--                --><?php
//                if(isset($_SESSION['admin'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="adminpage.php">adminpage</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
//                ?>
<!--                --><?php
//                if(isset($_SESSION['username'])){
//                    ?>
<!--                    <li class="nav-item login">-->
<!--                        <a class="nav-link" href="#"> --><?php //echo $_SESSION['username'] ?><!-- </a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
//                ?>
<!--                --><?php
//                if(isset($_SESSION['admin']) || isset($_SESSION['username'])){
//
//
//                    ?>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="logout.php">تسجيل الخروج</a>-->
<!--                    </li>-->
<!--                    --><?php
//                }
//                ?>


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
            <h4> </h4>
            <h1><span>شركة الفدية </span> <br>للأمن السبراني</h1>
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
                <h5>من نحن</h5>
            </div>
            <div class="box">
                <h5>الاهداف</h5>
            </div>
            <div class="box">
                <h5>الرؤيا والرسالة</h5>
            </div>
        </div>
        <div class="text-box">
            <p class="show-text">- شركة الفدية للأمن السيبراني (Ransom Company For Cyber Security) هي شركة محلية متخصصة في الأمن السيبراني مقرها شمال الاردن في محافظة اربد - المملكة الاردنية الهاشمية

                - تأسست عام 2021، تعد الشركة اليوم من بين الشركات الناشئة الرائدة في مجال الأمن السيبراني التي تقدم مجموعة شاملة من وسائل التعلم والتدريب على مناهج متخصصة في الأمن السيبراني ( أمن المعلومات والشبكات والتطبيقات وقواعد البيانات والهندسة الاجتماعية ) بالاضافة الى تقديم الحلول والبرمجيات التي تساهم في حل مشكلات الاختراقات والتهديدات السيبرانية وتنظم خدمات الاستشارات وأمن تكنولوجيا المعلومات

                - نحن نساعد المؤسسات على التخطيط وبناء وتشغيل برامج أمن المعلومات الناجحة ، وحل مشاكل الأمان ، وتنفيذ مشاريع محددة لأمن تكنولوجيا المعلومات

                - يتمتع كل فرد من أعضاء فريقنا بمجموعة فريدة من المهارات والخبرات في مجال التدريب والحلول البرمجية والاستشارات وايضا تطوير الأعمال وتكنولوجيا المعلومات والاتصالات. حيث يتمتع فريقنا أيضًا بفهم واسع وعميق للشرق الأوسط والعالم وحاجته الماسة للتدريب المعتمد على المناهج المقدمة من الشركات العاليمة وان نكون مركز متخصص لاجراء الامتحانات وايضا استقطابه للمبرمجين القادرين على ايجاد الحلول البرمجية المتعلقة بالأمن السيبراني
            </p>
            <p>

                ✓
                تدريب وتأهيل وبناء قدرات الشباب في المعارف الرئيسية المتعلقة بالشبكات وامن المعلومات باعتماد المناهج التي تطرحها الشركات العالمية المتخصصة في الشبكات وأمن المعلومات.


                <br>
                ✓
                توفير مركز اختبارات متخصص للحصول على الشهادات العالمية المعتمدة


                <br>
                ✓
                توفير بيئة برمجية قادرة على بناء حلول برمجية لمشكلات الاختراق والتهديدات السيبرانية.


                <br>
                ✓
                المساهمة والمشاركة بتقديم الخبرات والاستشارات للمؤسسات الحكومية والخاصة بتقنيات الأمن السيبراني


                <br>
                ✓
                بناء شبكة من التحالفات الإستراتيجية لتشكيل قاعدة معرفية متطورة ومحدثة ومتطورة ، والتي من شأنها أن تمكننا من مشاركة أعلى مستوى من الخبرات الجماعية الدولية مع عملائنا


                <br>
                ✓
                دعم وتعزيز المجتمع المحلي من خلال المساهمة الفعالة في الأنشطة والفعاليات المحلية
            </p>
            <p >
                -
                الرسالة : أن نكون الخيار الأول في تدريب وبناء قدرات الشباب وتقديم الاستشارات والحلول البرمجية الأمنة للمؤسسات والشركات
                <br>
                -
                 الرؤيا : حماية الفضاء الالكتروني


                <br>


            </p>
        </div>
    </div>

</section>





<div class="container1">
    <div class="card1">
        <div class="face face1">
            <div class="content">
                <img src="PHOTOS/presentation.svg" alt="image"/>
                <h3>التدريب</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>أكاديمية سيسكو ، Ec_Council Masterclass ، دورات تدريبية في الأمن السيبراني.</p>

            </div>
        </div>
    </div>
    <div class="card1">
        <div class="face face1">
            <div class="content">
                <img src="PHOTOS/consultation.svg" alt="image"/>
                <h3>الاستشارات</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>هناك خارطة طريق وخطة عمل واضحة لتحديد الاشخاص المناسبين والعمليات والاساليب لسد الفجوات الأمنية.

                </p>

            </div>
        </div>
    </div>



    <div class="card1">
        <div class="face face1">
            <div class="content">
                <img src="PHOTOS/idea.svg" alt="image"/>
                <h3>الحلول</h3>
            </div>
        </div>
        <div class="face face2">
            <div class="content">
                <p>نظام اختبار الاختراق ومكافحة الفيروسات وكشف التسلل</p>

            </div>
        </div>
    </div>

</div>



<section class="about-numbers">
    <div class="thecont">
        <div class="space">
            <div class="headerandboxes">
                <div class="heading"><h1><span>بعض الارقام</span></h1></div>
                <div class="boxescont">
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/team.svg" alt="team">
                        <p class="number"><span>10</span>+</p>
                        <p class="text-box">اعضاء الفريق</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/deal.svg" alt="Partner">
                        <p class="number"><span>6</span></p>
                        <p class="text-box">الشركاء</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/book.svg" alt="Course">
                        <p class="number"><span>50</span>+</p>
                        <p class="text-box">الدورات</p>
                    </div>
                    <div class="box">
                        <p class="backend-num"></p>
                        <img src="PHOTOS/reading.svg" alt="Student">
                        <p class="number"><span></span></p>
                        <p class="text-box">الطلاب</p>
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
                <img src="PHOTOS/handshake.jpg " class="event-img" alt="Course">
            </div>
            <div class="event-text">
                <p>تم توقيع إتفاقية تعاون بين شركة الفدية للأمن السيبراني و شركة الدائرة الخضراء الصناعة البرمجيات
                </p>
            </div>
        </div>




        <div class="evet-cont">
            <div class="event-image">
                <img src="PHOTOS/handshake.jpg " class="event-img" alt="Course">
            </div>
            <div class="event-text">
                <p>تم توقيع إتفاقية تعاون بين شركة الفدية للأمن السيبراني و
                    شركة التقدمية الرقمية لشبكات الحاسوب
                </p>
            </div>
        </div>
        <div class="evet-cont">
            <div class="event-image">
                <img src="PHOTOS/handshake.jpg " class="event-img" alt="Course">
            </div>
            <div class="event-text">
                <p>تم إختيار شركة الفدية للأمن السيبراني كشريك وممثل لشركة TG8 الأمريكية لحلول الأمن السيبراني
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
            <h2>الشركاء</h2>

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
    elseif($do=='solutionsar'){
        ?>
        <div class="solutionimg">
            <div class="thecover"></div>
            <h1>خدماتنا و حلولنا</h1>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="PHOTOS/ransomware.png" class="rounded mx-auto d-block" alt="...">

                        <h3 class="card-title">حلولنا</h3>

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
                                        <li>اختبار الاختراق</li>
                                        <li>مضاد الفيروسات</li>
                                        <li>نظام كشف التسلل</li>
                                        <li>حلول البرمجيات</li>
                                        <li>تصميم شعار</li>
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

                        <h3 class="card-title">بالتعاون مع Green Circle </h3>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li class="title">التفاحة الخضراء</li>
                                        <ol>
                                            <li>فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر</li>
                                            <li>مراقبة 24 ساعة على مدار الاسبوع</li>
                                            <li>SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                                            <li>IDS (المضيف مركزي لجميع الخوادم)</li>
                                            <li>تقوية أجهزة الأمن</li>
                                            <li>مراجعة السياسات والإجراءات</li>
                                        </ol>
                                    </ul>

                                    <ul>
                                        <li class="title">العنب الأخضر</li>
                                        <ol>
                                            <li>فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر</li>
                                            <li>مراقبة 24 ساعة على مدار الاسبوع</li>
                                            <li>ادارة أجهزة الأمن</li>
                                            <li>SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                                            <li>نظام كشف التسلل ومراقبة سلامة الملفات (مضيف مركزي لجميع الخوادم)</li>
                                            <li>تقوية أجهزة الأمن</li>
                                            <li>مراجعة السياسات والإجراءات</li>

                                        </ol>

                                    </ul>

                                    <ul>
                                        <li class="title">الكيوي الأخضر</li>
                                        <ol>
                                            <li>فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر</li>
                                            <li>مراقبة 24 ساعة على مدار الاسبوع</li>
                                            <li>ادارة أجهزة الأمن</li>
                                            <li>SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                                            <li>نظام كشف التسلل ومراقبة سلامة الملفات (مضيف مركزي لجميع الخوادم)</li>
                                            <li>تقوية أجهزة الأمن</li>
                                            <li>مراجعة السياسات والإجراءات</li>
                                            <li>AntiX</li>
                                            <li>دارة التهديدات</li>
                                            <li>أدوات وسائل التواصل الاجتماعي</li>
                                            <li>حماية العلامة التجارية / الاسم</li>

                                        </ol>
                                    </ul>
                                    <ul>
                                        <li class="title">إختبار الانترنت</li>
                                        <ol>
                                            <li>اختبار الاختراق (مراجعة الويب والشبكة والتطبيقات ومراجعة الرمز الأمان).</li>
                                            <li>إدارة الثغرات الأمنية</li>
                                            <li>RED Team</li>
                                        </ol>
                                    </ul>
                                    <ul>
                                        <li class="title">استشارات سيبيرانية</li>
                                        <ol>
                                            <li>تقييم المخاطر</li>
                                            <li>SOC Architecture</li>
                                            <li>نموذج التهديد</li>
                                            <li>نموذج النضج الأمني وتسجيل المخاطر</li>
                                        </ol>
                                    </ul>
                                    <ul>
                                        <li class="title">خدمات الامتثال عبر الإنترنت</li>
                                        <ol>
                                            <li>GRC Architecture</li>
                                            <li>ISO 27001 – 27701</li>
                                            <li>General Data Protection Regulations - GDPR</li>
                                            <li>PCI-DSS, PCI-PA</li>
                                            <li>NIST</li>
                                        </ol>
                                    </ul>
                                    <ul>
                                        <li class="title">حلول ادارة الأمن السيبراني</li>
                                        <ol>
                                            <li>إدارة التهديدات الموحدة - UTM</li>
                                            <li>جدار حماية تطبيق الويب - WAF</li>
                                            <li>رصد الوصول إلى قاعدة البيانات - DAM</li>
                                            <li>حماية البريد الإلكتروني</li>
                                            <li>حل تشفير البيانات</li>
                                            <li>إدارة الهوية - IDM</li>
                                            <li>إدارة الوصول إلى الامتيازات - PAM</li>
                                            <li>EDR – EPP</li>
                                            <li>APT</li>
                                            <li>الخداع الديناميكي</li>
                                            <li>حل التوعية</li>

                                        </ol>
                                    </ul>
                                    <ul>
                                        <li class="title">حلول الأمن السيبراني المتقدمة</li>
                                        <ol>
                                            <li>المدى السيبيري</li>
                                            <li>حماية اسم العلامة التجارية</li>
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
                    <h3 class="card-title">بالتعاون مع KAIZEN365  </h3>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body ar">
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
            <h1>الاستشارات</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/system.png" class="card-img-top rounded mx-auto d-block"" alt="...">
                    <div class="card-body">
                        <p class="card-text">معرفة نقاط الضعف في انظمتك هي الخطوة الاولى لحمايتها.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/monitoring.png" class="card-img-top rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <p class="card-text"> يمكن ان يكشف تقييمنا الشامل وتحليلنا عن الفجوات الأمنية بين الحالة الحالية لانظمتك وحالة الحماية الخالية من المشاكل.</p>
                    </div>


                </div>
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/route.png" class="card-img-top rounded mx-auto d-block" alt="...">
                    <div class="card-body">
                        <p class="card-text">هناك خارطة طريق وخطة عمل واضحة لتحديد الاشخاص المناسبين والعمليات والاساليب لسد الفجوات.</p>
                    </div>
                </div>
            </div>
        </div>




        <?php




    }



    //print course
    elseif($do=='trainingpage') {
        ?>


    <div class="filter-buttons">
        <button class="selected">الكل</button>
        <button>سيسكو</button>
        <button>برمجة</button>
        <button>EC-Council</button>
        <button>اخرى</button>
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
        echo "<a href='#request'>سجل الان</a>";

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
        echo "<a href='#request'>سجل الان</a>";
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
        echo "<a href='#request'>سجل الان</a>";

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
        echo "<a href='#request'>سجل الان</a>";

        echo "</div>";
    }
    echo "</div>";
    ?>

    <div class="bookcourses" id="request">
        <div class="bookcover"></div>
        <div class="thecontainer">
            <div>
                <h1>طلب دورات</h1>
                <p>يمكن للتدريب على الأمن الالكتروني أن يساعدك أنت وموظفيك على بناء تقنيات الأمان المتقدمة، وتعلم كيفية الحماية من التهديدات الاكترونية والتحصن ضدها من خلال دورات تدريبية للأمن الالكتروني ولجميع مستويات موظفي المؤسسة.</p>
                <p>وتتضمن دوراتنا المميزة؛ دورات في القرصنة الأخلاقية المعتمدة، ودورات في التحليل الجنائي الرقمي، ودورات في الاستجابة للحوادث.

                    ستتعلم أنت وفريقك كيفية الاقتراب من الأمن الالكتروني بطريقة هجومية ودفاعية من خلال الأمثلة والتمارين الواقعية والمختبرات العملية وتعليمات الخبراء.وستتمكن من اكتساب المعرفة لتأمين أنظمتك وأصولك المهمة.</p>
            </div>
            <form method="POST" action="courserequest.php">
                <div>
                    <input type="text" placeholder="الاسم بالكامل" name="fullname" id="form-name" required>
                    <input type="text" placeholder="الايميل" name="email" id="form-email" required>
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
                    <input type="number" placeholder="رقم الهاتف" name="number" id="form-number" >

                </div>
                <textarea placeholder="ملاحظات" name="message" id="form-message"></textarea>
                <input type="submit" name="save" value="ارسال" id="form-submit">
                <p class="form-result"></p>

            </form>
        </div>




    </div>

    <?php

}






    elseif($do=="aboutar"){
        ?>
        <section class="about-us">
            <div class="thecont">
                <div class="about-box">
                    <div class="box selected-box">
                        <h5>من نحن</h5>
                    </div>
                    <div class="box">
                        <h5>الاهداف</h5>
                    </div>
                    <div class="box">
                        <h5>الرؤيا والرسالة</h5>
                    </div>
                </div>
                <div class="text-box">
                    <p class="show-text">- شركة الفدية للأمن السيبراني (Ransom Company For Cyber Security) هي شركة محلية متخصصة في الأمن السيبراني مقرها شمال الاردن في محافظة اربد - المملكة الاردنية الهاشمية

                        - تأسست عام 2021، تعد الشركة اليوم من بين الشركات الناشئة الرائدة في مجال الأمن السيبراني التي تقدم مجموعة شاملة من وسائل التعلم والتدريب على مناهج متخصصة في الأمن السيبراني ( أمن المعلومات والشبكات والتطبيقات وقواعد البيانات والهندسة الاجتماعية ) بالاضافة الى تقديم الحلول والبرمجيات التي تساهم في حل مشكلات الاختراقات والتهديدات السيبرانية وتنظم خدمات الاستشارات وأمن تكنولوجيا المعلومات

                        - نحن نساعد المؤسسات على التخطيط وبناء وتشغيل برامج أمن المعلومات الناجحة ، وحل مشاكل الأمان ، وتنفيذ مشاريع محددة لأمن تكنولوجيا المعلومات

                        - يتمتع كل فرد من أعضاء فريقنا بمجموعة فريدة من المهارات والخبرات في مجال التدريب والحلول البرمجية والاستشارات وايضا تطوير الأعمال وتكنولوجيا المعلومات والاتصالات. حيث يتمتع فريقنا أيضًا بفهم واسع وعميق للشرق الأوسط والعالم وحاجته الماسة للتدريب المعتمد على المناهج المقدمة من الشركات العاليمة وان نكون مركز متخصص لاجراء الامتحانات وايضا استقطابه للمبرمجين القادرين على ايجاد الحلول البرمجية المتعلقة بالأمن السيبراني
                    </p>
                    <p>

                        ✓
                        تدريب وتأهيل وبناء قدرات الشباب في المعارف الرئيسية المتعلقة بالشبكات وامن المعلومات باعتماد المناهج التي تطرحها الشركات العالمية المتخصصة في الشبكات وأمن المعلومات.


                        <br>
                        ✓
                        توفير مركز اختبارات متخصص للحصول على الشهادات العالمية المعتمدة


                        <br>
                        ✓
                        توفير بيئة برمجية قادرة على بناء حلول برمجية لمشكلات الاختراق والتهديدات السيبرانية.


                        <br>
                        ✓
                        المساهمة والمشاركة بتقديم الخبرات والاستشارات للمؤسسات الحكومية والخاصة بتقنيات الأمن السيبراني


                        <br>
                        ✓
                        بناء شبكة من التحالفات الإستراتيجية لتشكيل قاعدة معرفية متطورة ومحدثة ومتطورة ، والتي من شأنها أن تمكننا من مشاركة أعلى مستوى من الخبرات الجماعية الدولية مع عملائنا


                        <br>
                        ✓
                        دعم وتعزيز المجتمع المحلي من خلال المساهمة الفعالة في الأنشطة والفعاليات المحلية
                    </p>
                    <p >
                        -
                        الرسالة : أن نكون الخيار الأول في تدريب وبناء قدرات الشباب وتقديم الاستشارات والحلول البرمجية الأمنة للمؤسسات والشركات
                        <br>
                        -
                        الرؤيا : حماية الفضاء الالكتروني


                        <br>


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
            <h3>تواصل معنا</h3>

            <p><a href="https://maps.app.goo.gl/PRXcpVLVFkGmUBTCA" target="_blank"rel="noreferrer">شركة الفدية-اربد-شارع عمر المختار</a></p>

            <p><a href="tel:0096227277760">7277760 - 2 - 00962  </a></p>
            <p><a href="https://wa.link/7y545l" target="_balnk">6277760 - 77 - 00962  </a></p>
            <p><a href="mailto:info@joransom.com">info@joransom.com</a></p>
        </div>

        <div class="content">
            <h3>صفحات التواصل الاجتماعي</h3>
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