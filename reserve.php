<!-- PHP nya -->
<?php
session_start();

include 'function.php';

if (isset($_POST['submit'])) {
    //Ngambil data dari form
    $layanan = implode(', ', $_POST['chk']);
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telepon = $_POST['no_telepon'];
    $cabang = $_POST['city'];
    $waktu_reservasi = $_POST['time'];
    $sql4 = "INSERT INTO reservasi (nama_lengkap, no_telepon, layanan, cabang, waktu_reservasi) 
    VALUES ('$nama_lengkap', '$no_telepon', '$layanan', '$cabang', '$waktu_reservasi')";
    $q4 = mysqli_query($koneksi, $sql4);
    if ($q4) {
        $success = "Berhasil reservasi";
        if ($success) {
            header("refresh:1;url=reserve.php");
        }
    } else {
        $error = "Gagal reservasi";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation</title>
	<link rel="stylesheet" href="reserve.css">
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
				 <a id="text1" href="salon.php">Home</a>
				 <br>
				 <br>
				 <a id="text1" href="services.php">Services</a>
				 <br>
				 <br>
				 <a id="text1" href="about.php">About Us</a>
				 <br>
				 <br>
				 <a id="text1" href="reserve.php">Reservation</a>
			</div> 
		</div>   
	</div>
</header>
<body>
    <div>
        <p class="loginscreen titletxt">Reservasi</p>

        <div class="lefttext">
            <form action="" method="POST">

                <input id="name" name="nama_lengkap" class="inputdata" type="text" placeholder="Full Name" value="<?php echo $nama_lengkap ?>" required>
                <br><br>
            
                <input id="phone" name="no_telepon" class="inputdata" type="phone" placeholder="Phone Number" value="<?php echo $no_telepon ?>" required>
                <br><br>
            
                <p id="warnareg">Services</p>
                <input id="pedicure" name="chk[]" class="inputservices" type="checkbox" placeholder="Services" value="Pedicure">
                <label>Pedicure</label>
                <input id="manicure" name="chk[]" class="inputservices" type="checkbox" placeholder="Services" value="Minicure">
                <label>Manicure</label>
                <input id="haircut" name="chk[]" class="inputservices" type="checkbox" placeholder="Services" value="Haircut">
                <label>Haircut</label>
                <br><br>
            
                <div id="warnareg">
                    <label id="city">City</label>
                    <br><br>
                    <select id="city" name="city" required>
                        <option value="">Select your city</option>
                        <option value="Jakarta" <?php if ($cabang=="Jakarta") echo "selected" ?>>Jakarta</option>
                        <option value="Bekasi" <?php if ($cabang=="Bekasi") echo "selected" ?>>Bekasi</option>
                        <option value="Bogor" <?php if ($cabang=="Bogor") echo "selected" ?>>Bogor</option>
                        <option value="Tangerang" <?php if ($cabang=="Tangerang") echo "selected" ?>>Tangerang</option>
                    </select>
                </div>
            
                <div id="warnareg">
                    <label id="time">Time</label>
                    <br><br>
                    <select id="time" name="time" required>
                        <option value="">Select your time visit</option>
                        <option value="09.00 - 12.00" <?php if($waktu_reservasi=="09.00 - 12.00") echo "selected"?>>Morning (09.00 - 12.00)</option>
                        <option value="12.00 - 15.00" <?php if($waktu_reservasi=="12.00 - 15.00") echo "selected"?>>Noon (12.00 - 15.00)</option>
                        <option value="15.00 - 19.00" <?php if($waktu_reservasi=="15.00 - 18.00") echo "selected"?>>Afternoon (15.00 - 18.00)</option>
                        <option value="18.00 - 20.00" <?php if($waktu_reservasi=="18.00 - 20.00") echo "selected"?>>Night (18.00 - 20.00)</option>
                    </select>
                </div>
            
                <input type="submit" name="submit" value="Reserve" onclick="reservasi()">
            
                <!-- ini apaan cukkk ?  -->
                <p id="Nameerror"></p>
                <p id="Phoneerror"></p>
                <p id="Gendererror"></p>
                <p id="Nohome"></p>
                <p id="Timeerror"></p>
                </div>
        
            </form>   
    </div>
</body>
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