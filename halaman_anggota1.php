<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<center>
	
<b><font color="black" font size="4">
<IMG SRC = "guru.png" width="500" height="300">
<BR>
  <br>APLIKASI ABSENSI WEB SEKOLAH SMKN 9 SEMARANG<br>
  SELAMAT DATANG BAPAK IBU GURU<br>
  JL.PETERONGAN SARI NO.2,PETERONGAN <br>
  KOTA SEMARANG<br>
  </div>
  </div>
  <br>
  COPYRIGHT @ AISYAH RAHMAWATI IMRAN 03 8871 XII RPL 
</body>
</html>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> ANDA TELAH LOGIN SEBAGAI <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	</center></font>
	<br/>
	<br/>
</body>
</html>