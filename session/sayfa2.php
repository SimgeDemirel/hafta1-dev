<?php
session_start();
?>
 
<!doctype html>
<html>
    <head>
    <title>Session Kullanımı</title>
    </head>
    <body>
 
       <?php if(isset($_SESSION["adınız"])&&isset($_SESSION["soyadınız"])&&isset($_SESSION["eposta"]))
            {
       ?>
 
        Adınız: <?php echo $_SESSION['eposta']; ?><br>
		Soyadınız: <?php echo $_SESSION['adınız'];?><br>
        E- Posta Adresiniz: <?php echo $_SESSION['eposta']; }?><br>
 
        <a href="sayfa1.php">1.Sayfaya Git </a>
 
    </body>
</html>