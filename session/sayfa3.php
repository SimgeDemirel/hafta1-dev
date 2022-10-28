<?php
session_start();
 
unset($_SESSION['eposta']);
session_destroy();
 
?>

 <!doctype html>
<html>
    <head>
    <title>Session Kullanımı</title>
    </head>
    <body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="submit" name="uye cikisi" value="uye cikisi">
        </form>
		
 
<a href="sayfa1.php">1. Sayfaya Git </a>
