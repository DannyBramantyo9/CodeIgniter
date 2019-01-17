<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/style.css">
</head>
<body style="background-image: url(<?=base_url()?>assets/bg.png);background-repeat: no-repeat">
	<header class="ob" >
		<div class="atas">
			<div id="logo"><img style="width: 170px; margin-left: 40px;margin-top: 20px;float: left;" src="<?=base_url()?>assets/logo.png" alt=""> </div>
				<nav>
				<ul>
					<li> <a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/profil">Profile</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<h1 align="center" style="color: white; text-align: left; font-size: 100px; margin-top: 97px; margin-left: 12px; font-family: Melon hunter;"> <b>Welcome To Our Website <?= $nama_lengkap?> <br> Act Like a <?= $jenis_kelamin?> </b></h1>

	<p style="font-size: 40px; margin-left: 20px; margin-top: -30px; font-family: Melon hunter;"><b>Hello Bram!</b> Welcome to our family <br>Gentleman reads chances and Books too</p>


</body>
</html>
