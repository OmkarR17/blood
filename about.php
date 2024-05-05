<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-RaktKosh | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
	
	<section class="about">
		<div class="container py-xl-2 py-lg-2">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h1 class="title">Our Team</h1>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<b><p class="py-3">Our mission is to create a centralized platform that connects blood donors with those in need, making the process of blood donation more efficient and accessible. Through our website, we aim to promote awareness and educate the public on the importance of regular blood donation. By leveraging technology to streamline the process and connect donors with recipients in real-time, we hope to make a positive impact on the lives of those in need of life-saving blood transfusions.</p></b>
			</div>		
		</div>
	</section>
	
	<!-- our teams -->
	<section class="p-5">
	<h1 class="title py-xl-2 py-lg-2">Our Team</h1>
	<div class="card-deck">
	
	<div class="card">
    <img src="./images/omkar.jpg" class="card-img-top team-img" alt="Omkar" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Omkar Deokar</h4>
      <p class="card-text">Front & backend developer</p>      
	  <div class="row p-2">
	  
	  </div>
    </div>
  </div>

  <div class="card">
    <img src="./images/mandar.jpg" class="card-img-top team-img" alt="Mandar" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Mandar Gawande</h4>
      <p class="card-text">front-end developer & documentation</p>      
	  <div class="row p-2">

	  </div>
    </div>
  </div>
  
  <div class="card">
    <img src="./images/harshal.jpg" class="card-img-top team-img" alt="Harshal" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Harshal Teli</h4>
      <p class="card-text">Web Design & Front-end developer.</p>      
	  <div class="row p-2">
	 
	  </div>
    </div>
  </div>

  <div class="card">
    <img src="./images/om.jpg" class="card-img-top team-img" alt="omkar" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Omkar Chothave</h4>
      <p class="card-text">front-end & backend -end developement</p>      
	  <div class="row p-2">

	  </div>
    </div>
  </div>
  <div class="card">
    <img src="./images/rohit.jpg" class="card-img-top team-img" alt="" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Rohti Patil</h4>
      <p class="card-text">backend-end developer</p>      
	  <div class="row p-2">

	  </div>
    </div>
  </div>
  <div class="card">
    <img src="./images/sandip.jpg" class="card-img-top team-img" alt="Mandar" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Sandip Badhan</h4>
      <p class="card-text">Documentation</p>      
	  <div class="row p-2">

	  </div>
    </div>
  </div>
</div>
</section>
	<?php include('includes/footer.php');?>


	<script src="js/jquery-2.2.3.min.js"></script>
	
	
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	
	
	<script src="js/fixed-nav.js"></script>
	


	<script src="js/SmoothScroll.min.js"></script>

	<script src="js/move-top.js"></script>
	
	<script src="js/easing.js"></script>
	
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	
</body>

</html>