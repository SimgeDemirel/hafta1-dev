<?php
   session_start();

 
?>

 <!doctype html>
<html>
    <head>
    <title>Cookie Kullanımı</title>
    </head>
    <body>
        <form method="post" action="3.sayfa.php">
            Adınız :<input type="text" name="ad">
            Soyadınız:<input type="text" name="soyad">
			Sifreniz:<input type="text" name="sifre">
            <input type="submit" name="uye girisi" value="uye girisi">
        </form>
 
        <br>
		
        <a href="2.sayfa.php">Herkese Acık Sayfalar (2.Sayfa) </a><br>
		
        <a href="3.sayfa.php">Uyelere Ozel Sayfalar (3.Sayfa) </a>
 
        <?php
		
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $_COOKIE['ad']=$_POST['ad'];
		
		$_COOKIE['soyad']=$_POST['soyad'];
 
        $_COOKIE['sifre']=$_POST['sifre'];
 
        }
        ?>
    </body>
</html>

