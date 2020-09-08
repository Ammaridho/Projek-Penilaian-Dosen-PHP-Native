<!DOCTYPE html>

<?php /*Tampilan Login*/ ?>

<html>

  <head>
    <title>INFORMATICS ENGINEERING OF OXFORD</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
  </head>

  <body>
	<div class="univ">INFORMATICS ENGINEERING OF OXFORD</div>
    <div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
		<form action="loginproc.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form_login" required>
		<label>Password</label>
		<input type="password" name="password" class="form_login" required>
		<input type="submit" class="tombol_login" value="Login">
	</div>
  </body>
  
</html>