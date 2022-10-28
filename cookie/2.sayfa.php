<?php
session_start();
?>
 
<!doctype html>
<html>
    <head>
    <title>Cookie Kullanımı</title>
    </head>
    <body>
 
       <?php if(isset($_COOKIE["adınız"])&&isset($_COOKIE["soyadınız"])&&isset($_COOKIE["sifre"]))
            {
       ?>
 
        Adınız: <?php echo $_COOKIE['ad']; ?><br>
		Soyadınız: <?php echo $_COOKIE['soyad'];?><br>
        Sifreniz: <?php echo $_COOKIE['sifre']; }?><br>
 
        <a href="1.sayfa.php">Üye Girişi Ekranına Geri Dön </a>
 
    </body>
</html>