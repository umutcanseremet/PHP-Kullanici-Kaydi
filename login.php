<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Kullanıcı Adı Zorunlu");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Şifre Zorunlu");
	    exit();
	}else{
	    $kayit=$db->exec("INSERT INTO deneme SET 
    uye_ad='".$_POST['uname']."',
    uye_soyad='".$_POST['password']."'
    ");
        header("Location: index.php?success=Kayıt Oldunuz");
        exit();
	}

}