<?php
session_start();
 
unset($_COOKIE['sifre']);
session_destroy();
 
?>

 <!doctype html>
<html>
    <head>
    <title>Cookie Kullanımı</title>
    </head>
    <body>
	<form method="post" action="2.sayfa.php">
	<input type="submit" name="uye cikisi" value="uye cikisi">
        </form>
		
 
<a href="1.sayfa.php">Üye GirişiEkranına Geri Dön </a>