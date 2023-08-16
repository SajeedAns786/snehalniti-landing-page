<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from startupwebtech.com/templates/flatvault/main/lead-capture/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 09:40:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title> उद्योजकता - एक करिअर| Snehalniti</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Style Sheet -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css2?family=Karma:wght@400;500&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="css/style.css" rel="stylesheet">
<!--<link rel="shortcut icon" href="img/favicon.png">-->
</head>
<body>

 <style type="text/css">
   * , h1,h2,h3,h4,h5
   {
    font-family: 'Karma', sans-serif;
   }
   .fa-padd
   {
    padding-right: 20px;
  
    padding: 5px;
    text-align: center;
   }
 </style> 
<!-- =========================
     Pre-loader 
============================== -->

<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div id="object"></div>
        </div>
    </div>
</div> -->

<!-- =========================
     Section1 - Header   
============================== -->
  <div class="jumbotron">
    <div class="container"> 
      <div class="row">
        <!-- Header Left -->
        <div class="col-sm-7">
          <div class="logo anileft">
            <a href="#"><img alt="" src="img/logo.png">
          </a></div>
          <div class="verticle-line ">
<h1 class="anileft" style="font-weight: 600;">ग्राहकांना आकर्षित कसे कराल ?...<br>
 </h1>          </div>
<p class="anibottom" style="font-size: 2.2rem;">मराठीमध्ये प्रथमच<br>स्नेहलनीतीचा 2 तासांचा प्रॅक्टिकल आणि प्रभावशाली ऑनलाईन ट्रेनिंग प्रोग्रॅम; <br>प्रत्येक मराठी उद्योजकांसाठी आणि उद्योजक होण्याची इच्छा असणाऱयांसाठी. </p>

          <!--<h2 style="font-size: 2.5rem;
    font-weight: 500;"><i class="fa fa-calendar fa-padd"></i> 20 डिसेंबर 2020</h2>-->
    <?php $event = date('d-M-Y'); ?>
    
<!--<h1 style="font-size: 2.5rem;
font-weight: 600;"></i> &nbsp;&nbsp;&nbsp;&nbsp;बुधवार&nbsp; 24 मार्च 2021 </h1-->
         <h2 class="anibottom" style="font-size: 2.5rem;
font-weight: 500;"><i class="fa fa-clock-o fa-padd"></i>रविवार स. 11.00 ते दु. 1.00 </h2>
 <!-- <h2 style="font-size: 2.5rem;
    font-weight: 500;"><i class="fa fa-clock-o fa-padd"></i> सकाळी 10:00 ते 12:00 </h2>-->
          <h2 class="anibottom" style="font-size: 2.5rem;
    font-weight: 500;"><i class="fa fa-map-marker fa-padd"></i>तुमचा मोबाईल फोन / लॅपटॉप</h2>
          
 </div>


 <!-- <p>
   <i class="fa fa-calendar"></i> रविवार, 25 ऑक्टोबर 2020   
 </p> <br>
 <p>
   <i class="fa fa-clock-o" aria-hidden="true"></i> रविवार, 25 ऑक्टोबर 2020   
 </p>
          
सकाळी 10.00 ते दुपारी 12.00 
स्थळ - तुमचा मोबाईल फोन / लॅपटॉप  -->
         
        
        <!-- /End Header Left --> 
        <!-- Header Form -->
        <div class="col-sm-5 aniright" id="join-us-form"> 
          <!-- Form Title -->
               <h2 class="form-title"> <span style="font-size: 18px">यशस्वी उद्योजकांच्या समूहाचा भाग व्हा…  </span> <br> <span style="font-size: 21px">आजच आपले नाव नोंदवा</span> 
          <span class="arrow-down"></span>
              </h2>
          <!--- /End Form Title -->
		<div class="form-bg">
          <div id="join-us-results"></div>
          <!-- Form -->
          <form action="mail.php" method="post">
		    <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control f-input input-field" placeholder="First Name" required=""/>
            </div>
            
            <div class="form-group">
              <input type="email" name="email" class="form-control f-input input-field" placeholder="Email" required="" />
            </div>
            <div class="form-group">
              <input type="text" name="phone" maxlength="10"  class="form-control f-input input-field" placeholder="Phone" required="" />
            </div>

            <div class="form-group">
              <input type="text" name="location" maxlength="15"  class="form-control f-input input-field" placeholder="Location" required="" />
            </div>
            
             <div class="form-group">
              <input type="text" name="profession" maxlength="15"  class="form-control f-input input-field" placeholder="Profession" required="" />
            </div>
            
            <input type="hidden" name="eventdate" value="<?php echo $event; ?>" >
           
			<button type="submit" class="submit-btn" id="submit_btn">Submit</button>
          </div>
          <!-- /End Form --> 
          </form>
        </div>
        <!-- /End Header Form --> 
      </div>
    </div>
  </div>


<!-- =========================
     Section3 - Features   
============================== -->
<section id="feature-section">
  <div class="container">
    <div class=" col-md-12 white-bg"> 
      <!-- Features Left -->
      <div class="col-sm-5">
        <img alt="" src="img/webseminar.jpeg" class="img-responsive anileft">
      </div>
     
      <div class="col-sm-7 aniright" id = "martop">
          <h2 class="verticle-line">तुमचा बिजनेस वाढवण्याच्या नेमक्या पद्धती शिकून घ्या </h2>
        <p></p>
        <ul class="feature-list">
          <li>
            <div class="feature-bullet">1</div>
            <div class="feature-content">
               <h3>बिजनेसमधून भरपूर पैसे कसे कमवाल ?</h3>
               
            </div>
          </li>
          <li>
            <div class="feature-bullet">2</div>
            <div class="feature-content ">
 <h3>गरीब ते श्रीमंत ते धनाढ्य - हा प्रवास कसा कराल?</h3>

            </div>
          </li>
          <li>
            <div class="feature-bullet">3</div>
            <div class="feature-content">
                <h3> तसेच भरपूर पैसे कमावण्याचा शास्त्रीय फॉर्म्युला जाणून घ्या … </h3>
               
            </div>
          </li>
          
        </ul>


      </div>
      <!-- /End Features Left --> 
       
      <!-- Features Right -->
      
      <!-- /End Features Right --> 
  
 <!-- <div class="col-md-12 white-bg anibottom" style="text-align: center; padding-top: 20px; padding-bottom: 0px;">
      <h4 style=" padding: 10px; color: #e31e24;">मर्यादित जागा आहेत ... लगेचच नाव नोंदणी करा </h4>
  
    <div class="newsletter">
      
     <button class="submit_btn " data-toggle="modal" data-target="#exampleModal"> Register Now</button>
                
End mc_embed_signup
        </div>

  </div> -->

      
  </div>

</div>




</section>

<section id="feature-section">
  <div class="container">
    <div class=" col-md-12 white-bg"> 
      <!-- Features Left -->
      <div class="col-sm-6 anileft">
          <h2>
            स्नेहल कांबळे <br><span style="font-size: 25px;">- ₹ 1000 करोडचे मराठी बिजनेस कोच,</span>  </h2>
<p style="text-align: justify; font-size: 20px; color: #474c56; font-weight: 500;">या वर्कशॉपद्वारे बिझनेस कोच 'स्नेहल कांबळे' मराठी उद्योजकांना मराठीतून बिझनेसचे मार्गदर्शन देतात. आतापर्यंत जवळजवळ 4 लाखांपेक्षा अधिक उद्योजकांना त्यांनी ट्रेनिंग, कोचिंग आणि कन्सल्टिंगच्या माध्यमातून प्रेरित केले आहे. ते एक लेखक, संपादक, बिझनेस कोच आणि मोटिव्हेशनल स्पीकर असून आमचे स्नेहलनीती ह Youtube चॅनेल असून 5 लाखांहून जास्त सबस्क्रायबर्स आहेत आणि 2.4 करोडपेक्षा जास्त व्यूज आहेत ; <br> आमच्या स्नेहलनीती फेसबुक पेजवर 5.50 लाखांहून अधिक फॉलोवर्स आहेत.</p>      </div>
      <!-- /End Features Left --> 
      
      <!-- Features Right -->
      <div class="col-sm-6 phone-img aniright">
        <img alt="" src="img/cta_img.jpg">
      </div>
      <!-- /End Features Right --> 
  </div>
</div>
</section>

<!-- =========================
     Section4 - Design   
============================== -->
<!-- <section>
  <div class="container">
    <div class="col-md-12 red-bg">
    
    
      

      <div class="separator"></div>
      
    
      <div class="video-img"><img alt="" src="img/laptop.png">
        <div class="video">
         <iframe src="https://player.vimeo.com/video/88902745?color=ffffff" allowfullscreen></iframe>
        </div>
      </div>
    </div>
</div>
</section> -->
<!-- =========================
     Section5 - Benifits   
============================== -->


<!-- =========================
     Section6 - Clients   
============================== -->


<section>
  <div class="container">
      <h2>आमच्या ग्राहकांची मनोगते</h2>
    <div class="col-md-12 red-bg anileft">
    
    
      <div class="client-img"><img alt="" src="img/1.png"></div>
      
    
      <blockquote class="client-saying">
        <p>"स्नेहलनीतीला सामील झाल्यापासून व्यवसायात आमूलाग्र बदल झाला. पूर्वी ७०० कोटींचा आमचा बिझनेस होता. पण स्नेहल सरांच्या मार्गदर्शनानंतर आमचा बिझनेस १२०० कोटींवर गेला आहे. त्यासोबतच ४ लाख ग्राहक आम्हाला जोडले गेले आहेत. बिझनेस वाढविण्याची सिस्टीम, सेल्स, मार्केटिंग आणि स्ट्रॅटेजी स्नेहल सरांनी आम्हाला अगदी योग्य प्रकारे समजावतात. त्यामुळे १७०० कोटींचे आमचे लक्ष्य आहे आणि आम्हाला खात्री आहे की स्नेहलनीती सोबत ते १००% शक्य आहे." </p>
        <h3>कडुभाऊ काळे - Shree Sant Naggebaba Co-operative Bank, Nagar </h3> </blockquote>
    </div>

    <div class="col-md-12 red-bg aniright" style="margin-top: 10px;">
    
    
      <div class="client-img"><img alt="" src="img/2.png"></div>
      
    
      <blockquote class="client-saying">
        <p>"संदीप यांचे चार हॉटेल्स असून त्याची 150 जणांची टीम आहे. तसेच त्यांनी आपला टर्नओव्हर 2 कोटींपासून 15 कोटींपर्यंत केला आहे. त्यांनी आपला बिझनेस 800 टक्क्यांनी वाढविला आहे." </p>
        <h3>संदीप कुटे - 
S.K Group of Companies</h3> </blockquote>
    </div>

     <div class="col-md-12 red-bg anileft" style="margin-top: 10px;">
    
    
      <div class="client-img"><img alt="" src="img/3.png"></div>
      
    
      <blockquote class="client-saying">
        <p>"मराठी उद्योजक राजाराम घावते यांचा 'गंगा कन्स्ट्रक्शन' नामक व्यवसाय आहे. 10X ॲडव्हान्स कोर्स करण्यापूर्वी घावते यांची कंपनी पूर्वी 70 कोटींपर्यंतच सीमित होती. बिझनेस कोच स्नेहल कांबळेंच्या बिझनेस ज्ञान आणि स्ट्रॅटेजीझमुळे त्यांचा बिझनेस 100 कोटींवर पोहोचला आहे.

" </p>
        <h3>राजाराम घावते - 
Ganga Construction</h3> </blockquote>
    </div>

<div class="row">

  <style type="text/css">
    .embed-responsive{
      margin-top: 10px; 
    }
  </style>
               <!--<div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yFjsrIbSleA" allowfullscreen></iframe>
</div>
                       
                      
                  </div>
               </div>-->
               <div class="col-lg-4 wow fadeInUp anileft" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                     
                           <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/L41cRJmPZVw" allowfullscreen></iframe>
</div>
                     
                  </div><!-- post end-->
               </div><!-- col end-->
              
               <div class="col-lg-4 wow fadeInUp anileft" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                      
                        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2HWAzjCqUl0" allowfullscreen></iframe>
</div>
                   
                  </div><!-- post end-->
               </div><!-- col end-->
                <div class="col-lg-4 wow fadeInUp anileft" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                     
                            <div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_zUoWB0I5E4" allowfullscreen></iframe>
</div>
                  
                  </div><!-- post end-->
               </div><!-- col end-->
                <div class="col-lg-4 wow fadeInUp aniright" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                      
                         <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R8F9V0yHXpM" allowfullscreen></iframe>
</div>
                     
                  </div><!-- post end-->
                  </div><!-- col end-->
                   <div class="col-lg-4 wow fadeInUp aniright" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                     
                         <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A0f0qf9Vvp0" allowfullscreen></iframe>
</div>
                      
                  </div><!-- post end-->
               </div><!-- col end-->
                <div class="col-lg-4 wow fadeInUp aniright" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                      
                              <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FPbsh1FXc8k" allowfullscreen></iframe>
</div>
                     
                  </div><!-- post end-->
               </div><!-- col end-->

               <!--   <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                 <div class="post">
                     
                           <video id="myVideo" style="max-width:100%; height:auto" playsinline controls="true">
                      <source src="video/7.mp4"/>
                      <source src="video/7.mp4"  type="video/webm; codecs=vp8,vorbis"/>
                        <source src="video/7.mp4" type="video/ogg; codecs=theora,vorbis"/>
                    </video>
                      
                  </div>
               </div> --><!-- col end--> 

              
               
            </div>
  </div>

</section>


<section>
  <div class="container">
    <div class="white-bg">
    
     
      <h3>- ₹ 1000 करोडचे मराठी बिजनेस कोच, स्नेहल कांबळे यांचे प्रेरणादायी व्हिडीओ पहा</h3>
      
      <div class="separator red"></div>
      <div class="clearfix" style="margin-top: 10px;"> 
      
       
        <div class="col-md-6 anileft ">
            <br>
            <div class="embed-responsive embed-responsive-16by9">
        <iframe width="540" height="300" src="https://www.youtube.com/embed/HjXT6m9Zb5Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       </div>
      
        <div class="col-md-6 aniright">
             <br>
            <div class="embed-responsive embed-responsive-16by9">
          <iframe width="540" height="300" src="https://www.youtube.com/embed/cGvsYvg2_Q0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>
<!-- =========================
     Section7 - Price   
============================== -->
<!-- <section>
  <div class="container">
  	<div class="row">
     
      <div class="col-md-4">
      	<div class="price-bg">
            <div class="price-circle">55<span>$</span></div>
            <h4>BASIC PRICING</h4>
            <div class="price-seprator red"></div>
            <ul class="price-list">
              <li>Design + Html5</li>
              <li>Responsive</li>
              <li>Blog Page</li>
              <li>Pagewiz Framework</li>
            </ul>
            <button class="price-btn">View Detail</button>
        </div>
      </div>
    
      
   
      <div class="col-md-4">
      	<div class="price-bg red">
            <div class="price-circle">75<span>$</span></div>
            <h4>PRO PRICING</h4>
            <div class="price-seprator"></div>
            <ul class="price-list">
              <li>Design + Html5</li>
              <li>Responsive</li>
              <li>Blog Page</li>
              <li>Pagewiz Framework</li>
            </ul>
            <button class="price-btn">View Detail</button>
        </div>
      </div>
      
      <div class="col-md-4">
      	<div class="price-bg">
            <div class="price-circle">95<span>$</span></div>
            <h4>ELITE PRICING</h4>
            <div class="price-seprator red"></div>
            <ul class="price-list">
              <li>Design + Html5</li>
              <li>Responsive</li>
              <li>Blog Page</li>
              <li>Pagewiz Framework</li>
            </ul>
            <button class="price-btn">View Detail</button>
        </div>
      </div>
    
    </div>
  </div>
</section> -->

<!-- =========================
     Section8 - Subscribe   
============================== -->
<section id="subscribe-bg">
  <div class="container">
    <div class="col-md-12">
    
    <!-- Section Heading -->
<h2>उद्योजकता - एक करिअर </h2>   

<p>फक्त बिजनेस सुरु करू नका; त्याला यशस्वी करा . मराठीमध्ये प्रथमच संपूर्णतः नवीन, प्रॅक्टिकल आणि प्रभावशाली वेबिनार. प्रत्येक मराठी उद्योजकांसाठी आणि उद्योजक;  होण्याची इच्छा असणाऱयांसाठी </p>

      <div class="separator"></div>

      <!-- Newsletter -->
      <div class="clearfix">
      <div class="newsletter">
      
     
     <button class="submit_btn" data-toggle="modal" data-target="#exampleModal"> Register Now</button>
                
                      
          
             

<!--End mc_embed_signup-->
        </div>
        
        <!-- Social Media -->
        <div class="social">
         
          <ul class="social-icons">
            <li><i class="fa fa-envelope"></i> support@snehalniti.com</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> +91-8850473847
</li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center;">
        <h3 class="modal-title" id="exampleModalLabel">आपले नाव नोंदवा</h3>
       <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
       <form action="mail.php" method="post">
        <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control f-input input-field" placeholder="First Name" required=""/>
            </div>
            
            <div class="form-group">
              <input type="email" name="email" class="form-control f-input input-field" placeholder="Email" required="" />
            </div>
            <div class="form-group">
              <input type="text" name="phone" maxlength="10"  class="form-control f-input input-field" placeholder="Phone" required="" />
            </div>

            <div class="form-group">
              <input type="text" name="location" maxlength="15"  class="form-control f-input input-field" placeholder="Location" required="" />
            </div>
            
             <div class="form-group">
              <input type="text" name="profession" maxlength="15"  class="form-control f-input input-field" placeholder="Profession" required="" />
            </div>
            
            <input type="hidden" name="eventdate" value="<?php echo $event; ?>" >
           
      <button type="submit" class="submit-btn" id="submit_btn">Submit</button>
          </div>
          <!-- /End Form --> 
          </form>
      </div>
   <!--    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>






<!-- =========================
     Section9 - Copyright   
============================== -->
<footer class="copyright-section">
  <div class="container">
    <div class="col-md-12 ">
      <P>© Copyright 2020 <a href="http://snehalniti.com/" target="_blank">Snehalniti </a></P>
    </div>
  </div>
</footer>


<button class="submit_btn " id = "fixedbutton" data-toggle="modal" data-target="#exampleModal"> Register Now</button>

<!-- =========================
     Scripts   
============================== -->
<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="js/jquery.ajaxchimp.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>


</body>

<!-- Mirrored from startupwebtech.com/templates/flatvault/main/lead-capture/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 09:41:21 GMT -->
</html>
