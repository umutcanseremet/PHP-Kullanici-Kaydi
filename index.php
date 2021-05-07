<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kayıt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="login.php" method="post">
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']?></p>
        <?php } ?>
	    <?php if (isset($_GET['success'])) {?>
	        <p class="success"><?php echo $_GET['success']?></p>
	    <?php } ?>
	    <label>Kullanıcı Adı</label>
	    <input type="text" name="uname" id="uname" >
	    <label>Şifre</label>
	    <input type="password" name="password" id="password" >
	    <button type="submit">Kayıt Ol</button>
          <a href="signup.php" class="ca">Giriş Yap</a>
     </form>
</body>
</html>
