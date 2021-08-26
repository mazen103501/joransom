<?php
ob_start();
// session_start();
include "conn.php";
include "checkadmin.php";
include "checkuser.php";
$do = isset($_GET['pages']) ? $_GET['pages'] : 'dashborad';
?>

<?php
if(isset($do) && $do!='ar'){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integriy="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    

    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/arstyle.css">
    <link rel="stylesheet" href="CSS/owl.theme.default.css">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Big+Shoulders+Stencil+Display:wght@100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">


</head>
<body>
<!-- Nav Bar -->
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

                    <a class="nav-link" href="homear.php">الرئيسية</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        التدريب
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="homear.php?pages=cisco">Cisco course</a></li>
                        <li><a class="dropdown-item" href="homear.php?pages=software">Software course</a></li>
                        <li><a class="dropdown-item" href="homear.php?pages=ec">EC_council course</a></li>
                        <li><a class="dropdown-item" href="homear.php?pages=others">others</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        الخدمات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="homear.php?pages=solutions">الحلول</a></li>
                        <li><a class="dropdown-item" href="homear.php?pages=consulting">الاستشارات</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="homear.php#whoarewear">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#thefooter">تواصل معنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">EN</a>
                </li>
                <?php
                if(!isset($_SESSION['admin'] ) && !isset($_SESSION['username'])){
                    ?>
                    <li class="nav-item login">
                        <a class="nav-link" href="login.php">تسجيل الدخول</a>
                    </li>
                    <?php
                }
                ?>

                <?php
                if(isset($_SESSION['admin'])){
                    ?>
                    <li class="nav-item login">
                        <a class="nav-link" href="adminpage.php">صفحة الادمن</a>
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
                        <a class="nav-link" href="logout.php">تسجيل الخروج</a>
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
                <p>- شركة الفدية للأمن السيبراني (Ransom Company For Cyber Security) هي شركة محلية متخصصة في الأمن السيبراني مقرها شمال الاردن في محافظة اربد - المملكة الاردنية الهاشمية
                    - تأسست عام 2021، تعد الشركة اليوم من بين الشركات الناشئة الرائدة في مجال الأمن السيبراني التي تقدم مجموعة شاملة من وسائل التعلم والتدريب على مناهج متخصصة في الامن السيبراني ( أمن المعلومات والشبكات والتطبيقات وقواعد البيانات والهندسة الاجتماعية ) بالاضافة الى تقديم الحلول والبرمجيات التي تساهم في حل مشكلات الاختراقات والتهديدات السيبرانية وتنظم خدمات الاستشارات وأمن تكنولوجيا المعلومات
                    - نحن نساعد المؤسسات على التخطيط وبناء وتشغيل برامج أمن المعلومات الناجحة ، وحل مشاكل الأمان ، وتنفيذ مشاريع محددة لأمن تكنولوجيا المعلومات
                    -  يتمتع كل فرد من أعضاء فريقنا بمجموعة فريدة من المهارات والخبرات في مجال التدريب والحلول البرمجية والاستشارات وايضا تطوير الأعمال وتكنولوجيا المعلومات والاتصالات. حيث يتمتع فريقنا أيضًا بفهم واسع وعميق للشرق الأوسط والعالم وحاجته الماسة للتدريب المعتمد على المناهج المقدمة من الشركات العاليمة وان نكون مركز متخصص لاجراء الامتحانات وايضا استقطابه للمبرمجين القادرين على ايجاد الحلول البرمجية المتعلقة بالامن السيبراني
                </p>
            </div>
        </div>

    </section>






       <img src="PHOTOS/cover2.jpg" class="img-fluid" alt="...">


    <!-- Who are we -->
    <div class="who-are-we" id="whoarewear">
        <h2>من نحن</h2>
        <p>
        </p>
        <p>
        </p>
        <p>
            - <span>الرسالة</span> : أن نكون الخيار الأول في تدريب وبناء قدرات الشباب وتقديم الاستشارات والحلول البرمجية الامنة للمؤسسات والشركات
        </p>
        <p>
            - <span>الرؤيا</span>   :   حماية الفضاء الالكتروني
        </p>
        <p></p>
        <p>
        </p>
    </div>


    <div class="cards">
        <div>
            <div>
                <span><i class="fas fa-tools"></i></span>
                <div>
                    <h3>Solutions</h3>
                    <p>Penetration Testing,
                        Antivirus,
                        AND
                        Intrusion Detection System</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <span><i class="fas fa-tools"></i></span>
                <div>
                    <h3>Consulting</h3>
                    <p>Knowing the weaknesses in your systems is the first step to protecting them.
                        Our comprehensive assessment </p>
                </div>
            </div>
        </div>

        <div>
            <div>
                <span><i class="fas fa-tools"></i></span>
                <div>
                    <h3>Training</h3>
                    <p>CISCO Academy , Ec_Council Masterclass, Cyber Security Training Courses.</p>
                </div>
            </div>
        </div>


    </div>

    <div class="objectives">
        <h2>الاهداف</h2>
        <div>
            <span>&#10003;</span><p>	تدريب وتأهيل وبناء قدرات الشباب في المعارف الرئيسية المتعلقة بالشبكات وامن المعلومات باعتماد المناهج التي تطرحها الشركات العالمية المتخصصة في الشبكات وأمن المعلومات.</p>
        </div>
        <div>
            <span>&#10003;</span><p>	توفير مركز اختبارات متخصص للحصول على الشهادات العالمية المعتمدة</p>
        </div>
        <div>
            <span>&#10003;</span><p>		توفير بيئة برمجية  قادرة على بناء حلول برمجية لمشكلات الاختراق والتهديدات السيبرانية.</p>
        </div>
        <div>
            <span>&#10003;</span><p>		المساهمة والمشاركة بتقديم الخبرات والاستشارات للمؤسسات الحكومية والخاصة بتقنيات الامن السيبراني</p>
        </div>
        <div>
            <span>&#10003;</span><p>بناء شبكة من التحالفات الإستراتيجية لتشكيل قاعدة معرفية متطورة ومحدثة ومتطورة ، والتي من شأنها أن تمكننا من مشاركة أعلى مستوى من الخبرات الجماعية الدولية مع عملائنا</p>
        </div>
        <div>
            <span>&#10003;</span><p>	دعم وتعزيز المجتمع المحلي من خلال المساهمة الفعالة في الأنشطة والفعاليات المحلية.</p>
        </div>
    </div>


   <div class="courses">
<?php
    $stmt1=$con->prepare('SELECT * FROM `ec_course` LIMIT 4');
$stmt1->execute();
$row1=$stmt1->fetchAll();
foreach($row1 as $course) {
    $photos = $course['photos'];
    echo "<a href='homear.php?pages=ec'><div>";
    echo "<img src='HTML/upload/course/$photos'/>";
    echo "<h5>".$course['Course_name']."</h5>";
    echo "</div></a>";


}
echo "</div>";

// AD
echo '<h2 class="Advertisement">الاعلانات</h2>

    <div id="owl-demo" class="owl-2 owl-carousel owl-theme">
        <div class="item image"><img src="PHOTOS/green1.jpg"></div>
        <div class="item image"><img src="PHOTOS/kaizen1.jpg"></div>
        <div class="item image"><img src="PHOTOS/TG81.jpg"></div>
    </div>
    

';





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
elseif($do=='solutions'){
?>
  <div class="solutionimg">
    <div class="thecover"></div>
    <h1>حلولنا وخدماتنا</h1>
  </div>
  
  
  
   <h3 style="text-align: center ; margin-top: 20px ; margin-bottom: 20px">حلولنا </h3>
<!--first card-->
    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/icon2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">اختبار الاختراق</h5>


                    </div>
                </div>
            </div>





            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">مكافحة الفيروسات</h5>

                    </div>
                </div>
            </div>





            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/Control-safety-en-security-systems.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">نظام كشف التسلل</h5>
                    </div>
                </div>
            </div>


<h2 style="text-align: center ; margin-top: 20px ; margin-bottom: 20px">بالتعاون مع KAIZEN365</h2>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/shutterstock-33654265.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">خدمة ادارة الشبكات</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. الاشراف على اداء الشبكة في ظروف العمل الفعلي</li>
                            <li class="list-group-item">2. اتخاذ اجرائات فورية للتحكم بالشبكة عند الحاجة</li>
                            <li class="list-group-item">3. استخدام سعة الشبكة بحدها الاقصى</li>
                            <li class="list-group-item">4. التخطيط للاحداث المستقبلية</li>
                            <li class="list-group-item">5. التخطيط للحالات الطارئة</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/unnamed (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">خدمة حلول الشبكات الاحترافية</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. حلول حماية البيانات</li>
                            <li class="list-group-item">2. حلول نظم الحماية</li>
                            <li class="list-group-item">3. حلول البنية التحتية</li>
                            <li class="list-group-item">4. حلول تسرب البيانات</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/download.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">الخدمات السحابية</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. حلول حماية البيانات السحابية</li>
                            <li class="list-group-item">2. حلول الخوادم السحابية</li>

                        </ul>

                    </div>
                </div>
            </div>

            <h2 style="text-align: center ; margin-top: 20px; margin-bottom: 20px">بالتعاون مع شركة الدائرة الخضراء</h2>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/greenapple.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">حزمة التفاحة الخضراء</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر</li>
                            <li class="list-group-item">2. مراقبة 24 ساعة على مدار الاسبوع</li>
                            <li class="list-group-item">3. SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                            <li class="list-group-item">4. IDS (المضيف مركزي لجميع الخوادم)</li>
                            <li class="list-group-item">5. تقوية أجهزة الأمن</li>
                            <li class="list-group-item">6. مراجعة السياسات والإجراءات</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/download (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">حزمة العنب الأخضر</h5>
                        <ul class="list-group list-group-flush">
                            
                            
                            <li class="list-group-item">1. فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر<li>
                                
                                
                            <li class="list-group-item">2. مراقبة 24 ساعة على مدار الاسبوع</li>
                            
                            
                            
                            <li class="list-group-item">3. ادارة أجهزة الأمن</li>
                            
                            
                            
                            <li class="list-group-item">4. SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                            <li class="list-group-item">5. نظام كشف التسلل ومراقبة سلامة الملفات (مضيف مركزي لجميع الخوادم)</li>
                            <li class="list-group-item">6. تقوية أجهزة الأمن</li>
                            <li class="list-group-item">7. مراجعة السياسات والإجراءات</li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/kiwi-1624156-1375298.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">الكيوي الأخضر</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. فحص نقاط الضعف في الشبكة واختبار الاختراق مرة واحدة كل ثلاثة أشهر</li>
                            <li class="list-group-item">2. مراقبة 24 ساعة على مدار الاسبوع</li>
                            <li class="list-group-item">3. ادارة أجهزة الأمن</li>
                            <li class="list-group-item">4. SIEM ادارة معلومات الأمن وادارة الأحداث</li>
                            <li class="list-group-item">5. نظام كشف التسلل ومراقبة سلامة الملفات (مضيف مركزي لجميع الخوادم)</li>
                            <li class="list-group-item">6. تقوية أجهزة الأمن</li>
                            <li class="list-group-item">7. مراجعة السياسات والإجراءات </li>
                            <li class="list-group-item">8. AntiX </li>
                            <li class="list-group-item">9. دارة التهديدات</li>
                            <li class="list-group-item">10. أدوات وسائل التواصل الاجتماعي</li>
                            <li class="list-group-item">11. حماية العلامة التجارية / الاسم</li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/Cyber_Security_14-256.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">اختبار الانترنت</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. اختبار الاختراق (مراجعة الويب والشبكة والتطبيقات ومراجعة الرمز الأمان).</li>
                            <li class="list-group-item">2. إدارة الثغرات الأمنية</li>
                            <li class="list-group-item">3. RED Team</li>

                        </ul>

                    </div>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/cybersecurity.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">استشارات سيبيرانية</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. تقييم المخاطر</li>
                            <li class="list-group-item">2. SOC Architecture</li>
                            <li class="list-group-item">3. نموذج التهديد</li>
                            <li class="list-group-item">4. نموذج النضج الأمني وتسجيل المخاطر</li>

                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/ic_securityservices-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">خدمات الامتثال عبر الإنترنت</h5>
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

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/managed.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">حلول ادارة الامن السيبراني</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. إدارة التهديدات الموحدة - UTM</li>
                            <li class="list-group-item">2. جدار حماية تطبيق الويب - WAF</li>
                            <li class="list-group-item">3. رصد الوصول إلى قاعدة البيانات - DAM</li>
                            <li class="list-group-item">4. حماية البريد الإلكتروني</li>
                            <li class="list-group-item">5. حل تشفير البيانات</li>
                            <li class="list-group-item">6. إدارة الهوية - IDM</li>
                            <li class="list-group-item">7. إدارة الوصول إلى الامتيازات - PAM</li>
                            <li class="list-group-item">8. EDR – EPP</li>
                            <li class="list-group-item">9. APT</li>
                            <li class="list-group-item">10. الخداع الديناميكي</li>
                            <li class="list-group-item">11. حل التوعية</li>



                        </ul>
                    </div>
                </div>
            </div>





            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="PHOTOS/security-solutions.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">حلول الامن السيبراني المتقدمة</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. المدى السيبيري</li>
                            <li class="list-group-item">2. حماية اسم العلامة التجارية</li>
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
elseif($do=='cisco') {
    $id=isset($_GET['ciscoid'])&& is_numeric($_GET['ciscoid'])?intval($_GET['ciscoid']): 0;
    echo "<h1 class='trainingh1'>Cisco Courses</h1>";


  echo "<div class='course-container'>";
    $stmt1 = $con->prepare('SELECT * FROM `cisco_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        
        echo "<div>";

        echo "<img src='HTML/upload/course/$photos'/>";
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
      <form method="POST" action="homear.php?pages=newuser">
        <div>
          <input type="text" placeholder="Full Name" name="fullname" required>
          <input type="email" placeholder="E-mail" name="email" required>
        </div>
        <div>
            <select name="courses">
                <?php
                foreach ($row1 as $course) {
                    $courserequest=$course['Course_name'];
                    echo "<option value='$courserequest'>".$course['Course_name']."</option>";
                }
                ?>
            </select>
          <input type="number" placeholder="Phone Number" name="number" required>

        </div>
        <textarea placeholder="Message" name="message"></textarea>
        <input type="submit" name="save" value="Send">
      </form>
    </div>




  </div>

  <?php
}


elseif($do=='software') {

    $id=isset($_GET['softwareid'])&& is_numeric($_GET['softwareid'])?intval($_GET['softwareid']): 0;

    echo "<h1 class='trainingh1'>Software Courses</h1>";
  echo "<div class='course-container'>";
    $stmt1 = $con->prepare('SELECT * FROM `software_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];

        echo "<div>";

        echo "<img src='HTML/upload/course/$photos'/>";
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
            <form method="POST" action="homear.php?pages=newuser">
                <div>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                <div>
                    <select name="courses">
                        <?php
                        foreach ($row1 as $course) {
                          $courserequest=$course['Course_name'];
                            echo "<option value='$courserequest'>".$course['Course_name']."</option>";


                        }
                        ?>
                    </select>
                    <input type="number" placeholder="Phone Number" name="number" required>

                </div>
                <textarea placeholder="Message" name="message"></textarea>
                <input type="submit" name="save" value="Send">
            </form>
        </div>




    </div>
    
    
    
    
    </div>
  
    <?php
}





elseif($do=='ec') {
    $id=isset($_GET['ecid'])&& is_numeric($_GET['ecid'])?intval($_GET['ecid']): 0;

    echo "<h1 class='trainingh1'>EC-councel Courses</h1>";
  echo "<div class='course-container'>";
    $stmt1 = $con->prepare('SELECT * FROM `ec_course`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div>";

        echo "<img src='HTML/upload/course/$photos'/>";
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
            <form method="POST" action="homear.php?pages=newuser">
                <div>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                <div>
                    <select name="courses">
                        <?php
                        foreach ($row1 as $course) {
                         $courserequest=$course['Course_name'];
                            echo "<option value='$courserequest'>".$course['Course_name']."</option>";


                        }
                        ?>
                    </select>
                    <input type="number" placeholder="Phone Number" name="number" required>

                </div>
                <textarea placeholder="Message" name="message"></textarea>
                <input type="submit" name="save" value="Send">
            </form>
        </div>




    </div>

  <?php
}

elseif($do=='others') {
    $id=isset($_GET['otherid'])&& is_numeric($_GET['otherid'])?intval($_GET['otherid']): 0;

    echo "<h1 class='trainingh1'>Other Courses</h1>";
  echo "<div class='course-container'>";
    $stmt1 = $con->prepare('SELECT * FROM `others`');
    $stmt1->execute();
    $row1 = $stmt1->fetchAll();
    foreach ($row1 as $course) {
        $photos = $course['photos'];
        $id=$course['id'];
        echo "<div>";

        echo "<img src='HTML/upload/course/$photos'/>";
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
            <form method="POST" action="homear.php?pages=newuser">
                <div>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                <div>
                    <select name="courses">
                        <?php
                        foreach ($row1 as $course) {
                            $courserequest=$course['Course_name'];

                            echo "<option value='$courserequest'>".$course['Course_name']."</option>";


                        }
                        ?>
                    </select>
                    <input type="number" placeholder="Phone Number" name="number" required>

                </div>
                <textarea placeholder="Message" name="message"></textarea>
                <input type="submit" name="save" value="Send">
            </form>
        </div>




    </div>
  <?php
}
elseif ($do=='newuser'){
    if(isset($_POST['save'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['number'];
        $s1=$_POST['courses'];
        $message=$_POST['message'];
        $stmt=$con->exec("INSERT INTO `courses_request` (`id`, `fullname`, `email`, `phone`, `course`, `message`) VALUES (NULL, '$fullname', '$email', '$phone', '$s1', '$message')");
         header("location:index.php?pages=cisco");
         $msg="FullName: ".$fullname."\n"."Email: ".$email."\n"."PhoneNumber :".$phone."\n"."course :".$s1."\n"."Message :".$message."\n";

         
         mail("register@joransom.com","New Register",$msg);

    }

}

else{
   header("location:homear.php");
   exit();

}
ob_end_flush();
?>
<footer id="thefooter">
    <div>
        <img src="../PHOTOS/logo.svg">
    
    </div>
    <div>
        <h3>تواصل معنا</h3>
        <p><a href="https://maps.app.goo.gl/PRXcpVLVFkGmUBTCA" target="_blank">الاردن-اربد</a></p>

           <p><a href="tel:0096227277760">0096227277760</a></p> 

    <p><a href="https://wa.link/7y545l" target="_balnk">00962776277760</a></p>
        <p><a href="mailto:info@joransom.com">info@joransom.com</a></p>

    </div>
    <div>
        <h3>روابط</h3>
        <p><a href="homear.php">الرئيسية</a></p>
        <p><a href="homear.php?pages=cisco">الدورات</a></p>
        <p><a href="homear.php?pages=solutions">الخدمات</a></p>
    </div>
    <div>
        <h3>التواصل الاجتماعي</h3>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>


    </div>

</footer>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="bootstrap-5.0.1-dist/js/bootstrap.js"></script>


<script src="JS/home.js"></script>
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




</script>
</body>
</html>