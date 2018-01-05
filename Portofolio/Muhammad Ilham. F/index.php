<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PORTOFOLIO</title>

<!--MOBILE VIEW-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--FONTS-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,600,700' rel='stylesheet' type='text/css'>
<link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel='stylesheet' type='text/css'>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery.classyloader.min.js"></script>
<script src="js/responsive-nav.js"></script>
<script src="js/script.js"></script>
<script src="js/waypoints.min.js"></script>
<script>
    function commentSubmit() {
        if (form1.name.value == '' && form1.comments.value == '' && form1.email.value == '') {
            alert('Enter your message :)');
            return        
        }
        var name = form1.name.value;
        var comments = form1.comments.value;
        var email = form1.email.value;
        var xmlhttp = new XMLHttpRequest();
    
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comments_logs').innerHTML = xmlhttp.responseText; 
            }
        }
        xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments+'&email='+email, true);
        xmlhttp.send();
    }
    
        $(document).ready(function(e){
            $.ajaxSetup({cache:false});
            setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
        });
    </script>
</head>

<body>     
<div class="se-pre-con"></div>      
<!--HEADER-->
<div id="home">
<header>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            
        	<h1 class="logo"><a href="#home"></a>IlhamFt</h1>
            <nav  class="nav-collapse">
            	<ul>
                	<li class="menu-item active"><a href="#home">Home</a></li>
                    <li class="menu-item"><a href="#about">About Me</a></li>
                    <li class="menu-item"><a href="#family">Family</a></li>
                    <li class="menu-item"><a href="#skill">Skills</a></li>
                    <li class="menu-item"><a href="#contact">Contact</a></li>
                </ul>
            </nav> 
          </div> 
       </div>
     </div>
</header>  
</div> 
<section class="wrapper" id="banner">
	<div class="container">   
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
        	<p  class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Hi there! I'm the new kids jaman now try to build awesome websites portfolio. Enjoy it</p>
            
          
					<a href="#about" class="os-animation btn btn-2 btn-2a" data-os-animation="zoomIn" data-os-animation-delay="0.5s">LETS START!</a>
             </div>       
        </div>
    </div>
</section>

<!--ABOUT-->
<section class="wrapper" id="about">
	<div class="container">
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">WHO AM I ?</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Assalamualaikum Wr. Wb.</p>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-3">
            <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
                <img src="images\me.png" alt="image">
            </div>
                <figcaption class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
                    <div class="col-lg-9 col-md-9 col-sm-9">
                    <p>Let me introduce myself. My full name is Muhammad Ilham Fittrory, but you can call me Orik. I was born on December 27, 2000, so I am 16 years old. I live in Pauruan City with my parents. My hobbies are fishing and play basket. My goal is to become an Game Developer. I have two brothers and no sisters. 
                       I think it’s quite an introduction from me. Thank you very much for all the attention. Wassalamualaikum Wr. Wb.</p>
                    </div> 
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<!--FAMILY-->
<section class="wrapper" id="family">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">MEET MY HAPPY FAMILY </h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Families are the compass that guide us. They are the inspiration to reach great heights, and our comfort when we occasionally falter.</p>
                
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
            	<img src="images/mom.png" alt="image">
                
                <figcaption>
                	<h4>RETTY IKA. H</h4><br><br><br><br>
                    <span>Super MOM</span>
                    <p>a strong and patient mother was born in Pasuruan on September 21, 1973. She is a mother who looks young and sweet</p>
               </figcaption>
            </figure>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
            	<img src="images/dad.png" alt="image">
                
                <figcaption>
                	<h4>M. SYAFIUDIN. P</h4><br><br><br>
                    <span>Awesome Dad</span>
                    <p>a strong and wise father, was born in Pasuruan, January 28, 1973. He is a brave father and has unbearable love.</p>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
            	<img src="images/oza.png" alt="image">
                
                <figcaption>
                	<h4>M. IQBAL FAZZA</h4><br><br><br><br>
                    <span>My First Brother</span>
                    <p>an intelligent and lively child, born in Malang, August 17, 2006. he is a student at Grammar School. He is a child who loves adventure and experimenting.</p>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
            	<img src="images/obi.png" alt="image">
                
                <figcaption>
                	<h4>M. MIRZA SHABRI</h4><br><br><br><br>
                    <span>Youngest Brother</span>
                    <p>a brave and assertive boy, born in Malang, 28 February 2010. he is a student at Ma’arif 9 Kota Rhino. He is a child who in like many people because easy to mingle and be mature.</p>
                </figcaption>
            </figure>
         </div>
            
        </div>
    </div>
</section>

<!--SKILL-->
<section class="wrapper" id="skill">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">MY SKILLS ARE !</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">You do not need to be great to start something. Do it now and do not ever put off because the chance may not come twice.</p>
            </div>
        </div>
        <div class="row">
        				<div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
                                <div class="clearfix">
                                    <canvas class="loader"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader').ClassyLoader({
                                                percentage: 90,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(48,186,231,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                    
                                </div>
                                <span>Web Design</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
                                <div class="clearfix">
                                    <canvas class="loader1"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader1').ClassyLoader({
                                                percentage: 60,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(215,70,128,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                                <span>HTML/CSS</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
                                <div class="clearfix">
                                    <canvas class="loader2"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader2').ClassyLoader({
                                                percentage: 80,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(21,199,168,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                                <span>GRAPHIC DESIGN</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
                                <div class="clearfix">
                                    <canvas class="loader3"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader3').ClassyLoader({
                                                percentage: 85,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(235,125,75,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                               	<span>PHOTOGRHAPY</span> 
                            </div>
                        </div>
        </div>
    </div>
</section>

<!-- LOCATE ON MAP -->
<div class="accordion map"><h4>LOCATE ON MAP <span></span></h4></div>
   
        <div class="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.9927441108928!2d112.90760426351626!3d-7.6701819905697075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDAnMTEuOSJTIDExMsKwNTQnMjguNiJF!5e0!3m2!1sid!2sid!4v1506526213892" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
<!--GET IN TOUCH-->
<section class="wrapper" id="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">COMMENT ME !</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Pasuruan, East java, Indonesia, World, Space, Galaxy.</p>
            </div>
        </div>       
        	<form name="form1"  div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.8s">
            <div class="nameemail">
            	<div class="name">
            		<input type="text" name="name" placeholder="Your Name">
                </div>
                <div class="email">
                	<input type="email" name="email" placeholder="Your Email">
                </div>
            </div>    
            <textarea name="comments" placeholder="Your Message"></textarea>
               
               <a href="#contact" onClick="commentSubmit()" class="os-animation btn11 btn-211 btn-2a11" data-os-animation="zoomIn" data-os-animation-delay="0.5s">SEND MESSAGE</a><br>
                
            </form>
            <div id="comment_logs" class="os-animation" datas-os-animation="slideInleft" data-os-animation-delay="0.4s">Loading comments ....</div>
        </div>
    </div>
</section>

<!--FOOTER-->
<footer class="wrapper">
	<div class="container">
    	<div class="col-lg-12 col-md-12 col-sm-12">
            <p>©2017 <span>ilhamft.</span> All Right Reserved.</p>
            <p>Web Design by Muhammad Ilham Fittrory</p>
        </div>
      </div>      
</footer>

<!--JS-->
<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>
</body>
</html>