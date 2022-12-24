<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>salon</title>
	<link rel="stylesheet" href="salon.css">
</head>
<header>
	<div id="navbar">
		<img class="salon" src="" alt="salon">
		<div class="navbarrc">
			 <a class="home" href="salon.php">Home</a>
			 <a class="services" href="services.php"> Services</a>
			 <a class="about" href="about.php">About Us</a>
			 <a class="reserve" href="reserve.php">Reservation</a>
		</div>
		<div class="dropdown">
			<div class="burger-top">
				<a src="#" class="burger"><h1> &#9776 </h1></a>
			</div>
			<div class="sub-burger">
				 <br>
				 <a id="text1" href="salon.html">Home</a>
				 <br>
				 <br>
				 <a id="text1" href="services.html">Services</a>
				 <br>
				 <br>
				 <a id="text1" href="about.html">About Us</a>
				 <br>
				 <br>
				 <a id="text1" href="reserve.html">Reservation</a>
			</div> 
		</div>   
	</div>
</header>
<body>
    <content>
        <div class="body">
            <div class="text-top">
                <p>NamaPerusahaan</p>
                <br>
                <p>Memberikan pelayanan dll (slogan)</p>
                <br>
                <br>
            </div>
			<!-- Slideshow container -->
			<div class="slideshow-container">
				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="img1.jpg" style="width:100%">
					<div class="text">Caption Text</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="img2.jpg" style="width:100%">
					<div class="text">Caption Two</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="img3.jpg" style="width:100%">
					<div class="text">Caption Three</div>
				</div>
				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>
        </div>
    </content>
<footer>
	<div class="footer">
		<div class="sosmed">
			<a href="https://www.instagram.com/" target="_blank" > <img src="twitterlogo.png" alt=""></a>
			<a href="https://www.facebook.com/" target="_blank" ><img src="facebooklogo.png" alt=""></a>
			<a href="https://www.twitter.com/home" target="_blank" ><img src="instagramlogo.png" alt=""></a>
		<p>Copyright Â:copyright: 2022 Kelompok 1 UAS Pemrograman Web. All Rights Reserved</p>
	</div>
</footer>
</html>