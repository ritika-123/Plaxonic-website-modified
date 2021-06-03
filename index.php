<?php 
session_start();
if(isset($_POST['submit'])){
	header('Location:'.$_SESSION['redirectURL']);


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Plaxonic world</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet"/>
<link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">
</head>
<body>
	

	 <nav class="navbar col-md-12 navbar-expand-lg navbar-light  navbar-fixed-top">
  <a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: white;">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="AIautomation.php"style="color: white;">AI &amp;
                                        Automation</a>
          <a class="dropdown-item" href="BusinessApp.php"style="color: white;">Business
                                        Applications</a>
          <a class="dropdown-item" href="Blockchain.php"style="color: white;">Blockchain</a>
          <a class="dropdown-item" href="Cloud.php"style="color: white;">Cloud</a>
          <a class="dropdown-item" href="DigitalTransformation.php"style="color: white;">Digital
                                        Transformation</a>
          <a class="dropdown-item" href="MobileApp.php"style="color: white;">Mobile App</a>
          <a class="dropdown-item" href="web-development.php"style="color: white;">Website
                                        Design &amp; Development</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: white;">TECH STACK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="color: white;">ABOUT US</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contact"style="color: white;">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

<!--carousel-->

	
<div id="carousel-fade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="img-move">
      	
      	<img src="images/kullu2.png" class="move2 img-fluid lazy">
      </div>
      <div class="carousel-caption animated container slideInRight">

      <h2>Drive Your Business On the<br>Wheels Of Digitalization    </h2>
  </div>
      <div class="img-move">
        <img src="images/move11.png" class="img-fluid move1" style="border-style: none;padding-right: 5px;">
      </div>
  
    </div>
    <div class="carousel-item">
    
    	<div class="left-img">
    		<img src="images/banner-2nd-shape.png" class="img-fluid">
    	</div>
      <div class="img-move">
      	
      	<img src="images/move10.png" class="move2 img-fluid lazy">
      </div>
      <div class="carousel-caption  animated slideInRight">
        <h2>Keeping Clients Aligned With <br>Up-to-date Technologies  </h2>
    </div>
      
        

    </div>
    <div class="carousel-item">
    	
    	<div class="img-move">
    		<img src="images/banner-3rd-shape2.png" class="move1 img-fluid">
    		<img src="images/banner-3rd-shape.png" class="move3 img-fluid">
       	</div>
     
      <div class="carousel-caption animated slideInRight">
        <h2>Channelizing Our Strengths &<br>Resources For Societal Impact</h2>
    </div>

        <div class="carousel-img img-fluid animated fadeInUp">
        <img src="images/banner-3rd-img.png">
      </div>
      <div class="img-move">
      	<img src="images/banner-3rd-shape3.png" class="move2 img-fluid">
      	<img src="images/banner-3rd-shape4.png" class="move4 img-fluid">
      </div>
    
</div>
     <div class="carousel-item">
     	<div class="img-move">
     		<img src="images/banner-4th-left-corner-shape.png" style="width:5%;" class="img-fluid move2 lazy">
     		
     	</div>
    
      <div class="carousel-caption animated slideInRight">
        <h2>Channelizing Our Strengths &<br>Resources For Societal Impact</h2>
    </div>
       
     <div class="img-move">
     		
     		<img src="images/banner-4th-smiley-1.png" style="padding-top: 0px;" class="img-fluid move3">
     		<img src="images/banner-4th-smiley2.png" style="padding-left: 0px;" class="img-fluid move1" >
     		<img src="images/move10.png" class="img-fluid move2" style="border-style: none;padding-right: 5px;">
     		

     	</div>
    
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carousel-fade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-fade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" style="" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--carousel ends-->
<div class="after-carousel">
	<img src="images/banner-strip.svg" class="img-fluid">
</div>



<!--main content-->
<section id="page-content">
	<div class="main-content">
		<div class="row container">
			<div class="col-md-6 col-lg-6 col-sm-12 main-content-img">
				<img src="images/move17.png" class="img-fluid content-move">

            	<img src="images/move15.png" class="img-fluid move-img">
       			
            <div class="main-content-move">
            	<img src="images/move12.png" class="img-fluid move-img">
            </div>
          </div>
			<div class="col-md-6 col-lg-6 col-sm-12 main-content-text">
				<h2>Embracing Challenges</h2>
				<hr>
				<p>Inventive, innovative, zealous & futuristic we are everything that’s required to serve enterprises through advanced digital solutions & research. We observe the ongoing trends and analyze the upcoming technologies to transform the digital persona of clients with our unbeatable performance.
				</p>

			</div>
			
			
		</div>
		<div class="row middle-part container"  id="techstack">
			<div class="col-md-6 col-lg-6col-sm-12 middle-part-inner">
				
					<img src="images/move16.png" class="img-fluid move-img">
			<h2>Technologies We Use</h2>
      <hr>
  	<div class="tab">
	<ul>
      <li><a href="#DigitalTransformation" id="defaultOpen" class="tablinks wow zoomIn" role="button" onclick="showContent(event,'DigitalTransformation')" data-scroll="Digital Transformation">
			<span>Digital Transformation</span></a></li>
   
     <li><a href="#AIAutomation" class="tablinks wow zoomIn" role="button"onclick="showContent(event,'AIAutomation')" data-scroll="Ai Automation"><span>AI Automation</span></a></li>

     <li><a href="#BusinessApplications" class="tablinks wow zoomIn"  role="button"onclick="showContent(event,'BusinessApplications')" data-scroll="Business Apllications"><span>Business Applications</span></a></li>
    <li><a href="#Blockchain" class="tablinks wow zoomIn" role="button"onclick="showContent(event,'Blockchain')" data-scroll="Blockchain"><span>Blockchain</span></a></li>
    </ul>
	</div>
</div>
        <div class="col-md-6 col-lg-6 col-sm-12 middle-part-inner2">
			<div class="tabcontent"id="DigitalTransformation">

				<img src="images/ai2.png" class="wow animated slideInRight img-fluid">
				<div class="text wow animated slideInRight">
				<h3>Digital Transformation</h3>
				<p>Digital revolution is pushing businesses of every size and
         shape in all industries to reimagine their strategy and growth.
				 It has become a non-negotiable requirement to find new growth and competitive advantage.
				</p>
        <p>In today’s constantly changing corporate sector, digital
                                            marketing acts as a mentor for businesses and guides them the path to build,
                                            accelerate and sustain their brand’s position &amp; fame over global online
                                            platforms.</p>
			</div>
			</div>
			<div class="tabcontent"id="AIAutomation">
				
				<img src="images/aiautomate2.png" style="width: 40%;"class="wow animated slideInRight img-fluid">
				<div class="text wow animated slideInRight">
				<h3>AI Automation</h3>
				<p>Monetize your growing data with our advanced analytics, and AI/ML expertise in less than 4 weeks.Transform your processes, people, products, services and conversations using actionable intelligence with our premium data analytics, AI/ML, and deep learning services.</p>
        <p>By cautiously automating required business operations, we
                                            infuse our proven practices to meet needs of businesses and maximum the ROI
                                            tremendously.</p>
			</div>
			</div>
			<div class="tabcontent" id="BusinessApplications">
				<img src="images/businessapp2.png" class="wow animated slideInRight img-fluid">
				<div class="text wow animated slideInRight">
				<h3>Business Applications</h3>
				<p>Harness the full potential of your ERP, CRM, and E-commerce systems to ensure business growth. Synoptek’s highly experienced team can help you identify, assess, and bridge the gaps in your Business Applications stack.</p>
        <p>Our experts let our clientele to use, integate and execute
                                            each &amp; every business application we have in our panel. Our talented and
                                            professional consultants excel in offering consulation to assure return on
                                            technology investments of our partnered businesses grows at every step. </p>
			</div>
			</div>
			<div class="tabcontent" id="Blockchain">
				<img src="images/blockchain-img2.png" class="wow animated slideInRight img-fluid">
				<div class="text wow animated slideInRight">
				<h3>Blockchain</h3>
				<p>Instilling life into ideas happens through blockchain strategies. An undeniably
                                        crucial element of the future generation, the technology holds the potential to
                                        redefine online interactions in every aspect possible.
                                        Implementing blockchain gives ways to
                                        protected plus accountable transactions.</p>
        <p>Our team puts forward its expertise in digital
                                            transformation as well as platform integration and merge them with
                                            blockchain to serve our clientele with value added services. Be it
                                            cyptographic algorithm or auditing the smart contracts, our genius minds do
                                            everything without a fail.</p>
			</div>
			</div>
			
			</div>
			
			
		</div>
  </div>
  
  </section>
	
<section id="location">
    <div class="row location-slider wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <div class="col-md-8 slick-slider-inner">
            <span></span>
            <div class="slider slider-single">
                <div class="container">
                	<img src="images/india.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>INDIA</h3>
                			<p>  ADDRESS
                				<address>B-10, Sector 59, 201301, INDIA</address>
                				<br>
                				PHONE: +91-120-4211120
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>

                <div class="container">
                	<img src="images/hongkong.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>HONG KONG</h3>
                			<p>  ADDRESS
                				<address>Room 901, Centre Point, 181-185 Gloucester Road, Wan Chai, Hong Kong</address>
                				<br>
                				PHONE: +1-800-3684805
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/dubai.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>DUBAI</h3>
                			<p>  ADDRESS
                				<address>Techno Hub 2, Dubai Silicon Oasis (DSO), Dubai, UAE</address>
                				<br>
                				PHONE: 0509250114
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/usa.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>UNITED STATES OF AMERICA</h3>
                			<p>  ADDRESS
                				<address>102 Tarpon Ave, Tarpon Springs, FL 34689, US</address>
                				<br>
                				PHONE: +1-800-3684805
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/japan.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>JAPAN</h3>
                			<p>  ADDRESS
                				<address>580-0015 4-23-7 Shindou, Matsurba, Osaka, Japan</address>
                				<br>
                				PHONE: 0509250114
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/india.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>India</h3>
                			<p>  ADDRESS
                				<address>B-10, Sector 59, 201301, INDIA</address>
                				<br>
                				PHONE: +91-120-4211120
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/hongkong.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>HONG KONG</h3>
                			<p>  ADDRESS
                				<address>Room 901, Centre Point, 181-185 Gloucester Road, Wan Chai, Hong Kong</address>
                				<br>
                				PHONE: +1-800-3684805
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/dubai.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>DUBAI</h3>
                			<p>  ADDRESS
                				<address>Techno Hub 2, Dubai Silicon Oasis (DSO), Dubai, UAE</address>
                				<br>
                				PHONE: 0509250114
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/usa.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>UNITED STATES OF AMERICA</h3>
                			<p>  ADDRESS
                				<address>102 Tarpon Ave, Tarpon Springs, FL 34689, US</address>
                				<br>
                				PHONE: +1-800-3684805
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
                <div class="container">
                	<img src="images/japan.jpg">
                	<div class="overlay">
                		<div class="text">
                			<h3>JAPAN</h3>
                			<p>  ADDRESS
                				<address>580-0015 4-23-7 Shindou, Matsurba, Osaka, Japan</address>
                				<br>
                				PHONE: 0509250114
                				<br>
                				EMAIL:
                				<email>contact@plaxonic.com</email>

                			</p>
                		</div>
                	</div>
                </div>
            </div>
            <div class="slider slider-nav">
                <div><img src="images/india-small.jpg"></div>
                <div><img src="images/hongkong-small.jpg"></div>
                <div><img src="images/dubai-small.jpg"></div>
                <div><img src="images/usa-small.jpg"></div>
                <div><img src="images/japan-small.jpg"></div>
                <div><img src="images/india-small.jpg"></div>
                <div><img src="images/hongkong-small.jpg"></div>
                <div><img src="images/dubai-small.jpg"></div>
                <div><img src="images/usa-small.jpg"></div>
                <div><img src="images/japan-small.jpg"></div>
            </div>
        </div>
        <div class="col-md-4 title">
          <h2>OUR OFFICES</h2>
          <hr>
        </div>
    </div>
</section>

		<div class="row contact container" id="contact">
			<div class="col-md-6 contact-img">
				<div class="wow zoomIn" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
					<img src="images/contact-img.jpg">
				</div>
			</div>
				<div class="col-md-6 contact-inner container wow zoomIn" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
					<h3>CONTACT US</h3>
					<form class="contact-form" action="contactform.php" method="POST">
						<input type="text" name="name" placeholder="Your Full Name">
						<input type="text" name="mail" placeholder="Your Email Address">
						<input type="text" name="subject" placeholder="Subject">
						<textarea name="message" placeholder="Your Message to Us"></textarea>
						<button type="submit" name="submit">CONNECT</button>
						
					</form>
				</div>
				
			
			
		</div>
		
	




<!--footer-->

  
  <footer class="footer-distributed">

    <div class="footer-icons wow zoomIn" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
<br>
          <a href="https://www.facebook.com/profile.php?id=100009534396338"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/RitikaChauras14"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/ritika-chaurasia-bb790bb6"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/hrithikachaurasia/"><i class="fa fa-instagram"></i></a>

        </div>

       <div class="nav-copy">
 
        <p class="footer-links wow zoomIn"  style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;" >
           <a href="index.php" style="color: #000;">ABOUT</a>
          · 
          <a href="index.php" style="color: #000;">SERVICES</a>
          ·
          <a href="index.php" style="color: #000;">TECH STACK</a>
          ·
          <a href="about.php" style="color: #000;">ABOUT US</a>
          ·
          <a href="contact.php" style="color: #000;">CONTACT US</a>
      
        </p>

        <p class="footer-company-name">&copy; All Rights Resereved With Us.</p>
      </div>


  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="jquery.min.js"></script>
<script src="slick.min.js"></script>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="wow.js"></script>

<script>
      (function($){
        "use strict";
        $('.next').click(function(){$('.carousel').carousel('next');return false;});
        $('.prev').click(function(){$('.carousel').carousel('prev');return false;});
      })
      (jQuery);
    </script>
 
    <script type="text/javascript">
    	$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll>300){
      $(".navbar").css("background", "rgba(197,205,245,0.5)");
      $(".navbar ul.navbar-nav li.nav-item a").css("color", "black");
      
    }
    else{
      $(".navbar").css("background","transparent");
      $(".navbar ul.navbar-nav li.nav-item a").css("color", "white");
    }
  });
});
    </script>
    <script>
function showContent(evt, idName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(idName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
 <script>
 	
$('.slider-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.slider-nav')
    .on('init', function(event, slick) {
        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        slidesToShow: 10,
        slidesToScroll: 10,
        dots: false,
        focusOnSelect: false,
        infinite: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        }, {
            breakpoint: 420,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
        }
        }]
    });

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $('.slider-single').slick('slickGoTo', goToSingleSlide);
 });
 </script>

</body>
</html>