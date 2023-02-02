<!doctype html>
<html>

<head>
	<title>Login Poliklinik</title>
	<link href='logo/logo klinik.png' rel='SHORTCUT ICON' />
</head>

<index>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />

	<body background="wallpaper/wallpaper.jpeg">
		<center>
			<font size="5px" face="Time News Roman" color="Black">SELAMAT DATANG<br></font>
			<br>

			<form action="cekLogin.php" method="post" class="expose">
				<fieldset>
					<br>
					<img src="logo/logo klinik.png" width="130" height="140">
					<br><br>
					<font size="5px" face="tahoma" color="black">POLIKLINIK SAYANG<br></font><br>
					<input type="text" size="25px" name="Username" maxlength="20" placeholder="Inputkan Username" required><br /><br>
					<input type="password" size="25px" name="Password" id="password" maxlength="20" placeholder="Inputkan Password" required><br /><br />
					<input type="submit" class="tombol" name="login" value="" style="background-image:url(logo/tick.png); background-position:center; background-size:8%; background-repeat:no-repeat;">
					<br><br>
				</fieldset>
			</form>
		</center>
	</body>
</index>

</html>