<?php
   session_start();

 
?>

 <!doctype html>
<html>
    <head>
    <title>Session Kullanımı</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Adınız :<input type="text" name="ad">
            Soyadınız:<input type="text" name="soyad">
			E- posta adresiniz:<input type="text" name="eposta">
            <input type="submit" name="uye girisi" value="uye girisi">
        </form>
 
        <br>
        <a href="sayfa2.php">Herkese Acık Sayfalar </a><br>
        <a href="sayfa3.php">Uyelere Ozel Sayfalar </a>
 
        <?php
		
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $_SESSION['ad']=$_POST['ad'];
		
		$_SESSION['soyad']=$_POST['soyad'];
 
        $_SESSION['eposta']=$_POST['eposta'];
 
        }
        ?>
    </body>
</html>

