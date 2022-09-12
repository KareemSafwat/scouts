<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Scouts</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html">Scouts</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.html">Home</a> </li>
                              <li> <a href="#about">About Us</a> </li>
                              <li> <a href="#service">Our Work</a> </li>
                              <li> <a href="#shouts">Shouts list</a> </li>
                              <li> <a href="#blog">Blog</a> </li>
                              <li> <a href="#joinus">Join us</a> </li>
                              <li class="mean-last"> <a href="https://facebook.com/ArchAngelscout"><img src="images/kashafa3.png" alt="#" /></a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner 56.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1> </h1>
                        <p>  </p>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/wow22.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1> </h1>
                        <p>  </p>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner 44.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1></h1>
                        <p> </p>
                        
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="bottom_arrow_scroll" href="#about"><img src="icon/errow.png" /></a>
         </div>
      </section>
<!-- about  -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Archy Angelos Scouting group⚜️</h2>
                     <span>Our service, eyes, and hearts are on God's Altar.
                      </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row flexcss">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <div class="about-box">
                     <h3>We are a family not a team </h3>
                     <p>
                     في عشيرة أرشي أنجيلوس الكشفية احنا فعلا عيلة مش مجرد فريق او مجرد بنخدم مع بعض او صحاب حتي لا احنا حرفيا اخوات من اول القادة لحد اصغر فرد في العشيرة كلنا بنتعامل بمحبة و اخوة مع بعض وكلنا هدفنا هو الخدمة خدمة الكنيسة والمذبح هدفنا هو راحة الشعب وأهم حاجة اننا بنروح الخدمة مش عشان نخدم وبس لا عشان نصلي كمان جرب كدة تكون واقع ف مشكلة او ف حوار وتروح لحد من القادة وشوف هيساعدك ازاي وهيعمل معاك ايه خدمتنا هي تراب الكنيسة احنا بنخدم من اول تراب الكنيسة لحد الشعب علشان هدفنا اولا واخيرا هو راحة الشعب
                       
                     
                        
                     </p>

<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Kufam:wght@500&family=Silkscreen&display=swap" rel="stylesheet">                 
</div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                   <div class="about-img">

                     <figure><img src="images/meeting.jpg" alt="img"/></figure>

                  </div>

               </div>
            </div>
            <a href="#joinus">Join us now</a>
         </div>
      </div>
      <!-- end abouts -->

<!-- Download -->
 
      <!-- end Download -->

<!-- service -->
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services </h2>
                     <span>Our work in the church</span>
                     <link rel="preconnect" href="https://fonts.googleapis.com">
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/christmas.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/christmas.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/christmas.jpg" class="fancybox" rel="ligthbox">Christmas Festival</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/palm.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/palm.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/palm.jpg" class="fancybox" rel="ligthbox">Palm sunday</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/long friday.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/long friday.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/long friday.jpg" class="fancybox" rel="ligthbox">The long Friday</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/prepare1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/prepare1.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/prepare1.jpg" class="fancybox" rel="ligthbox">Preparing the church</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/promise 1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/promise 2.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/promise 1.jpg" class="fancybox" rel="ligthbox">The Promise Party</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/meeting 3.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/meeting.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/meeting.jpg" class="fancybox" rel="ligthbox">Our Meetings</a>
                        </span>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- our blog -->
      <div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Archy Angelos⚜️</h2>
                     <span>Not just a team , It's a family</span>
                     <link rel="preconnect" href="https://fonts.googleapis.com">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/christmas.jpg" alt="#"/>
                        <span>07 January 2022</span>
                     </figure>
                     <div class="travel">
                        <span>Posted  By :Kareem Safwat</span>
                        <p><strong class="Comment">  </strong>  </p>
                        <p><strong class="like"> </strong></p>
                     </div>
                     <h3>Christmas </h3>
                    <p> قامت عشيرة أرشي أنجيلوس الكشفية بتنظيم وترتيب صلوات واحتفالات عيد الميلاد المجيد بالكنيسة الموافق 7 يناير بحضور قائد العشيرة القائد كيرلس سمير وبمشاركة الكثير من اعضاء العشيرة بفريق الجوالة والمرشدات وفريق الكشاف المتقدم</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/meeting 3.jpg" alt="#"/>
                        <span>27 June 2022</span>
                     </figure>
                     <div class="travel">
                        <span>Posted  By : Kareem Safwat</span>
                        <p><strong class="Comment">  </strong>  </p>
                        <p><strong class="like"> </strong></p>
                     </div>
                     <h3>Our Meeting</h3>
                     <p>اليوم الخارجي لفريق كشاف متقدم يوم الاثنين 27/6 العاب ومسابقات بين الطلائع وتقييم افضل ساري علم التدريب علي عرض الاعلام </p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/promise.jpg" alt="#"/>
                        <span>17 August 2022</span>
                     </figure>
                     <div class="travel">
                        <span>Posted By : Kareem Safwat</span>
                        <p><strong class="Comment">  </strong>  </p>
                        <p><strong class="like"> </strong></p>
                     </div>
                     <h3>The promise party</h3>
                     <p>قامت عشيرة أرشي أنجيلوس الكشفية بعمل حفل الميثاق لفريق الكشاف المتقدم الموافق 16 أغسطس وعمل عرض الاعلام وبمشاركة القائد كيرلس هاني والقائد نيفين سمير وجميع قادة فريق المتقدم </p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/banner 3.jpg" alt="#"/>
                        <span>17 April 2022</span>
                     </figure>
                     <div class="travel">
                        <span>Posted  By : Kareem Safwat</span>
                        <p><strong class="Comment"> </strong>  </p>
                        <p><strong class="like"> </strong></p>
                     </div>
                     <h3>The Feast of the Resurrection</h3>
                     <p>قامت عشيرة أرشي أنجيلوس الكشفية بتنظيم وترتيب صلوات واحتفالات عيد القيامة المجيد بالكنيسة الموافق 17 ابريل بمشاركة جميع القادة والكثير من اعضاء فريق الكشاف المتقدم وفريق الجوالة والمرشدات وكل عام وانتم بخير</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our blog -->
      <!-- Testimonial -->
      <div id="joinus" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Join us</h3>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                  <div class="contact">

                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone number" type="text" name="Phone number">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Address" type="text" name="Address">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Why do you want to join us ?" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial -->
      <!--  footer -->
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="icon/3.png"> كنيسة الملاك ميخائيل والشهيد العظيم أبو سيفين عزبة المصاص, المنيا</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Links</h3>
                        <i><a href="https://ar.wikipedia.org/wiki/%D9%83%D8%B4%D8%A7%D9%81%D8%A9">
                           <img alt="fb" src="icon/1.png"</li>
                  </a> ما هي الكشافة؟</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><a href="https://www.facebook.com/ArchAngelscout">
         <img alt="fb" src="icon/fb.png"</li>
</a>
                        </ul>
                        <div class="logout">
    <p><a class="btn btn-danger" href="logout.php">Log out</a></p>
  </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <div class="address">
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>
   </body>
</html>
