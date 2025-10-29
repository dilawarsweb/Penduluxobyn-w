<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Penduluxobyn : Request accepted!</title>
        <meta property="og:title" content="Penduluxobyn : Request accepted!" />
        <meta property="og:image" content="main.svg"/>
        
        <meta property="og:description" content="Penduluxobyn : Request accepted!">
        <meta name="description" content="Penduluxobyn : Request accepted!"> 
        <meta name="twitter:title" content="Penduluxobyn : Request accepted!">
        <meta name="twitter:image:src" content="main.svg"/>
        

        <link rel="shortcut icon" href="{logo_img}" type="image/x-icon">
        <link rel="stylesheet" href="files/style/bootstrap.css">
        <link rel="stylesheet" href="files/style/slick.css">
        <link rel="stylesheet" href="files/style/slick-theme.css">
        

        <link rel="shortcut icon" href="main.svg" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <script src="files/script/jquery.min.js"></script>
        <script src="files/script/lightbox.js"></script>
        <script src="files/script/slick.js"></script>
        <script src="files/script/bootstrap.js"></script>

        
        
        </head>


        <body>

          

          <header class="header navbar bcg padding-style flex-row" id="top">
            <div class="container navbar-container ">
              <button class="header-burger-btn" id="burger">
                <span></span><span></span><span></span>
              </button>
              <a href="./"> 
                <div class="header-logo color-text">
                  <img class="img-logo" src="main.svg" >
                  <div>Penduluxobyn</div>
                </div>
              </a>
              <nav class="navbar-wrap">
                <ul class="nav-list">
                  <li class="nav-item"><a class="nav-link" href="./#ourservice">Our Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="./#aboutusid">About us</a></li>
                  <li class="nav-item"><a class="nav-link" href="./#reviewid">Customer Testimonials</a></li>
                  <li class="nav-item"><a class="nav-link" href="./#contactid">Contacts</a> </li>
                </ul>
              </nav>
            </div>
          </header>

            <div class="benefits bcg padding-style wrapper--contentvw">
                <div class="container">
                    <div class="container-marquee-infinite">
                    <div class="marquee-infinite">
                           <div class="benefit1">
                               <h2>Curated Selection Our collection features only the finest watches, chosen for their artistry, design, and enduring value.</h2>
                               <h2>Curated Selection Our collection features only the finest watches, chosen for their artistry, design, and enduring value.</h2>
                           </div>
                    </div>
                    <div class="marquee-infinite">
                        <div>
                            <h2>Expert Knowledge Our consultants offer deep insights and guidance, ensuring you make informed and confident decisions.</h2>
                            <h2>Expert Knowledge Our consultants offer deep insights and guidance, ensuring you make informed and confident decisions.</h2>
                        </div>
                    </div>
                    </div>
                </div>     
            </div>

            <div class="section-container-head padding-style">
                <div class="container">
                  <div class="container-head flex-row">
                      <div class="head-title">
                         <p>Welcome to Penduluxobyn, your exclusive destination for luxury timepieces that blend timeless elegance with masterful craftsmanship. Discover a curated collection that speaks to sophistication and individuality, supported by expert guidance and a seamless, transparent purchasing experience. Elevate your style with watches that transcend time, designed for those who value precision and refinement.</p>
                         
                      </div>
                   <div class="image-container">        
                       <img src="portrait/portrait_gallery_6902478833ceb4.06604030.jpg"  />
                   </div>
                  </div>
                </div>
            </div>

            


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-productefg__field{
		margin: 0px;
		padding: 0px;
		font-family: 'Reddit Sans', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 314px 0px;
	}
	.bodyClass1-productefg__field{
		background: #fffcfa;
		color: #000000;
	}
	.bodyClass2-productefg__field{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-productefg__field{
		background: #fff;
		color: #111;
	}
	.wrapage-block-productefg__field{
		background-size: 100%;
		width: 100%;
	}
	.box_main-productefg__field{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-productefg__field h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-productefg__field p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-productefg__field{
		text-align: center;
	}
	.mainBlock-productefg__field ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-productefg__field ul>li span{
		font-weight: bold;
	}
	.mainBlock-productefg__field{
		max-width: 844px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-productefg__field .cBlock-productefg__field{
		text-align: center;
	}

	.bodyClass3-productefg__field .mainBlock-productefg__field{
		background: none;
		border-top: 2px dashed #b4a5a5;
		border-bottom: 2px dashed #b4a5a5;
	}
	.bodyClass2-productefg__field .mainBlock-productefg__field{
		background: #03051E;
		color: #fff !important;
		box-shadow: 0px 0px 10px #03051E;
	}
	.bodyClass2-productefg__field .mainBlock-productefg__field p{
		color: #fff !important;
	}
	.bodyClass1-productefg__field .mainBlock-productefg__field{
		background: #ffffff;
		color: #000000;
		border-left: 3px solid #342056;
	}
	.bodyClass1-productefg__field .mainBlock-productefg__field p{
		color: #000000 !important;
	}
	.order-productefg__field{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-productefg__field p{
			padding: 0px 15px;
		  }
		  .box_main-productefg__field h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-productefg__field{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-productefg__field{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-productefg__field" id="mainWrapp-productefg__field">


	<div class="wrapage-block-productefg__field">
		<div class="box_main-productefg__field">
			<div class="mainBlock-productefg__field">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-productefg__field">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




            <style>
              body{
                  font-family: 'Zilla Slab', sans-serif !important;
                  direction: ltr;
                  font-size: 16px;
                  margin: 0;
                  overflow-x: hidden;
                  
              }
              :root{
                  --inner-background-black: #03051E;
                  --inner-background-white: #fbf7f0;
              }
              li{
                  list-style: none;
              }
              .content-block {
                padding:  21px;
              }
              .bcg {
              background-color:  #fbf7f0;
              }
              .bcg-grey {
                background-color: #00000008;
              }
              .color-text {
              color: #03051E;
              }
              .container {
                padding: 0;
                margin: 0 auto;
                box-sizing: border-box;
              }
             
              .padding-style {
              padding: 32px 0;
             }
              img {
                 max-width: 100%;
                 height: auto;
                 margin: auto;
              }
             .navbar {
              display: flex;
              align-items: center;
              justify-content: space-between;
              width: 100%;
              
             }
             .navbar.bcg {
              top: 0;
              width: 100%;
             }
             .navbar-container{
              display: flex; 
              align-items: center;
              flex-direction: row-reverse;
              justify-content: space-between;
              padding: 0;
               
             }
             .header-burger-btn {
              display: none;
              position: absolute;
              left: 10px;
              top: 10px;
              width:  35px;
              height: 40px;
              border: none;
              background-color: transparent;
              z-index: 10;
             }
             .header-burger-btn span {
              position: absolute;
              width: 30px;
              height: 3px;
              background-color: #03051E;
              left: 10px;
              transition: transform .5s, opacity .5s, background-color .5s;
  
             }
            
             .header-burger-btn span:nth-child(1) {
              transform: translateY(-10px);
             }
  
             .header-burger-btn span:nth-child(3) {
              transform: translateY(10px);
             }
             .header.open .header-burger-btn span {
              background-color: #006F5F;
             }
             .header.open .header-burger-btn span:nth-child(1) {
              transform: translateY(0) rotate(45deg);
             }
  
             .header.open .header-burger-btn span:nth-child(2) {
              opacity: 0;
             }
  
             .header.open .header-burger-btn span:nth-child(3) {
              transform: translateY(0) rotate(-45deg);
             }
  
             .header-logo{
              display: flex;
              align-items: center;
              gap: : 9px;
                
              }
              .header-logo img{
              margin-right: 18px;
              height: 60px;
              } 
              .header-logo div {
                color: #1F1D36;
                font-size: 36px;
              }
             .navbar-wrap {
              display: flex; 
              align-items: center;
              justify-content: space-between;    
              flex-wrap: wrap; 
             }
             .navbar-wrap a {
              text-decoration: none;
              padding: 0;
              margin-right: 21px; 
              display: flex; 
              color: #03051E;
              transition: text-decoration 0.6s ease;
              }
             .navbar-wrap a:hover{
              opacity: 0.4;
              color: #03051E;
              transition: all 200ms ease;
              text-decoration: underline;
              }
              .nav-list {
                display: flex;
                align-items: center;
                padding: 0;
                margin: 0;
              }
            
           
             .section-container-head {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 32px 0;
             }
             .container-head {
              display: flex;   
              align-items: center;
              margin: 11px 0;
  
             }
             .head-title {
              display: flex;
              flex-direction: column;
              align-items: center;
              max-width: 50%;
              margin: 30px;
             }
             .head-title p {
              margin-bottom: 24px;
              font-weight: 500;
              font-size: 26px;
             }
            .hero-button {
              border: none;
              color: #040807;
              padding: 30px;
              font-size: 13px;
              text-decoration: none;
              display: inline-block; 
              background-color: #fbf7f0;
              box-shadow: 2px 2px 11px 2px #ee4c65;
              animation: pulse 2s infinite;
             }
             @keyframes pulse {
             0% {
               transform: scale(1);
               box-shadow:  1px  1px 11px #ee4c65;
             }
             50% {
               transform: scale(1.05);
               box-shadow:  1px  1px 18px #ee4c65;
             }
             100% {
               transform: scale(1);
               box-shadow:  1px  1px 11px #ee4c65;
             }}
             .hero-button:hover {
             box-shadow: 4px 4px 15px 4px #ee4c65;
             }
            .image-container {
              overflow: hidden; 
             }
             .image-container img {
              max-width: 100%;
              height: auto;
             }  
             .image-container img {
              animation: zoomIn 3s;
             }
             @keyframes zoomIn {
              from {
                transform: scale(0); 
              }
              to {
                transform: scale(1); 
              }
            }
             .image-container img:hover {
              transition: transform 0.5s ease;
              transform: scale(1.1);
             }
             
         
             .section-service {
              display: flex;
              align-items: center; 
             }
             .container-service {
              display: flex;
              justify-content: center; 
              align-items: center;
              margin: 18px;
             }
             .left-column {
              flex: 1; 
              padding: 22px; 
              text-align: center;
             }
             .left-column h2,
             .left-column h3 {
                 display: block;
                 margin: 22px auto; 
             }
             
              .right-column {
              flex: 1; 
              padding: 22px; 
             }
             .right-column div {
              display: flex;
             }
             .right-column div span {
              font-size: 26px; 
              font-weight: bold;
              color:  #1F1D36; 
              margin-right: 11px;
             }
             .right-column p {
              font-size: 22px; 
             }
             .service-item {
              padding: 11px 0;
             }
             .border-bottom {
              border-bottom: 2px solid inherit;
             }
          
             .main-section {
              padding: 18px;
             }
             .main-contaier {
              max-width: 1200px;
              margin: 0 auto;
             }
             .main-image {
              flex: 0 0 auto;
             }
             .main-image img {
              width: 50%; 
              height: auto;
              float: left; 
              margin: 21px;
              }
             .color-text-main {
              margin: 11px;
              color: #040807;
             }
             .main-content {
              flex: 1 1 auto;
              padding: 24px;
             }
             .main-content li {
              list-style: disc;
             }
             .price {
              font-size: 22px;
              display: flex;
              color: #006F5F;
              margin:  18px 32px;
             }
           
             .how-work-section {
              text-align: center;
              padding: 24px;
             }
             .how-work-container {
              max-width: 1200px; 
              margin: 0 auto; 
              padding: 32px 0;
             }
             .how-work-title {
              margin: 18px;
              text-align: center;
             }
             .how-work-items {
              display:  flex;
              flex-wrap: wrap; 
              justify-content: space-around;
              align-items: flex-start; 
             }
             .how-work-item {
              display: flex;
              text-align: center;
              width: 258px;
              flex-direction:  column-reverse; 
              align-items: center;
             }
             .how-work-item img {
              max-width: 100%;
              margin: 21px 11px;
              border-radius: 7px;
              box-shadow: 10px 10px 8px 2px rgba(0, 0, 0, 0.3);
             }
             .how-work-item h5 {
              flex: 1;
              margin: 21px 11px;
  
             }  
             .how-work-img:hover {
              transition: transform 0.5s ease;
              transform: scale(1.1);
             }
           
           .reviews {
            display: flex;
              align-items: center; 
              min-width: 0;
           }
           .container-reviews-cusrtomer {
            display: flex;
              justify-content: space-evenly; 
              align-items: center;
              height: 644pxpx;
              min-width: 0;
           }  
           .lone {
            width: 100%;
           }
           .testimonial-section {
              position: relative;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0px 44px;
              min-width: 0;
              width: 670px;
              height: 670px;
             }
             .testimonial-section .slick-arrow{
              position: absolute;
              top: 50%;
              z-index: 10;
              font-size: 0;
              padding: 10px;
              width: 30px;
              height: 30px;
             }
             .testimonial-section .slick-arrow.slick-prev{
              left: 0;
              background: url('images/left-arrow.svg') 0 0 / 100% no-repeat;
              z-index: 20;
              
              
             }
             .slick-prev:before,
             .slick-next:before {
              color: transparent;
             }
             .testimonial-section .slick-arrow.slick-next{
              right: 0;
              background: url('images/right-arrow.svg') 0 0 / 100% no-repeat;
              z-index: 20;
             }
             .testimonial {
              position: relative;
              display: flex;
              justify-content: space-between;
              align-items: flex-start;
              padding: 18px 44px;
              border-radius: 5px;
              width: 600px;
              height: 550px;
              margin: 0px auto;
              transition: transform 0.8s ease-in-out;
              opacity: 1;
             }
             .testimonial.active {
              display: flex;
              }
             .testimonial.hidden {
              transform: translateX(-100%);
              opacity: 0;
             }
             .hidden {
              position: absolute;
             }
             .reviews-title {
              text-align: center;
             }
             .reviews-img-box {
              position: absolute;
              top: 0px;
              left: 0px;
             }
             .reviews-text-box {
              padding:  21px;
              border: none;
              box-shadow: 10px 10px 8px 2px rgba(0, 0, 0, 0.3);
              border-radius: 10px;
              background-color: #f6f5f5;
              width: 400px;
              height: 325px;
              position: absolute;
              top: 250px;
              left: 150px;
             
             }
             
             .tarif-container {
              max-width: 1200px; 
              margin: 21px auto;
              
             }
             .tarif-container h2 {
              padding: 21px 11px;
              margin: 21px;
             }
             .tarif-items {
              display:  flex;
              justify-content: center; 
              align-items: stretch;
              padding-bottom: 30px;
             }
             .tarif-item {
              display: flex;
              flex-direction: column;
              justify-content: start;
              flex: 1;
              margin: 9px 35px;
              padding: 21px;
              border: none;
              border-radius: 21px;
              background-color: #1F1D36;
              color: #fbf7f0;
              transition: transform 0.3s, box-shadow 0.3s; 
              text-align: center; 
              position: relative;
              
             }
             .tarif-item:hover {
              transform: translateY(-5px);
              background-color: #fbf7f0;
              color: #1F1D36;
              box-shadow: 8px 8px 6px 2px rgba(0, 0, 0, 0.3);
             }
             .tarif-item h3 {
              margin: 33px 18px;
              padding: 18px;
              border-radius: 15px;
              background-color: #fbf7f0;
              color: #1F1D36; 
             }
             .tarif-item h3:hover {
              background-color: #1F1D36 ;
              color: #fbf7f0; 
             }
             
             .tarif-btn {
              margin-top: auto;
              width: 100%;
             }
             .price-tarif {
              display: flex;
              justify-content: center;
              align-items: flex-end; 
              margin-bottom: 22px;
             }
             .price-tarif h2 {
              margin: 0;
              }
               .tarif-popular {
              position: absolute;
              left: 0;
              top: 0;
              width: 100%;
              height: 120px;
              overflow: hidden;
              }
             .tarifbloc {
              font-size: 14px;
              background-color: #f6f5f5;
               color: #1F1D36;
               position: absolute;
               display: block;
               top: 18px;
               right: -30px;
               width: 128px;
               padding: 9px 20px 8px;
               margin: 0;
               transform: rotate(45deg);
               height: 32px;
               z-index: 1;
               overflow: hidden;
               white-space: nowrap;
               text-overflow: ellipsis;
               box-sizing: border-box;
              }
           
              
              .our-partners {
              text-align: center;
              margin: 30px 0;
              overflow: hidden;
              }
              .our-partners h2 {
                  text-align: center;
              }
              .marquee-infinite {
                  max-width: 1200px;
                  overflow:  hidden;
              }
              .marquee-infinite div {
                  display: flex;
                  width: 200%;
                  animation: marquee-infinite 7s linear infinite;
              }
              
              .marquee-infinite h2 {
                  white-space: nowrap;
                  width: 100%;
                  
              }
              .marquee-infinite span {
                  width: 100%;
                  display: flex;
                  justify-content: space-around;
                  margin: 18px 0;
              }
              .marquee-infinite img {
                  width: 20%;
                 
              }
              .marquee-infinite:hover div {
                  animation-play-state: paused;
              }
              @keyframes marquee-infinite {
                 0% {
                  transform: translateX(0%);
                 } 
                 100% {
                  transform: translate(-50%);
                 } 
              }
              
           
             .footer {
              width: 100%;
              }
             .footer-container {
              display: flex;
              justify-content: center;
              align-items: center;
              flex: 1;
              }
             .footer-maps {
              flex: 1;
              margin: 21px 30px;
              }
             .input-customrowblock {
              display: flex;
              padding:  9px 18px;
              margin:  9px 0;
              border: 1px solid #040807;
              border-radius: 11px;
              width: 100%;
              }
             .textarea-customrowblock {
              display: flex;
              padding:  9px 18px;
              margin:  9px 0;
              border: 1px solid #040807;
              border-radius: 11px;
              width: 100%;
              }
             .form-footer {
              margin: 18px 24px;
              display: flex; 
              flex-direction: column;
              align-items: center;
              flex: 1;
              }
              .form-footer label {
                text-align: start;
              }
             .form-footer button {
              border: 2px solid #040807;
              width: 100%;
              }
              .contact-form-check {
                margin: 11px;
                display: flex; 
                align-items: center;
              }
              .contact-form-check a{
              color:  #040807;
              }
             .form-footer button:hover{
              box-shadow: 4px 4px 3px 2px rgba(0, 0, 0, 0.3);
              }
             .footer-contacts-menu {
              display: flex;
              align-items: center;
              align-content: center;
              justify-content: center;
              width: 100%;
              flex-direction: column;
              flex-wrap: wrap;
              flex: 1;
              }
              .footer-img-logo {
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center; 
                flex-direction: column;
                flex: 1;
              }
              .footer-img-logo img {
                height: 65px;
              }
             
              .footer-logo-text div {
                display: flex;
                margin: 18px;
                color: #1F1D36;
                font-size: 36px;
              }
              
              .footer-container-nav {
              display: flex;
              align-items: center;
              justify-content: space-around;
              flex: 1;
              gap: 65px;
            }
             .footer-contacts {
              display: flex;
              align-items: center;
              flex-direction: column;
              flex: 1;
             }
              .footer-contacts ul {
              padding: 0;
              }
              .footer-contacts li {
              line-height: 2;
              }
  
              .footer-contacts li a {
                text-decoration: none;
                color: inherit;
              }
             
              .navbar-footer {
              display: flex;
              flex-direction: column;
              justify-content: space-between; 
              flex-wrap: wrap;
              margin-top: auto;
              }
              .navbar-footer a {
              text-decoration: none;
              display: flex; 
              line-height: 1.5;
              color: #1F1D36;
              transition: all 200ms ease;
              padding: 10px;
              }
              .navbar-footer a:hover {
              opacity: 0.4;
              color: #03051E;
              transition: all 200ms ease;
              text-decoration: underline;
              }
              .com-checkbox {
                margin: 0 10px 0 0;
              }
              .form-check-label {
                margin: 10px 0;
                width: 100%;
              }
             
              .rights{
                padding:  33px;
              }
  
           .footer-rights{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 18px;
           }
  
           .footer-privacy{
            text-decoration: none;
            color: #040807;
            transition: all 200ms ease;
            text-align: center;
           }
  
           .footer-privacy:hover,
           .footer-privacy:focus{
            color: #040807;
            opacity: 0.4;
            transition: all 200ms ease;
            text-decoration: underline; 
           }
           
           
              .modal-overlay {
                position: fixed;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(128, 128, 128, 0.5);
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                width: 100%;
                opacity: 0.4;
                visibility: hidden;
                overflow: hidden;
              }
              .modal {
                display: none;
                position: fixed;
                z-index: 100;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(128, 128, 128, 0.5);
                overflow: hidden;
                align-items: center;
                justify-content: center;
    
              }
             .modal-content {
               background-color: #fbf7f0; 
               margin: 21px auto;
               padding: 21px;
               border: 2px solid #00000008;
               border-radius: 21px;
               width: 80%;
               max-width: 438px;
               position: relative;
             }
             .form-modal {
               width: 100%;
                 display: inline-grid;
             }
             .close {
               position: absolute;
               top: 0;
               right: 3px;
               cursor: pointer;
               font-size: 35px;
              }
              .modal-content p {
              padding-top: 18px;
              font-size: 22px;
             }
              .modal-content input {
               font-size: 16px;
               padding: 18px;
               border: none;
             }
             .modal-content textarea {
              font-size: 16px;
               padding: 7px;
               border: none;
             }
             .modal-content span {
               top:  8px;
               right: 14px;
             }
             .form-check-label-modal {
              margin: 11px;
              font-size: 16px;
             }
             .modal-content button {
              background-color: #040807;
              color: #fbf7f0;
              border: 2px solid #fbf7f0;
              padding: 9px 18px;
              border-radius: 11px;
              cursor: pointer;
              width: 100%;
             }
             header a {
              text-decoration: none;
             }
             .blockPriv {
              word-break: break-all;
            }
            .blockPriv p {
              padding: 11px 0;
            }
            .blockPriv li {
              list-style: circle;
              margin: 0 11px;
              padding: 11px 0;
            }
  
              @media screen and (min-width: 480px) {
                .container {
                  max-width: 480px;
                }
              }
              @media screen and (min-width: 768px) {
                .container {
                  max-width: 768px;
                }
              }
              @media screen and (min-width: 1200px) {
                .container {
                  max-width: 1200px;
                }
              }
            @media (max-width: 1199px) {
              .container-reviews-cusrtomer {
              flex-direction: column; 
              align-items: center; 
              padding: 15px;
            }
            .how-work-container {
              text-align: center; 
            }
            .how-work-items {
              display: flex;
              flex-direction: column !important; 
              align-items: center; 
            }
            .how-work-item {
              margin-bottom: 20px; 
              display: flex;
              align-items: center; 
            }
            
            .reviews-cusrtomer {
              margin: 10px;
            }
            .testimonial-section {
              width: 670px;
              height: 670px;
            }
            .testimonial {
              margin-bottom: 20px; 
            }
            .reviews-img {
              width: 350px; 
              height: auto;
            }
            .reviews__name {
              margin-top: 10px; 
            }
            .reviews-text-box {
              position: absolute;
              top: 250px;
            }
            .tarif-items {
            flex-wrap: wrap; 
            }
            .footer-logo-text div,
            .header-logo div {
              font-size: 22px;
            }
  
            .footer-logo-text div {
              font-size: 22px;
              width: 250px;
              display: flex;
              justify-content: center;
            }
            }
              @media  (max-width: 768px) {
            .header.open .navbar-wrap{
              transform: translateX(100%);
            }   
            .navbar> .container {
              display: flex;
              flex-wrap: inherit;
              align-items: center;
              justify-content: center;
            }
            .navbar-container {
              display: flex;
              align-items: center;
              justify-content: center;
              z-index: 50;
            }
            .header-logo {
              display: flex;
              align-items: center;
              padding: 15px;
              text-align: center;
            }
            
            .navbar-wrap {
              position: absolute;
              left: -350px;
              top: 0;
              width: 350px;
              background-color: #fbf7f0;
              padding: 75px 20px 20px 20px;
              transition: transform .5s;
              height: 100vh;
            }
          
          .nav-list {
          display: block;
          margin-bottom: auto;
            }
          .nav-link {
            color: #006F5F;
            display: block;
            padding: 10px 0;
          }
          .header.open .navbar-wrap {
            transform: translateX(100%);
            height: 100vh;
          }
          .navbar-wrap a {
              margin-bottom: 10px;
              font-size: 24px;
              color:  #006F5F;
            }
            .header-burger-btn {
            display: block;
            }
            .heder-button {
              margin-top: 20px;
            }
            .container-marquee-infinite {
              display: flex;
              flex-direction: column;
            }
            .marquee-infinite {
              width: 100%; 
            }
            .marquee-infinite > div {
              text-align: center; 
              margin: 10px 0; 
            }
            .container-head {
              flex-direction: column-reverse !important; 
              align-items: center; 
            }
            .head-title {
              text-align: center; 
              margin-bottom: 20px; 
            }
            .image-container {
              width: 100%; 
              margin-bottom: 20px; 
            }
            .hero-button {
              margin-top: 20px; 
            }
            .container-service {
              flex-direction: column !important; 
              align-items: center; 
              padding: 15px;
            }
            .left-column, .right-column {
              text-align: center; 
              margin-bottom: 20px; 
            }
            .service-item {
              width: 100%; 
              padding: 10px; 
            }
            .main-flex {
              flex-direction: column !important; 
              align-items: center;
            }
            .main-image img {
              width: 100% !important; 
              margin: 20px 0; 
            }
            .main-content {
              text-align: center; 
            }
            .price {
              text-align: center; 
              margin-top: 20px; 
            }
          
            .tarif-container {
              text-align: center; 
            }
            .tarif-item {
              margin-bottom: 20px; 
              text-align: center;
            }
            .price-tarif {
              margin-top: 10px; 
            }
            .tarif-btn {
              width: 100%;
            }
            .our-partners {
              text-align: center; 
            }
            .marquee-infinite {
            padding: 0;
            }
            .footer-container {
              flex-direction: column;}
            .form-footer button {
              width: 100%;
            }
            .footer-maps,
            .form-footer {
              width: 100%;
              display: inline-grid;
              margin-bottom: 21px;
              padding: 0 18px;
            }
            .com-checkbox {
              margin-right: 7px; 
            }
            .form-check-label {
              display: block; 
            }
            .btn {
              margin-top: 11px; 
            
            }
            .footer-logo {
              text-align: center; 
              flex-direction: column;
              align-items: center;
              margin: 10px;
            }
            .footer-img-logo,
            .footer-contacts-menu {
              display: flex;
              justify-content: flex-start;
              text-align: center; 
            }
          .footer-contacts-menu li {
            font-size: 16px;
            margin: 10px;
            display: flex;
              justify-content: center;
              text-align: center; 
          }
            .navbar-footer {
              display: none; 
            }
            .footer-rights a {
              font-size: 12px;
            }
            .modal-content {
              width: 90%;
            }
            .modal-content p {
              font-size: 22px;
            }
            .modal-content input,
            .modal-content label,
            .modal-content button,
            .modal-content textarea {
              font-size: 16px;
            }
          }
  
          @media (max-width: 767px) {
            .navbar-footer {
            display: none;
            } 
            .review-text {
              font-size: 14px;
            }
          }
          @media (max-width: 420px) {
            .reviews {
              padding-bottom: 60px;
            }
            .footer-rights{
                    display: flex;
                    text-align: center;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 18px;
                  }
          }
  
          .inner--background__black {
              background: #03051Ecc
          }
          .inner--background__black-two {
              background: #03051Ecc
          }
          .header-navigation {
              background-color: #e9896ae6
          }
  
          @media (max-width: 696px) {
            .header-logo {
              margin-top: 15px;
            }
          .testimonial {
            width: 270px;
            height: 550px;
            margin: 0px auto;
            background-color: transparent;
            box-shadow: none;
            transition: transform 0.8s ease-in-out;
            opacity: 1;
            }
            .reviews-text-img {
            position: absolute;
            width: 200px;
            top: 0;
            left: 0;
            }    
          .reviews-img {
          width: 200px;
          }    
          .reviews-text-box {
          box-shadow: none;
          width: 190px;
          height: 380px;
          position: absolute;
          top: 150px;
          left: 6px;
          }
          .how-work-item {
          width: 250px;
          }
          .testimonial-section {  
          width: 300px;
          height: 670px;
          }
          .modal-content {
              width: 95%;
          }
  
          .modal-content input {
            padding: 7px;
          }
          .modal-content textarea {
            padding: 7px;
          }
  
          }
          @media (max-width: 992px){
            .header-logo h1{
                font-size: 22px;
            }
        }
        button{
          outline: none;
          border: none;
          background: inherit;
        }

        .button-1 {
          --bg: #e74c3c;
          --text-color: #fff;
          position: relative;
          width: 150px;
          border: none;
          background: var(--bg);
          color: var(--text-color);
          padding: 1em;
          font-weight: bold;
          text-transform: uppercase;
          transition: 0.2s;
          border-radius: 5px;
          opacity: 0.8;
          letter-spacing: 1px;
          box-shadow: #c0392b 0px 7px 2px, #000 0px 8px 5px;
        }
        
        .button-1:hover {
          opacity: 1;
        }
        
        .button-1:active {
          top: 4px;
          box-shadow: #c0392b 0px 3px 2px,#000 0px 3px 5px;
        }
        
        .button-2 {
          color: #090909;
          padding: 0.7em 1.7em;
          font-size: 18px;
          border-radius: 0.5em;
          background: #e8e8e8;
          border: 1px solid #e8e8e8;
          transition: all .3s;
          box-shadow: 6px 6px 12px #c5c5c5,
                    -6px -6px 12px #ffffff;
        }
        
        .button-2:hover {
          border: 1px solid white;
        }
        
        .button-2:active {
          box-shadow: 4px 4px 12px #c5c5c5,
                    -4px -4px 12px #ffffff;
        }
        .button-3 {
          background: rgb(240, 235, 235);
          font-family: inherit;
          padding: 0.6em 1.3em;
          font-weight: 900;
          font-size: 18px;
          border: 3px solid black;
          border-radius: 0.4em;
          box-shadow: 0.1em 0.1em;
        }
        
        .button-3:hover {
          transform: translate(-0.05em, -0.05em);
          box-shadow: 0.15em 0.15em;
        }
        
        .button-3:active {
          transform: translate(0.05em, 0.05em);
          box-shadow: 0.05em 0.05em;
        }
        
        
        .button-4 {
          color: rgb(225, 215, 225);
          text-transform: uppercase;
          text-decoration: none;
          border: 2px solid rgb(225, 215, 225);
          padding: 10px 20px;
          font-size: 17px;
          font-weight: bold;
          background: transparent;
          position: relative;
          transition: all 1s;
          overflow: hidden;
        }
        
        .button-4:hover {
          color: white;
        }
        
        .button-4::before {
          content: '';
          position: absolute;
          height: 100%;
          width: 0%;
          top: 0;
          left: -40px;
          transform: skewX(45deg);
          background-color: purple;
          z-index: -1;
          transition: all 1s;
        }
        
        .button-4:hover::before {
          width: 160%;
        }

        .button-5 {
          background-color: #eee;
          border: none;
          padding: 1rem;
          font-size: 1rem;
          width: 10em;
          border-radius: 1rem;
          color: rgb(119, 117, 117);
          box-shadow: 0 0.4rem #dfd9d9;
          cursor: pointer;
        }
        
        .button-5:active {
          color: white;
          box-shadow: 0 0.2rem #dfd9d9;
          transform: translateY(0.2rem);
        }
        
        .button-5:hover:not(:disabled) {
          background: rgb(84, 9, 9);
          color: white;
          text-shadow: 0 0.1rem #bcb4b4;
        }
        
        .button-5:disabled {
          cursor: auto;
          color: grey;
        }
  
          </style>
          
            <div class="footer-contact footer bcg padding-style"> 
                <div class="container">
                     <div class="footer-contacts-menu flex-column-reverse">
                           <div class="footer-img-logo"> 
                             <img class="img-logo" src="main.svg">
                             <div class="footer-logo-text">
                                 <div>Penduluxobyn</div>
                             </div>
                           </div> 
                      
                           <div class="footer-container-nav" id="contactid">
                             
                                     <div class="navbar-footer">
                                         <a href="#ourservice">Our Services</a>
                                         <a href="#aboutusid">About us</a>
                                         <a href="#reviewid">Customer Testimonials</a>
                                         <a href="#contactid">Contacts</a>      
                                      </div>   
                           </div>  
                           
                     </div>

                </div>
          </div>

      

            <div class="rights padding-style">
              <div class="container">
                <div class="footer-rights">
                  <a class="footer-privacy" href="privacyPolicy.html" target="_blank">Privacy policy</a>
                  <a class="footer-privacy" href="terms.html" target="_blank">Terms & Conditions</a>
                  <a class="footer-privacy" href="legal-disclaimer.html" target="_blank">Disclaimer</a>
                </div>
              </div>
            </div>

         
        
        <script>

          document.addEventListener("DOMContentLoaded", function() {

            document.getElementById("burger").addEventListener("click", function() {
                document.querySelector("header").classList.toggle("open");
            });
 
        });

        $(document).ready(function(){
          $('.testimonial-section').slick({
            arrows:true,
            slidesToShow:1,
            touchThreshold:10,
            variableWidth: true,
            infinite: true,
            slidesToScrol: 1,
          });
        });


        $(document).ready(function() {

        function whatColor(){
            let blackColor = $('body').css('inner--background__black');
            let artTitleColor = $('.art--title').css('background-color');

            if(tinycolor(blackColor).isLight()){
                $('.inner--background__black').css({'color':'#333'});
                $('.inner--background__black-two').css({'color':'#333'});
                $('.header-navigation a').css({'color':'#333'});
                $('.header-phone a').css({'color':'#333'});
            }else{
                $('.inner--background__black').css({'color':'#fff'});
                $('.inner--background__black-two').css({'color':'#fff'});
                $('.header-navigation a').css({'color':'#fff'});
                $('.header-phone a').css({'color':'#fff'});
            }
            if(tinycolor(artTitleColor).isLight()){
                $('.art--title').css({'color':'#333'});
            }else{
                $('.art--title').css({'color':'#fff'});
            }

        }
        whatColor(); 

 
        });
        </script>
        
        

</body>
</html>
